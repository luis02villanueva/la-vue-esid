<template lang="">
    <div id="kt_app_content_container" class="app-container container-fluid">
        <button @click="nuevo()">enviar</button>
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
                            placeholder="buscar Cliente"
                        />
                    </div>
                       <div class="field col-12">
                <div class="field col-12">
                    <label for="select" class="mb-3">Seleccionar Curso</label>
                    <Dropdown
                        v-model="selectCourseSearch"
                        :options="Cursos"
                        @change="listarCliente()"
                        optionValue="id"
                        optionLabel="nombre_curso"
                        placeholder="seleccione el curso"
                        class="w-full md:w-50rem"
                    >
                    </Dropdown>
                </div>
                <form @submit.prevent="listarCliente()">
                    <input
                        v-model="searchClient"
                        placeholder="Buscar po DNI o NOMBRES COMPLETOS"
                    />
                </form>
                          
            </div>
                </div>

                <div class="card-toolbar">
                       <div class="field col-12">


                          
            </div>
                    <div
                        class="d-flex justify-content-end"
                        data-kt-user-table-toolbar="base"
                    >
                        <button
                            type="button"
                            @click="importCliente()"
                            class="btn btn-light-primary me-3"
                            data-bs-toggle="modal"
                            data-bs-target="#kt_modal_export_users"
                        >
                            <i class="ki-duotone ki-exit-up fs-2"
                                ><i class="path1"></i><i class="path2"></i
                            ></i>
                            Importar Clientes
                        </button>

                        <button
                            to="/crearcategoria"
                            type="button"
                            class="btn btn-primary"
                            @click="openCliente()"
                        >
                            <i class="ki-duotone ki-plus fs-2"></i> Crear
                            Cliente
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
                            :value="listClients"
                            tableStyle="min-width: 60rem"
                            paginator
                            :rows="3"
                            paginatorTemplate="FirstPageLink PrevPageLink PageLinks NextPageLink LastPageLink CurrentPageReport RowsPerPageDropdown"
                            :rowsPerPageOptions="[3, 6, 12]"
                            currentPageReportTemplate="Showing {first} to {last} of {totalRecords} categorias"
                        >
                            <Column
                                field="nombre_cliente"
                                header="NOMBRES Y APELLIDOS"
                                sortable
                                style="width: 30%"
                                >{{ slotProps.data.nombre_cliente }}
                            </Column>

                            <Column
                                field="dni"
                                header="DNI"
                                sortable
                                style="width: 10%"
                                >{{ slotProps.data.dni }}
                            </Column>
                            <Column
                                field="ciudad"
                                header="CIUDAD"
                                sortable
                                style="width: 15%"
                            >
                                {{ slotProps.data.ciudad }}
                            </Column>
                            <Column
                                field="codigos"
                                header="CODIGO"
                                sortable
                                style="width: 15%"
                            >
                                {{ slotProps.data.codigos }}
                            </Column>
                            <Column
                                field="registros"
                                header="REGISTRO"
                                sortable
                                style="width: 15%"
                            >
                                {{ slotProps.data.registros }}
                            </Column>
                            <Column
                                field="cursos"
                                header="CURSOS"
                                sortable
                                style="width: 10%"
                            >
                                <template #body="slotProps">
                                    <ul>
                                        <li
                                            v-for="(item, index) in slotProps
                                                .data.cursos"
                                            :key="index"
                                        >
                                            {{ item.nombre_curso }}
                                        </li>
                                    </ul>
                                </template>
                            </Column>

                            <Column :exportable="false" style="width: 20%">
                                <template #body="slotProps">
                                    <a
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                        @click="
                                            openeditarCliente(slotProps.data.id)
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
                                            confirmDeleteCliente(
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
            <!-- CREAR CLIENTE -->
            <Dialog
                v-model:visible="clienteDialog"
                :style="{ width: '50rem' }"
                header="REGISTRAR CLIENTES"
                :modal="true"
                class="p-fluid"
            >
                <div class="formgrid grid">
                    <div class="field col">
                        <label for="nombre_cliente">NOMBRE DEL CLIENTE</label>
                        <br />
                        <InputText
                            v-model="nombre_cliente"
                            type="text"
                            required="true"
                            size="large"
                            placeholder="Ingrese nombre del cliente"
                        />
                    </div>
                    <div class="field col">
                        <label for="dni">DNI</label>
                        <InputText
                            v-model="dni"
                            type="text"
                            required="true"
                            size="large"
                            placeholder="Ingrese nombre del cliente"
                        />
                    </div>
                </div>

                <div class="formgrid grid">
                    <div class="field col">
                        <label for="ciudad">CIUDAD </label>
                        <br />
                        <InputText
                            v-model="ciudad"
                            type="text"
                            required="true"
                            size="large"
                            placeholder="Ingrese la ciudad del cliente"
                        />
                    </div>
                    <div class="field col">
                        <label for="codigo">CODIGO </label>
                        <br />
                        <InputText
                            v-model="codigo"
                            type="text"
                            required="true"
                            size="large"
                            placeholder="Ingrese el código"
                        />
                    </div>
                </div>

                <div class="formgrid grid">
                    <div class="field col">
                        <label for="registro">REGISTRO</label>
                        <InputText
                            v-model="registro"
                            type="text"
                            required="true"
                            size="large"
                            placeholder="Ingrese el número de registro"
                        />
                    </div>
                    <div class="field col">
                        <label for="select" class="mb-3"
                            >Seleccionar Curso</label
                        >
                        <Dropdown
                            v-model="selectCourse"
                            :options="Cursos"
                            optionValue="id"
                            optionLabel="nombre_curso"
                            placeholder="seleccione el curso"
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
                        @click="guardarCliente()"
                    />
                </template>
            </Dialog>
            <!-- EDITAR CLIENTE -->
            <Dialog
                v-model:visible="clienteeditarDialog"
                :style="{ width: '50rem' }"
                header="EDITAR CLIENTES"
                :modal="true"
                class="p-fluid"
            >
                <div class="formgrid grid">
                    <div class="field col">
                        <label for="nombre_cliente">NOMBRE DEL CLIENTE</label>
                        <br />
                        <InputText
                            v-model="datos.nombre_cliente"
                            type="text"
                            required="true"
                            size="large"
                            placeholder="Ingrese nombre del cliente"
                        />
                    </div>
                    <div class="field col">
                        <label for="dni">DNI</label>
                        <InputText
                            v-model="datos.dni"
                            type="text"
                            required="true"
                            size="large"
                            placeholder="Ingrese nombre del cliente"
                        />
                    </div>
                </div>
                <div class="formgrid grid">
                    <div class="field col">
                        <label for="celular">NUMERO DE CELULAR</label>
                        <br />
                        <InputText
                            v-model="datos.celular"
                            type="text"
                            required="true"
                            size="large"
                            placeholder="Ingrese el número de celular"
                        />
                    </div>
                    <div class="field col">
                        <label for="correo">CORREO ELECTRÓNICO</label>
                        <InputText
                            v-model="datos.correo"
                            type="text"
                            required="true"
                            size="large"
                            placeholder="Ingrese el correo electrónico"
                        />
                    </div>
                </div>

                <div class="formgrid grid">
                    <div class="field col">
                        <label for="lugar_trabajo">LUGAR DE TRABAJO</label>
                        <br />
                        <InputText
                            v-model="datos.lugar_trabajo"
                            type="text"
                            required="true"
                            size="large"
                            placeholder="Ingrese el lugar de trabajo"
                        />
                    </div>
                    <div class="field col">
                        <label for="area">ÁREA DE TRABAJO</label>
                        <InputText
                            v-model="datos.area"
                            type="text"
                            required="true"
                            size="large"
                            placeholder="Ingrese el área de trabajo"
                        />
                    </div>
                </div>

                <div class="formgrid grid">
                    <div class="field col">
                        <label for="ciudad">CIUDAD </label>
                        <br />
                        <InputText
                            v-model="datos.ciudad"
                            type="text"
                            required="true"
                            size="large"
                            placeholder="Ingrese la ciudad del cliente"
                        />
                    </div>
                    <div class="field col">
                        <label for="codigo">CODIGO </label>
                        <br />
                        <InputText
                            v-model="datos.codigo"
                            type="text"
                            required="true"
                            size="large"
                            placeholder="Ingrese el código"
                        />
                    </div>
                </div>

                <div class="formgrid grid">
                    <div class="field col">
                        <label for="registro">REGISTRO</label>
                        <InputText
                            v-model="datos.registro"
                            type="text"
                            required="true"
                            size="large"
                            placeholder="Ingrese el número de registro"
                        />
                    </div>
                    <div class="field col">
                        <label for="fecha_emision">FECHA DE EMISIÓN </label>
                        <br />

                        <Calendar
                            v-model="datos.fecha_emision"
                            dateFormat="dd/mm/yy"
                            showIcon
                            iconDisplay="input"
                        />
                    </div>
                </div>

                <div class="formgrid grid">
                    <div class="field col">
                        <label for="horas_lectivas">HORAS LECTIVAS</label>
                        <InputText
                            v-model="datos.horas_lectivas"
                            type="text"
                            required="true"
                            size="large"
                            placeholder="Ingrese las horas lectivas"
                        />
                    </div>
                    <div class="field col">
                        <label for="fecha_inicio">FECHA DE INICIO </label>
                        <br />

                        <Calendar
                            v-model="datos.fecha_inicio"
                            dateFormat="dd/mm/yy"
                            showIcon
                            iconDisplay="input"
                        />
                    </div>
                </div>

                <div class="formgrid grid">
                    <div class="field col">
                        <label for="fecha_fin">FECHA DE FIN </label>
                        <br />

                        <Calendar
                            v-model="datos.fecha_fin"
                            dateFormat="dd/mm/yy"
                            showIcon
                            iconDisplay="input"
                        />
                    </div>
                    <div class="field col">
                        <label for="tema_curso">TEMA DEL CURSO</label>
                        <br />

                        <InputText
                            v-model="datos.tema_curso"
                            type="text"
                            required="true"
                            size="large"
                            placeholder="Ingrese el tema del curso"
                        />
                    </div>
                </div>
                <div class="formgrid grid">
                    <div class="field col">
                        <label for="nota">NOTA</label>
                        <br />

                        <InputText
                            v-model="datos.nota"
                            type="text"
                            required="true"
                            size="large"
                            placeholder="Ingrese la nota"
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
                        @click="editarCliente()"
                    />
                </template>
            </Dialog>

            <!-- Eliminar dialogo -->
            <Dialog
                v-model:visible="deleteDialog"
                :style="{ width: '450px' }"
                header="Confirm"
                :modal="true"
            >
                <div class="confirmation-content">
                    <i
                        class="pi pi-exclamation-triangle mr-3"
                        style="font-size: 2rem"
                    />
                    <span v-if="datos"
                        >Desea eliminar el curso de
                        <b>{{ datos.nombre_cliente }}</b
                        >?</span
                    >
                </div>
                <template #footer>
                    <Button
                        label="No"
                        icon="pi pi-times"
                        text
                        @click="deleteDialog = false"
                    />
                    <Button
                        label="Yes"
                        icon="pi pi-check"
                        text
                        @click="EliminarCliente"
                    />
                </template>
            </Dialog>
            <!-- Importar Cliente -->

            <Dialog
                v-model:visible="importDialog"
                :style="{ width: '35rem' }"
                header="IMPORTAR CLIENTES"
                :modal="true"
                class="p-fluid"
            >
                <div class="formgrid grid">
                    <br />
                    <div class="field col-12">
                        <label for="select" class="mb-3"
                            >Seleccionar Curso</label
                        >
                        <Dropdown
                            v-model="selectCourse"
                            :options="Cursos"
                            optionValue="id"
                            optionLabel="nombre_curso"
                            placeholder="seleccione el curso"
                            class="w-full md:w-50rem"
                        >
                        </Dropdown>
                    </div>
                    <div class="field col-12">
                        <label for="dni">ARCHIVO DE DATOS</label>
                    </div>
                </div>

                <div class="formgrid grid">
                    <div class="field col-12">
                        <input type="file" @change="handlerImportExcel" />
                    </div>
                </div>
                <template #footer>
                    <Button
                        label="No"
                        icon="pi pi-times"
                        text
                        @click="importDialog = false"
                    />
                    <Button
                        label="Yes"
                        icon="pi pi-check"
                        text
                        @click="importClient()"
                    />
                </template>
            </Dialog>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            Cursos: [],
            RESPUESTA: [],
            clienteDialog: false,
            clienteeditarDialog: false,
            submitted: false,
            importDialog: false,
            deleteDialog: false,
            CLIENTE: [],
            listClients: [],
            nombre_cliente: "",
            dni: "",
            celular: "",
            correo: "",
            lugar_trabajo: "",
            area: "",
            ciudad: "",
            codigo: "",
            select: "",
            registro: "",
            fecha_emision: "",
            horas_lectivas: "",
            fecha_inicio: "",
            fecha_fin: "",
            tema_curso: "",
            nota: "",
            datos: {
                nombre_cliente: "",
                dni: "",
                celular: "",
                correo: "",
                lugar_trabajo: "",
                area: "",
                ciudad: "",
                codigo: "",
                registro: "",
                fecha_emision: "",
                horas_lectivas: "",
                fecha_inicio: "",
                fecha_fin: "",
                tema_curso: "",
                nota: "",
                id: "",
            },
            selectCourseSearch: null,
            searchClient: null,
            formCliente: {
                nombre_cliente: "Jorge Curioso",
                dni: "123456789",
                celular: "942231871",
                correo: "sa@gmail.com",
                ciudad: "Trujillo",
                courses: [
                    {
                        id: "1",
                        lugar_trabajo: "Trujillo",
                        area: "Area 1",
                        codigo: "codigo001",
                        registro: "reg001",
                        fecha_emision: "2024-01-18",
                        nota: "14",
                    },
                    {
                        id: "2",
                        lugar_trabajo: "Trujillo1",
                        area: "Area 2",
                        codigo: "codigo002",
                        registro: "reg002",
                        fecha_emision: "2021-01-17",
                        nota: "17",
                    },
                    {
                        id: "3",
                        lugar_trabajo: "Trujillo2",
                        area: "Area 3",
                        codigo: "codigo003",
                        registro: "reg003",
                        fecha_emision: "2024-01-12",
                        nota: "5",
                    },
                ],
            },
            selectCourse: null,
            importExcel: null,
        };
    },

    mounted() {
        this.listarCliente();
        this.listarCursos();
    },
    methods: {
        async listarCursos() {
            this.Cursos = (await axios.get("api/cursos")).data;
            console.log("this.Cursos", this.Cursos);
        },

        async nuevo() {
            var listacursocliente = [
                {
                    clientes_id: 2,
                    curso_id: 1,
                },
                {
                    clientes_id: 2,
                    curso_id: 2,
                },
                {
                    clientes_id: 2,
                    curso_id: 3,
                },
            ];
            var data = JSON.stringify(listacursocliente);
            this.RESPUESTA = (await axios.post("api/cursoscliente", data)).data;
            console.log(this.RESPUESTA);
        },

        hideDialog() {
            this.submitted = false;
            this.clienteeditarDialog = false;
        },
        openCliente() {
            this.clienteDialog = true;
        },
        handlerImportExcel($event) {
            this.importExcel = $event.target.files[0];
        },
        async importClient() {
            const form = new FormData();
            form.append("file", this.importExcel);
            form.append("curso_id", this.selectCourse);
            try {
                const resp = await axios.post("/api/clienteimport", form);
                console.log("resp", resp);
                this.listarCliente();
                alert("Termino el import");
            } catch (err) {
                alert(err);
                // console.log(" err", this.IMPORT)
            }
            this.importDialog = false;
        },
        async importCliente() {
            this.importDialog = true;
        },

        async listarCliente() {
            const resp = (
                await axios.get("/api/clientes", {
                    params: {
                        idCourse: this.selectCourseSearch,
                        searchClient: this.searchClient,
                    },
                })
            ).data;
            this.listClients = resp;
        },
        conversion_date(fecha) {
            let myDate = new Date(Date.parse(fecha));
            let realDate =
                myDate.getFullYear() +
                "-" +
                ("0" + (myDate.getMonth() + 1)).slice(-2) +
                "-" +
                ("0" + myDate.getDate()).slice(-2);
            return realDate;
        },
        async guardarCliente() {
            this.formCliente.courses = JSON.stringify(this.formCliente.courses);
            console.log("this.formCliente",this.formCliente)
            this.RESPUESTA = await (await axios.post("/api/clientes", this.formCliente));
            console.log("this.RESPUESTA",this.RESPUESTA)
            if (this.RESPUESTA.status == 200) {
                window.location.href = "/clientes";
                this.$swal.fire({
                    text: "Cliente guardado exitosamente",
                    icon: "success",
                    timer: 8000,
                });
                this.listarCliente();
            }
            this.clienteDialog = false;
        },
        async openeditarCliente(value) {
            this.clienteeditarDialog = true;
            console.log(value);
            var clientito = await (
                await axios.get("/api/clientes/" + value)
            ).data;
            this.datos.nombre_cliente = clientito.nombre_cliente;
            this.datos.dni = clientito.dni;
            this.datos.celular = clientito.celular;
            this.datos.correo = clientito.correo;
            this.datos.lugar_trabajo = clientito.lugar_trabajo;
            this.datos.area = clientito.area;
            this.datos.ciudad = clientito.ciudad;
            this.datos.codigo = clientito.codigo;
            this.datos.registro = clientito.registro;
            this.datos.fecha_emision = clientito.fecha_emision;
            this.datos.horas_lectivas = clientito.horas_lectivas;
            this.datos.fecha_inicio = clientito.fecha_inicio;
            this.datos.fecha_fin = clientito.fecha_fin;
            this.datos.tema_curso = clientito.tema_curso;
            this.datos.nota = clientito.nota;

            this.datos.id = clientito.id;
        },
        async editarCliente() {
            console.log("valor de arriba ", this.datos);
            const formData = new FormData();
            formData.append("nombre_cliente", this.datos.nombre_cliente);
            formData.append("dni", this.datos.dni);
            formData.append("celular", this.datos.celular);
            formData.append("correo", this.datos.correo);
            formData.append("lugar_trabajo", this.datos.lugar_trabajo);
            formData.append("area", this.datos.area);
            formData.append("ciudad", this.datos.ciudad);
            formData.append("codigo", this.datos.codigo);
            formData.append("registro", this.datos.registro);
            formData.append(
                "fecha_emision",
                this.conversion_date(this.datos.fecha_emision)
            );
            formData.append("horas_lectivas", this.datos.horas_lectivas);
            formData.append(
                "fecha_inicio",
                this.conversion_date(this.datos.fecha_inicio)
            );
            formData.append(
                "fecha_fin",
                this.conversion_date(this.datos.fecha_fin)
            );
            formData.append("tema_curso", this.datos.tema_curso);
            formData.append("nota", this.datos.nota);
            console.log(formData.get("fecha_emision"));
            console.log(formData.get("fecha_inicio"));
            console.log(formData.get("fecha_fin"));

            this.RESPUESTA = await await axios.post(
                "/api/clientes/" + this.datos.id,
                formData
            );

            if (this.RESPUESTA.status == 200) {
                window.location.href = "/clientes";
                this.$swal.fire({
                    text: "Cliente editado exitosamente",
                    icon: "success",
                    timer: 8000,
                });
            }
            this.clienteeditarDialog = false;
        },

        async confirmDeleteCliente(value) {
            var finId = await (await axios.get("/api/clientes/" + value)).data;
            this.datos.id = finId.id;
            this.datos.nombre_cliente = finId.nombre_cliente;

            console.log(this.datos.nombre_cliente);
            this.deleteDialog = true;
        },
        async EliminarCliente() {
            await axios.delete("/api/clientes/" + this.datos.id);
            this.listarCliente();
            this.deleteDialog = false;
        },
    },
};
</script>
