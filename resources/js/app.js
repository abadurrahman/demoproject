


require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

//router imported
import {routes} from './routes';

//import user class
import User from './Helpers/User';
window.User = User

//import user class
import Notification from './Helpers/Notification';
window.Notification = Notification


//editor
/*require('tui-editor/dist/tui-editor.css');
require('tui-editor/dist/tui-editor-contents.css');
require('codemirror/lib/codemirror.css');
var toastui = require('@toast-ui/vue-editor');
var Editor = toastui.Editor;*/

//pagination
Vue.component('pagination', require('./components/partial/PaginationComponent.vue').default);



//sweet alert start
import Swal from 'sweetalert2'
window.Swal = Swal;

const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000
});

window.Toast = Toast;
//sweet alert end

window.Reload = new Vue();




const router = new VueRouter({
  routes,
  mode: 'history'
})


const app = new Vue({
    el: '#app',
    router
});







