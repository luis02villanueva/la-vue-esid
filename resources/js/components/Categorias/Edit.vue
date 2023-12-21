<template lang="">
    <div id="kt_app_content_container" class="app-container container-fluid">
        <form
            @submit.prevent="actualizarCategoria()"
            class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework"
        >
            <div
                class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10"
            >
                <div class="card card-flush py-4">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Imagen de la categoria</h2>
                        </div>
                    </div>

                    <div class="card-body text-center pt-0">
                        <div
                            class="image-input image-input-empty image-input-outline mb-3"
                        >
                            <div class="image-input-wrapper w-150px h-150px">
                                <img
                                 
                                    :src="imagen"
                                   
                                    class="image-input-placeholder w-150px h-150px image-input image-input-empty"
                                    alt=""
                                />
                            </div>

                            <label
                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change"
                                data-bs-toggle="tooltip"
                                aria-label="avatar"
                                data-bs-original-title="avatar"
                                data-kt-initialized="1"
                            >
                                <!--begin::Icon-->
                                <i class="ki-duotone ki-pencil fs-7"
                                    ><i class="path1"></i><i class="path2"></i
                                ></i>

                                <input
                                    type="file"
                                    name="avatar"
                                    accept=".png, .jpg, .jpeg"
                                    @change="obtenerImagen"
                                />
                                <input type="hidden" name="avatar_remove" />
                                <!--end::Inputs-->
                            </label>
                            <!--end::Label-->

                            <!--begin::Cancel-->
                            <span
                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel"
                                data-bs-toggle="tooltip"
                                aria-label="Cancel avatar"
                                data-bs-original-title="Cancel avatar"
                                data-kt-initialized="1"
                            >
                                <i class="ki-duotone ki-cross fs-2"
                                    ><i class="path1"></i><i class="path2"></i
                                ></i>
                            </span>
                            <!--end::Cancel-->

                            <!--begin::Remove-->
                            <span
                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="remove"
                                data-bs-toggle="tooltip"
                                aria-label="Remove avatar"
                                data-bs-original-title="Remove avatar"
                                data-kt-initialized="1"
                            >
                                <i class="ki-duotone ki-cross fs-2"
                                    ><i class="path1"></i><i class="path2"></i
                                ></i>
                            </span>
                            <!--end::Remove-->
                        </div>
                        <!--end::Image input-->

                        <!--begin::Description-->
                        <div class="text-muted fs-7">
                            Set the category thumbnail image. Only *.png, *.jpg
                            and *.jpeg image files are accepted
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                </div>
            </div>

            <!--end::Thumbnail settings-->
            <!--begin::Status-->

            <!--end::Aside column-->

            <!--begin::Main column-->
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                <!--begin::General options-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Registrar Categoria</h2>
                        </div>
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Input group-->
                        <div class="mb-10 fv-row fv-plugins-icon-container">
                            <label class="required form-label"
                                >Nombre de la Categoria</label
                            >

                            <input
                                type="text"
                                name="nombre_categoria"
                                v-model="categorias.nombre_categoria"
                                class="form-control mb-2"
                                placeholder="Ingrese nombre de la categoria"
                            />
                        </div>

                        <div class="mb-10 fv-row fv-plugins-icon-container">
                            <label class="required form-label"
                                >Descripcion de la Categoria</label
                            >

                            <input
                                type="text"
                                name="descripcion_categoria"
                                v-model="categorias.descripcion_categoria"
                                class="form-control mb-2"
                                placeholder="Ingrese la descripcion de la categoria"
                            />
                        </div>
                    </div>
                    <!--end::Card header-->
                </div>

                <!--end::Automation-->
                <div class="d-flex justify-content-end">
                    <!--begin::Button-->

                    <router-link to="/categorias" class="btn btn-light me-5"
                        >Cancelar</router-link
                    >

                    <!--end::Button-->

                    <!--begin::Button-->
                    <button type="submit" class="btn btn-primary">
                        <span class="indicator-label"> Guardar</span>
                    </button>
                    <!--end::Button-->
                </div>
            </div>
            <!--end::Main column-->
        </form>
    </div>
</template>
<script>
export default {
    data() {
        return {
            RESPUESTA: [],
            categorias: {
                nombre_categoria: null,
                descripcion_categoria: null,
                avatar: null,
            },
            imgpreview: null,
        };
    },
    mounted() {
        this.mostrarCategorias();
    },
    methods: {
        async mostrarCategorias() {
            var category = await (
                await axios.get("/api/categoria/" + this.$route.params.id)
            ).data.data;

            this.categorias.nombre_categoria = category.nombre_categoria;
            this.categorias.descripcion_categoria =
                category.descripcion_categoria;
            this.categorias.avatar = category.avatar;
            this.categorias.imgpreview = category.imgpreview;
        },

        async actualizarCategoria() {
            var formData = new FormData();
            formData.append(
                "nombre_categoria",
                this.categorias.nombre_categoria
            );
            formData.append(
                "descripcion_categoria",
                this.categorias.descripcion_categoria
            );
            formData.append("avatar", this.categorias.avatar);
            console.log(formData.get("descripcion_categoria"));
            console.log(formData.get("nombre_categoria"));
            console.log(formData.get("avatar"));

            await axios.post(
                "/api/categoria/" + this.$route.params.id,
                formData
            );

            this.$router.push({ name: "categoria.index" });
        },

        obtenerImagen(e) {
            let file = e.target.files[0];
            console.log(file);
            this.categorias.avatar = file;
            this.cargarImagen(file);
        },

        cargarImagen(file) {
            //el FileReader nos permite leer archivos
            let reader = new FileReader();
            reader.onload = (e) => {
                this.imgpreview = e.target.result;
            };
            reader.readAsDataURL(file);
        },
    },

    computed: {
        imagen() {
            return this.imgpreview;
        },
    },
};
</script>
<style lang="css">
.image-input-placeholder {
    background-image: url("../../../assets/media/svg/files/blank-image.svg");
}

[data-bs-theme="dark"] .image-input-placeholder {
    background-image: url("../../../assets/media/svg/files/blank-image.svg");
}
</style>
