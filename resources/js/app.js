/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./theme/material.min.js');
require('./theme/nouislider.min.js');
require('./theme/bootstrap-selectpicker.js');
require('./theme/bootstrap-tagsinput.js');
require('./theme/jasny-bootstrap.min.js');
require('./theme/jquery.flexisel.js');
require('./theme/material-kit.js');

window.Vue = require('vue');
import {
  Form,
  HasError,
  AlertError,
  AlertErrors,
  AlertSuccess
} from 'vform';


window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
Vue.component(AlertErrors.name, AlertErrors)
Vue.component(AlertSuccess.name, AlertSuccess)


import VueRouter from 'vue-router'
Vue.use(VueRouter)


let routes = [
    { path: '/catalogo', component: require('./components/Dashboard.vue').default },
    { path: '/users', component: require('./components/Users.vue').default },
    { path: '/categorias', component: require('./components/Categoria.vue').default },
    { path: '/productos', component: require('./components/Producto.vue').default },
    { path: '/profile', component: require('./components/Profile.vue').default },
    //{ path: '*', component: require('./components/NotFound.vue').default }
  ]

const router = new VueRouter({
	mode: 'history',
	routes
})
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
