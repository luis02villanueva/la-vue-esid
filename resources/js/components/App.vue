<template>
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">
                <Navbar></Navbar>
                <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">

                    <Toolbar></Toolbar>
                    <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="300px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
                        <Aside></Aside>
                    </div>
                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">

                        <router-view></router-view>
                        <div id="kt_app_footer" class="app-footer ">
                            <Footer></Footer>
                        </div>
                    </div>
 
                </div>
               

        </div>
    </div>
</template>

<script setup>
import Aside from "./Plantilla/Aside.vue";
import Navbar from "./Plantilla/Navbar.vue";
import Toolbar from "./Plantilla/Toolbar.vue";
import Footer from './Plantilla/Footer.vue';
components: {
    Aside;
    Navbar;
    Toolbar;
    Footer
}
</script>
