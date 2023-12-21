<template lang="">
    <div id="kt_app_content_container" class="app-container container-fluid">
        <Toast />
        <div class="card card-flush">
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                <div class="card-title">
                    <div
                        class="d-flex align-items-center position-relative my-1"
                    >
                        <i
                            class="ki-duotone ki-magnifier fs-1 position-absolute ms-4"
                            ><i class="path1"></i><i class="path2"></i
                        ></i>
                        <input
                            type="search"
                            v-model="params.buscador"
                            class="form-control form-control-solid w-250px ps-14"
                            placeholder="buscar Categoria"
                            @keyup="buscarCategorias"
                        />
                    </div>
                </div>

                <div class="card-toolbar">
                    <div
                        class="d-flex justify-content-end"
                        data-kt-user-table-toolbar="base"
                    >
                        <button
                            type="button"
                            class="btn btn-light-primary me-3"
                            data-bs-toggle="modal"
                            data-bs-target="#kt_modal_export_users"
                        >
                            <i class="ki-duotone ki-exit-up fs-2"
                                ><i class="path1"></i><i class="path2"></i
                            ></i>
                            Export
                        </button>

                        <button
                            to="/crearcategoria"
                            type="button"
                            class="btn btn-primary"
                            @click="openCategoria()"
                        >
                            <i class="ki-duotone ki-plus fs-2"></i> Crear
                            Categoria
                        </button>
                    </div>
                </div>
            </div>

            <div class="card-body pt-0">
                <div
                    id="kt_ecommerce_sales_table_wrapper"
                    class="dataTables_wrapper dt-bootstrap4 no-footer"
                >
                    <div class="table-responsive">
                        <DataTable
                            :value="Categorias"
                            tableStyle="min-width: 60rem"
                            paginator
                            :rows="3"
                            paginatorTemplate="FirstPageLink PrevPageLink PageLinks NextPageLink LastPageLink CurrentPageReport RowsPerPageDropdown"
                            :rowsPerPageOptions="[3, 6, 12]"
                            currentPageReportTemplate="Showing {first} to {last} of {totalRecords} categorias"
                        >
                            <Column
                                header="Categoria"
                                sortable
                                sortField="nombre_categoria"
                                filterField="representative"
                                :showFilterMatchModes="false"
                                :filterMenuStyle="{ width: '25%' }"
                                style="width: 50%"
                            >
                                <template #body="slotProps">
                                    <!--begin:: Avatar -->
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="symbol symbol-circle symbol-50px overflow-hidden me-3"
                                        >
                                            <a href="view.html">
                                                <div class="symbol-label">
                                                    <img
                                                        :src="`uploads/categorias/${slotProps.data.avatar}`"
                                                        :alt="
                                                            slotProps.data.image
                                                        "
                                                        class="shadow-4"
                                                        width="64"
                                                    />
                                                </div>
                                            </a>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::User details-->
                                        <div class="d-flex flex-column">
                                            <a
                                                href="view.html"
                                                class="text-gray-800 text-hover-primary mb-1"
                                                >{{
                                                    slotProps.data
                                                        .nombre_categoria
                                                }}</a
                                            >
                                            <span>{{
                                                slotProps.data
                                                    .descripcion_categoria
                                            }}</span>
                                        </div>
                                    </div>
                                    <!--begin::User details-->
                                </template>
                            </Column>

                            <Column
                                field="estado"
                                sortable
                                sortField="estado"
                                header="Estado "
                                style="width: 35%"
                            >
                                <template #body="slotProps">
                                    <div
                                        class="badge badge-light-success"
                                        v-if="slotProps.data.estado === 1"
                                    >
                                        ACTIVO
                                    </div>
                                    <div
                                        class="badge badge-light-danger"
                                        v-if="slotProps.data.estado === 0"
                                    >
                                        DESACTIVO
                                    </div>
                                </template>
                            </Column>

                            <Column :exportable="false" style="min-width: 8rem">
                                <template #body="slotProps">
                                    <!-- <router-link

                                        :to="{
                                            name: 'categoria.edit',
                                            params: { id: slotProps.data.id },
                                        }"
                                        onclick="return false"
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                    >
                                        <span class="svg-icon svg-icon-3">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                            >
                                                <path
                                                    opacity="0.3"
                                                    d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                    fill="currentColor"
                                                />
                                                <path
                                                    d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                    fill="currentColor"
                                                />
                                            </svg>
                                        </span>
                                    </router-link> -->
                                    <a
                                        @click="
                                        openeditarDialog(slotProps.data.id)
                                        "
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                    >
                                        <span class="svg-icon svg-icon-3">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                            >
                                                <path
                                                    opacity="0.3"
                                                    d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                    fill="currentColor"
                                                />
                                                <path
                                                    d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                    fill="currentColor"
                                                />
                                            </svg>
                                        </span>
                                    </a>
                                    <a
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm"
                                        @click="confirmDeleteCategoria(slotProps.data.id)"
                                    >
                                        <span class="svg-icon svg-icon-3">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                            >
                                                <path
                                                    d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                    fill="currentColor"
                                                />
                                                <path
                                                    opacity="0.5"
                                                    d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                    fill="currentColor"
                                                />
                                                <path
                                                    opacity="0.5"
                                                    d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                    fill="currentColor"
                                                />
                                            </svg>
                                        </span>
                                    </a>
                                </template>
                            </Column>
                        </DataTable>
                        <!-- CREAR CATEGORIA -->
                        <Dialog
                            v-model:visible="abrirDialog"
                            :style="{ width: '450px' }"
                            header="REGISTRAR CATEGORIAS"
                            :modal="true"
                            class="p-fluid"
                        >
                            <br />
                            <div class="formgrid grid">
                                <br />
                                <div class="field col">
                                    <div class="card-body text-center pt-0">
                                        <div
                                            class="image-input image-input-empty image-input-outline mb-3"
                                        >
                                            <div
                                                class="image-input-wrapper w-150px h-150px"
                                            >
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
                                                <i
                                                    class="ki-duotone ki-pencil fs-7"
                                                    ><i class="path1"></i
                                                    ><i class="path2"></i
                                                ></i>

                                                <input
                                                    type="file"
                                                    name="avatar"
                                                    accept=".png, .jpg, .jpeg"
                                                    @change="obtenerImagen"
                                                />
                                                <input
                                                    type="hidden"
                                                    name="avatar_remove"
                                                />
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
                                                <i
                                                    class="ki-duotone ki-cross fs-2"
                                                    ><i class="path1"></i
                                                    ><i class="path2"></i
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
                                                <i
                                                    class="ki-duotone ki-cross fs-2"
                                                    ><i class="path1"></i
                                                    ><i class="path2"></i
                                                ></i>
                                            </span>
                                            <!--end::Remove-->
                                        </div>

                                        <div class="text-muted fs-7">
                                            Set the category thumbnail image.
                                            Only *.png, *.jpg and *.jpeg image
                                            files are accepted
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="formgrid grid">
                                <div class="field col-12">
                                    <label for="nombre_categoria"
                                        >Nombre de la Categoria</label
                                    >
                                    <InputText
                                        v-model="nombre_categoria"
                                        type="text"
                                        required="true"
                                        size="large"
                                        placeholder="Ingrese nombre de la categoria"
                                    />
                                </div>
                                <br />
                                <div class="field col-12">
                                    <label for="descripcion_categoria"
                                        >Descripcion de la categoria</label
                                    >
                                    <InputText
                                        v-model="descripcion_categoria"
                                        type="text"
                                        required="true"
                                        size="large"
                                        placeholder="Ingrese descripcion de la categoria"
                                    />
                                </div>
                            </div>
                            <template #footer>
                                <Button
                                    label="Cancelar"
                                    icon="pi pi-times"
                                    text
                                    @click="hideDialog()"
                                />
                                <Button
                                    label="Guardar"
                                    icon="pi pi-check"
                                    text
                                    @click="guardarCategoria()"
                                />
                            </template>
                        </Dialog>

                        <!-- EDITAR CATEGORIA -->

                        <Dialog
                            v-model:visible="abrirDialog"
                            :style="{ width: '450px' }"
                            header="REGISTRAR CATEGORIAS"
                            :modal="true"
                            class="p-fluid"
                        >
                            <br />
                            <div class="formgrid grid">
                                <br />
                                <div class="field col">
                                    <div class="card-body text-center pt-0">
                                        <div
                                            class="image-input image-input-empty image-input-outline mb-3"
                                        >
                                            <div
                                                class="image-input-wrapper w-150px h-150px"
                                            >
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
                                                <i
                                                    class="ki-duotone ki-pencil fs-7"
                                                    ><i class="path1"></i
                                                    ><i class="path2"></i
                                                ></i>

                                                <input
                                                    type="file"
                                                    name="avatar"
                                                    accept=".png, .jpg, .jpeg"
                                                    @change="obtenerImagen"
                                                />
                                                <input
                                                    type="hidden"
                                                    name="avatar_remove"
                                                />
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
                                                <i
                                                    class="ki-duotone ki-cross fs-2"
                                                    ><i class="path1"></i
                                                    ><i class="path2"></i
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
                                                <i
                                                    class="ki-duotone ki-cross fs-2"
                                                    ><i class="path1"></i
                                                    ><i class="path2"></i
                                                ></i>
                                            </span>
                                            <!--end::Remove-->
                                        </div>

                                        <div class="text-muted fs-7">
                                            Set the category thumbnail image.
                                            Only *.png, *.jpg and *.jpeg image
                                            files are accepted
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="formgrid grid">
                                <div class="field col-12">
                                    <label for="nombre_categoria"
                                        >Nombre de la Categoria</label
                                    >
                                    <InputText
                                        v-model="categorias.nombre_categoria"
                                        type="text"
                                        required="true"
                                        size="large"
                                        placeholder="Ingrese nombre de la categoria"
                                    />
                                </div>
                                <br />
                                <div class="field col-12">
                                    <label for="descripcion_categoria"
                                        >Descripcion de la categoria</label
                                    >
                                    <InputText
                                        v-model="categorias.descripcion_categoria"
                                        type="text"
                                        required="true"
                                        size="large"
                                        placeholder="Ingrese descripcion de la categoria"
                                    />
                                </div>
                            </div>
                            <template #footer>
                                <Button
                                    label="Cancelar"
                                    icon="pi pi-times"
                                    text
                                    @click="hideDialog()"
                                />
                                <Button
                                    label="Guardar"
                                    icon="pi pi-check"
                                    text
                                    @click="editarCategoria()"
                                />
                            </template>
                        </Dialog>

                        <!-- ELIMINAR CATEGORIA -->
                        <Dialog
                        v-model:visible="deletecategoriaDialog"
                        :style="{ width: '450px' }"
                        header="Confirm"
                        :modal="true"
                    >
                        <div class="confirmation-content">
                            <i
                                class="pi pi-exclamation-triangle mr-3"
                                style="font-size: 2rem"
                            />
                            <span v-if="categorias"
                                >Desea eliminar el curso de
                                <b>{{ categorias.nombre_categoria }}</b
                                >?</span
                            >
                        </div>
                        <template #footer>
                            <Button
                                label="No"
                                icon="pi pi-times"
                                text
                                @click="deletecategoriaDialog = false"
                            />
                            <Button
                                label="Yes"
                                icon="pi pi-check"
                                text
                                @click="eliminarDato"
                            />
                        </template>
                    </Dialog>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            Categorias: [],
            paginador: [],
            abrirDialog: false,
            deletecategoriaDialog:false,
            Prueba: [],
            setTimeoutBuscador: "",
            params: {
                page: 1,
                buscador: "",
            },
            nombre_categoria: "",
            descripcion_categoria: "",
            avatar: "",
            imgpreview: "",
            RESPUESTA: [],
            categorias: {
                id:'',
                nombre_categoria: null,
                descripcion_categoria: null,
                avatar: null,
            },
        };
    },

    mounted() {
        this.listarCategorias();
    },
    methods: {
        async listarCategorias() {
            var page = this.params.page;
            var buscador = this.params.buscador;
            console.log(this.params.page);
            this.Categorias = await (
                await axios.get("/api/categoria", { params: this.params })
            ).data.categorias;
            console.log(this.Categorias);
        },
        async confirmDeleteCategoria(value){
          this.deletecategoriaDialog = true;
            var finId = await (await axios.get("/api/categoria/" + value)).data;
            this.categorias.id = finId.id;
            this.categorias.nombre_categoria = finId.nombre_categoria;

            console.log( this.categorias.nombre_curso);
            
        },
        async eliminarDato() {
            await axios.delete("/api/categoria/" + this.categorias.id);
            this.deletecategoriaDialog = false;
            this.listarCategorias();
           
        },
        async openCategoria() {
            this.abrirDialog = true;
        },
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

        async guardarCategoria() {
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
                this.$swal.fire({
                    text: "Categoria guardado exitosamente",
                    icon: "success",
                    timer: 8000,
                });
            }
            this.abrirDialog = false;
        },
        async openeditarDialog(value) {
            this.abrirDialog = true;
            var category = await (await axios.get("/api/categoria/" + value)).data;
            console.log('este',category);
            this.categorias.nombre_categoria = category.nombre_categoria;
            this.categorias.descripcion_categoria =
                category.descripcion_categoria;
            this.categorias.avatar = category.avatar;
            this.categorias.id = category.id;

            this.categorias.imgpreview = category.imgpreview;

            console.log("viene datos", category);
            this.editarDialog = true;
            console.log("abrio el modal");
        },
        async EliminarCurso() {
            await axios.delete("/api/categoria/" + this.categorias.id);
            this.listarCategorias();
            this.abrirDialog = false;

        },
        buscarCategorias() {
            //El clearTimeout nos permite ejecutar una peticion en el servidor pues borra las peticiones que se ejvutaro antes

            clearTimeout(this.setTimeoutBuscador);
            //El setTimeout se ejecuta cada vez que nosotros hacemos la peticion al sevidor letra por letra
            this.setTimeoutBuscador = setTimeout(this.listarCategorias, 150);
            console.log(this.setTimeoutBuscador);
        },
        async editarCategoria(){
            console.log("valor de arriba ", this.categorias);
            const formData = new FormData();
            formData.append("nombre_categoria", this.categorias.nombre_categoria);
            formData.append(
                "descripcion_categoria",
                this.categorias.descripcion_categoria
            );
            formData.append("avatar", this.avatar);

            console.log(formData.get("nombre_curso"));
            console.log(formData.get("descripcion_curso"));
            console.log(formData.get("avatar_cursos"));

            this.RESPUESTA = await await axios.post(
                "/api/categoria/" + this.categorias.id,
                formData
            );
            console.log(this.RESPUESTA);
            if (this.RESPUESTA.status == 200) {
                window.location.href = "/categorias";
                this.$swal.fire({
                    text: "Categoria editado exitosamente",
                    icon: "success",
                    timer: 8000,
                });
            }
            this.abrirDialog = false;
        }
    },
    computed: {
        imagen() {
            return this.imgpreview;
        },
    },
};
</script>
