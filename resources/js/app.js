/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Vue from 'vue'
window.Vue = require('vue');
window.Fire= new Vue();
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// Import Bootstrap an BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)
//import VueRouter from 'vue-router'
//Vue.use(VueRouter)



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


Vue.component('role', require('./components/role.vue').default);
Vue.component('user', require('./components/user.vue').default);
Vue.component('loading', require('./components/loading.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

  import Swal from 'sweetalert2'

window.swal= Swal;
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
});
window.toast=Toast;

import { Form, HasError, AlertError } from 'vform'
window.Form= Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

import VueToastr from "vue-toastr";
// use plugin
Vue.use(VueToastr, {
  defaultTimeout:3000,
  defaultPosition:"toast-top-right",
  defaultProgressBar:false,
  defaultProgressBarValue:0
});

import moment from 'moment';
Vue.filter("date",function(created){
 return moment(created).format('MMMM Do YYYY , h:mm:ss a');
});
const app = new Vue({
  el: '#app',
 // router
});

/**const router= new VueRouter({
  routes,
  mode : 'history'
});*/