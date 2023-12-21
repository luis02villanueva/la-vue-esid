<template lang="">
    <div id="kt_app_content_container" class="app-container container-fluid">
        <Toast />
        <form
            @submit.prevent="guardarCategorias"
            enctype="multipart/form-data"
            class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework"
        >
            <br />
            <div class="formgrid grid">
                <div class="field col-4">
                    <label for="">IMAGEN DE LA CATEGORIA</label>
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
                        <div class="text-muted fs-7">
                            Set the category thumbnail image. Only *.png, *.jpg
                            and *.jpeg image files are accepted
                        </div>
                    </div>
                </div>
                <div class="field col-8">
                    <div class="formgrid grid">
                        <div class="field col-8">
                            <label for="nombre_categoria"
                                >NOMBRE DE LA CATEGORIA</label
                            >
                            <br />
                            <br />
                            <InputText
                                v-model="nombre_categoria"
                                type="text"
                                required="true"
                                size="large"
                                placeholder="Ingrese nombre de la categoria"
                            />
                        </div>

                        <div class="field col-8">
                            <label for="descripcion_categoria"
                                >DESCRIPCION DE LA CATEGORIA</label
                            >
                            <br />
                            <br />
                            <InputText
                                v-model="descripcion_categoria"
                                type="text"
                                required="true"
                                size="large"
                                placeholder="Ingrese descripcion de la categoria"
                            />
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <!--begin::Button-->
                <router-link to="/categorias" class="btn btn-light me-5"
                    >Cancelar</router-link
                >
                <button type="submit" class="btn btn-primary">
                    <span class="indicator-label"> Guardar</span>
                </button>
            </div>
        </form>
    </div>
</template>
<script>
export default {
    data() {
        return {
            nombre_categoria: "",
            descripcion_categoria: "",
            avatar: "",
            imgpreview: "",
            RESPUESTA: [],
        };
    },

    methods: {
        obtenerImagen(e) {
            let file = e.target.files[0];
            console.log(file);
            this.avatar = file;
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

        async guardarCategorias() {
            const formData = new FormData();
            formData.append("nombre_categoria", this.nombre_categoria);
            formData.append(
                "descripcion_categoria",
                this.descripcion_categoria
            );
            formData.append("avatar", this.avatar);

            this.RESPUESTA = await await axios.post("/api/categoria", formData);

            if (this.RESPUESTA.status == 200) {
                window.location.href = "/categorias";
            }
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
