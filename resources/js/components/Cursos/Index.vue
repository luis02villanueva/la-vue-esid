<template lang="">
    <div id="kt_app_content_container" class="app-container container-fluid">
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
                            class="form-control form-control-solid w-250px ps-14"
                            placeholder="buscar Categoria"
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
                            @click="openNew()"
                        >
                            <i class="ki-duotone ki-plus fs-2"></i> Crear
                            Cursos
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
                            :value="Curso"
                            tableStyle="min-width: 60rem"
                            paginator
                            :rows="3"
                            paginatorTemplate="FirstPageLink PrevPageLink PageLinks NextPageLink LastPageLink CurrentPageReport RowsPerPageDropdown"
                            :rowsPerPageOptions="[3, 6, 12]"
                            currentPageReportTemplate="Showing {first} to {last} of {totalRecords} categorias"
                        >
                            <Column
                                field="id"
                                header="ID"
                                sortable
                                style="width: 20%"
                                >{{ slotProps.data.id }}
                            </Column>
                            <Column
                                header="Imagen"
                                field="avatar_cursos"
                                style="width: 20%"
                            >
                                <template #body="slotProps">
                                    <img
                                        :src="`uploads/cursoss/${slotProps.data.avatar_cursos}`"
                                        :alt="slotProps.data.image"
                                        class="shadow-2 border-round"
                                        style="width: 80px"
                                    />
                                </template>
                            </Column>

                            <Column
                                field="nombre_curso"
                                header="Nombre del curso"
                                sortable
                                style="width: 20%"
                                >{{ slotProps.data.nombre_curso }}</Column
                            >
                            <Column
                                field="descripcion_curso"
                                header="Descripcion del curso"
                                sortable
                                style="width: 20%"
                                >{{ slotProps.data.descripcion_curso }}</Column
                            >
                            <Column
                                field="nombre_categoria"
                                header="Categoria"
                                sortable
                                style="width: 20%"
                                >{{ slotProps.data.nombre_categoria }}</Column
                            >                            
                            <Column
                                field="hora_lectivas"
                                header="Hors lectivas"
                                sortable
                                style="width: 20%"
                                >{{ slotProps.data.hora_lectivas }}</Column
                            >

                            <Column
                                field="fecha_inicio"
                                header="Fecha de incio"
                                sortable
                                style="width: 20%"
                                >{{ slotProps.data.fecha_inicio }}</Column
                            >
                            <Column
                                field="fecha_fin"
                                header="Fecha fin"
                                sortable
                                style="width: 20%"
                                >{{ slotProps.data.fecha_fin }}</Column
                            >

                            <Column
                                field="curso.estado"
                                sortable
                                sortField="estado"
                                header="Estado "
                                style="width: 20%"
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

                            <Column :exportable="false" style="width: 20%">
                                <template #body="slotProps">
                                    <a
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                        @click="
                                            openeditarDialog(slotProps.data.id)
                                        "
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
                                        @click="
                                            confirmDeleteCurso(
                                                slotProps.data.id
                                            )
                                        "
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
                    </div>
                </div>
            </div>

            <Dialog
                v-model:visible="cursoDialog"
                :style="{ width: '450px' }"
                header="REGISTRAR CURSOS"
                :modal="true"
                class="p-fluid"
            >
            <br>
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
                                    aria-label="avatar_cursos"
                                    data-bs-original-title="avatar_cursos"
                                    data-kt-initialized="1"
                                >
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-pencil fs-7"
                                        ><i class="path1"></i
                                        ><i class="path2"></i
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
                                    <i class="ki-duotone ki-cross fs-2"
                                        ><i class="path1"></i
                                        ><i class="path2"></i
                                    ></i>
                                </span>
                                <!--end::Remove-->
                            </div>

                            <div class="text-muted fs-7">
                                Set the category thumbnail image. Only *.png,
                                *.jpg and *.jpeg image files are accepted
                            </div>
                        </div>
                    </div>
                </div>
                <div class="formgrid grid">
                    <div class="field col-12">
                        <label for="nombre_curso">Nombre del curso</label>
                        <InputText
                            v-model="nombre_curso"
                            type="text"
                            required="true"
                            size="large"
                            placeholder="Ingrese nombre del curso"
                        />
                    </div>
                    <br />
                    <div class="field col-12">
                        <label for="descripcion_curso"
                            >Descripcion del Curso</label
                        >
                        <InputText
                            v-model="descripcion_curso"
                            type="text"
                            required="true"
                            size="large"
                            placeholder="Ingrese descripcion del curso"
                        />
                    </div>
                    <br />
                    <div class="field col-12">
                        <label for="select" class="mb-3"
                            >Seleccionar Categoria</label
                        >
                        <Dropdown
                            v-model="select"
                            :options="Categoria"
                            optionValue="id"
                            optionLabel="nombre_categoria"
                            placeholder="seleccione las categorias"
                            class="w-full md:w-50rem"
                        >
                        </Dropdown>
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
                        @click="guardarCurso()"
                    />
                </template>
            </Dialog>

            <!-- Dialog para editar cursos -->
            <Dialog
                v-model:visible="editarDialog"
                :style="{ width: '450px' }"
                header="EDITAR CURSOS"
                :modal="true"
                class="p-fluid"
            >
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
                                    aria-label="avatar_cursos"
                                    data-bs-original-title="avatar_cursos"
                                    data-kt-initialized="1"
                                >
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-pencil fs-7"
                                        ><i class="path1"></i
                                        ><i class="path2"></i
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
                                    <i class="ki-duotone ki-cross fs-2"
                                        ><i class="path1"></i
                                        ><i class="path2"></i
                                    ></i>
                                </span>
                                <!--end::Remove-->
                            </div>

                            <div class="text-muted fs-7">
                                Set the category thumbnail image. Only *.png,
                                *.jpg and *.jpeg image files are accepted
                            </div>
                        </div>
                    </div>
                </div>
                <div class="formgrid grid">
                    <div class="field col-12">
                        <label for="nombre_curso">Nombre del curso</label>
                        <InputText
                            v-model="acursito.nombre_curso"
                            type="text"
                            required="true"
                            size="large"
                            placeholder="Ingrese nombre del curso"
                        />
                    </div>
                    <br />
                    <div class="field col-12">
                        <label for="descripcion_curso"
                            >Descripcion del Curso</label
                        >
                        <InputText
                            v-model="acursito.descripcion_curso"
                            type="text"
                            required="true"
                            size="large"
                            placeholder="Ingrese descripcion del curso"
                        />
                    </div>
                    <br />
                    <div class="field col-12">
                        <label for="select" class="mb-3"
                            >Seleccionar Categoria</label
                        >
                        <Dropdown
                            v-model="acursito.select"
                            :options="Categoria"
                            optionValue="id"
                            optionLabel="nombre_categoria"
                            placeholder="seleccione las categorias"
                            class="w-full md:w-50rem"
                        >
                        </Dropdown>
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
                        @click="editarCurso()"
                    />
                </template>
            </Dialog>
            <!-- Eliminar dialogo -->
            <Dialog
                v-model:visible="deletecursoDialog"
                :style="{ width: '450px' }"
                header="Confirm"
                :modal="true"
            >
                <div class="confirmation-content">
                    <i
                        class="pi pi-exclamation-triangle mr-3"
                        style="font-size: 2rem"
                    />
                    <span v-if="acursito"
                        >Desea eliminar el curso de
                        <b>{{ acursito.nombre_curso }}</b
                        >?</span
                    >
                </div>
                <template #footer>
                    <Button
                        label="No"
                        icon="pi pi-times"
                        text
                        @click="deleteCursoDialog = false"
                    />
                    <Button
                        label="Yes"
                        icon="pi pi-check"
                        text
                        @click="EliminarCurso"
                    />
                </template>
            </Dialog>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            Curso: [],
            cursoDialog: false,
            deletecursoDialog: false,
            editarDialog: false,
            nombre_curso: "",
            descripcion_curso: "",
            nombre_categoria: "",
            categoria_id: "",
            Categoria: [],
            avatar_cursos: "",
            imgpreview: "",
            RESPUESTA: [],
            select: null,

            acursito: {
                nombre_curso: "",
                descripcion_curso: "",
                nombre_categoria: "",
                categoria_id: "",
                select: "",

                avatar_cursos: "",
            },
            
            infocurso: [],
        };
    },

    mounted() {
        this.listarCursos();
        this.mostrarCursos();
        this.listarCategorias();
    },
    methods: {
        async listarCategorias() {
            this.Categoria = await (
                await axios.get("/api/categoria")
            ).data.categorias;
        },
        async listarCursos() {
            this.Curso = await (await axios.get("/api/cursos")).data;
            console.log("curso", this.Curso);
        },
        openNew() {
            this.cursoDialog = true;
        },
        async openeditarDialog(value) {
            var nuevito = await (await axios.get("/api/cursos/" + value)).data;
            this.acursito.nombre_curso = nuevito.nombre_curso;
            this.acursito.descripcion_curso = nuevito.descripcion_curso;
            this.acursito.select = nuevito.categoria_id;
            this.acursito.id = nuevito.id;

            console.log("viene datos", nuevito);
            this.editarDialog = true;
            console.log("abrio el modal");
        },

        async confirmDeleteCurso(value) {

            var finId = await (await axios.get("/api/cursos/" + value)).data;
            this.acursito.id = finId.id;
            this.acursito.nombre_curso = finId.nombre_curso;

            console.log( this.acursito.nombre_curso);
            this.deletecursoDialog = true;
        },
        async EliminarCurso() {
            await axios.delete("/api/cursos/" + this.acursito.id);
            this.listarCursos();
            this.deletecursoDialog = false;

        },
        hideDialog() {
            this.cursoDialog = false;
            this.submitted = false;
        },
        obtenerImagen(e) {
            let file = e.target.files[0];
            this.avatar_cursos = file;
            this.acursito.avatar_cursos = file;

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

        async guardarCurso() {
            const formData = new FormData();
            formData.append("nombre_curso", this.nombre_curso);
            formData.append("descripcion_curso", this.descripcion_curso);
            formData.append("avatar_cursos", this.avatar_cursos);
            formData.append("categoria_id", this.select);

            this.RESPUESTA = await await axios.post("/api/cursos", formData);

            if (this.RESPUESTA.status == 200) {
                window.location.href = "/cursos";
                this.$swal.fire({
                    text: "Curso guardado exitosamente",
                    icon: "success",
                    timer: 8000,
                });
            }
            this.cursoDialog = false;
        },
        async mostrarCursos() {
            // var cursito = await (
            //     await axios.get("/api/cursos/"+23 )
            // ).data.data;
            // console.log("todos los cursos", this.Curso.id);
            // this.acursito.nombre_curso = cursito.nombre_curso;
            // this.acursito.descripcion_curso = cursito.descripcion_curso;
            // this.acursito.avatar_cursos = cursito.avatar_cursos;
            // this.acursito.imgpreview = cursito.imgpreview;
            // this.acursito.categoria_id = cursito.nombre_categoria;
        },
        async editarCurso() {
            console.log("valor de arriba ", this.acursito);
            const formData = new FormData();
            formData.append("nombre_curso", this.acursito.nombre_curso);
            formData.append(
                "descripcion_curso",
                this.acursito.descripcion_curso
            );
            formData.append("avatar_cursos", this.acursito.avatar_cursos);
            formData.append("categoria_id", this.acursito.select);

            console.log(formData.get("nombre_curso"));
            console.log(formData.get("descripcion_curso"));
            console.log(formData.get("avatar_cursos"));

            this.RESPUESTA = await await axios.post(
                "/api/cursos/" + this.acursito.id,
                formData
            );

            if (this.RESPUESTA.status == 200) {
                window.location.href = "/cursos";
                this.$swal.fire({
                    text: "Curso editado exitosamente",
                    icon: "success",
                    timer: 8000,
                });
            }
            this.editarDialog = false;
        },
    },
    computed: {
        imagen() {
            return this.imgpreview;
        },
    },
};
</script>
