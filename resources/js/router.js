import { createWebHistory, createRouter } from "vue-router";

import Dashboards from "./components/Dashboard/Index.vue";
import Categorias from "./components/Categorias/Index.vue";
import Cursos from "./components/Cursos/Index.vue";
import CrearCategoria from "./components/Categorias/Create.vue";
import EditCategoria from "./components/Categorias/Edit.vue";
import Clientes from  "./components/Clientes/Index.vue"
const routes = [
    {
        path: "/",
        name: "Dashboards",
        component: Dashboards,
    },
    {
        path: "/categorias",
        name: "categoria.index",
        component: Categorias,
    },
    {
        path: "/cursos",
        name: "cursos",
        component: Cursos,
    },
    {
        path: "/crearcategoria",
        name: "categoria.crear",
        component: CrearCategoria,
    },
    {
        path: "/editarcategoria/:id",
        name: "categoria.edit",
        component: EditCategoria,
    },
    {
        path: "/clientes",
        name: "clientes",
        component: Clientes,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
