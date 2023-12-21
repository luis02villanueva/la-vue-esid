require("./bootstrap");
import "primevue/resources/themes/lara-light-green/theme.css";
import 'primeicons/primeicons.css';
import { createApp } from "vue";
import App from "./components/App.vue";

import router from "./router";


// Primevue



import Button from "primevue/button"
import PrimeVue from "primevue/config";
import DataTable from 'primevue/datatable';
import Column from 'primevue/column';
import ColumnGroup from 'primevue/columngroup'; 
import Paginator from 'primevue/paginator';
import Tag from 'primevue/tag';
import Row from 'primevue/row'; 



import Toast from 'primevue/toast';
import ToastService from 'primevue/toastservice';




import Dialog from 'primevue/dialog';
import AutoComplete from 'primevue/autocomplete';

import CascadeSelect from 'primevue/cascadeselect';

import Checkbox from 'primevue/checkbox';

import Calendar from 'primevue/calendar';

import Chips from 'primevue/chips';

import Dropdown from 'primevue/dropdown';

// import Editor from 'primevue/editor';

import InputGroup from 'primevue/inputgroup';
import InputGroupAddon from 'primevue/inputgroupaddon';

import InputMask from 'primevue/inputmask';

import InputNumber from 'primevue/inputnumber';

import InputSwitch from 'primevue/inputswitch';

import InputText from 'primevue/inputtext';



import Password from 'primevue/password';

import Rating from 'primevue/rating';

import MultiSelect from 'primevue/multiselect';

import RadioButton from 'primevue/radiobutton';

import SelectButton from 'primevue/selectbutton';

import Textarea from 'primevue/textarea';
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
import '../../node_modules/primeflex/primeflex.css';

import FileUpload from 'primevue/fileupload';





createApp(App)
    .use(router)
    .use(PrimeVue)
    .use(VueSweetalert2)
    .component('RadioButton', RadioButton)
 
    .component('MultiSelect', MultiSelect)
    .component('Calendar',Calendar)
    .component('FileUpload',FileUpload)

    .component('Textarea', Textarea)
    .component('Rating', Rating)
    .component('SelectButton', SelectButton)
    .component('InputText', InputText)
    .component('MultiSelect', MultiSelect)
    .component('Password', Password)
    .component('Button', Button)
    .component('Dropdown', Dropdown)
    // .component('Editor', Editor)
    .component('InputGroup', InputGroup)
    .component('InputGroupAddon', InputGroupAddon)
    .component('InputNumber', InputNumber)
    .component('InputSwitch', InputSwitch)

    .component('InputMask', InputMask)

    .component('Chips', Chips)

    .component('Calendar', Calendar)
    .component('Checkbox', Checkbox)

    .component('CascadeSelect', CascadeSelect)

    .component('AutoComplete', AutoComplete)

    .component('Toast', Toast)
    .use('ToastService', ToastService)
    .component('Dialog', Dialog)

    .component('DataTable', DataTable)
    .component('Column', Column)
    .component('ColumnGroup', ColumnGroup)
    .component('Row', Row)
    .component('Paginator', Paginator)
    .component('Tag', Tag)
    .mount("#app");
