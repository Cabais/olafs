
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

//Arjel - import the vue-router
import VueRouter from "vue-router";
import { Form, HasError, AlertError } from 'vform';
import moment from 'moment';
import VueProgressBar from 'vue-progressbar';
import swal from 'sweetalert2';

window.Vue = require('vue');
window.Form = Form;
window.toast = toast;
window.swal = swal;

//Arjel - use and component
Vue.use(VueRouter)
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

//Arjel - register routes of vue component
let routes = [
    { path: '/dashboard', component: require('./components/Dashboard.vue') },
    { path: '/itemreport', component: require('./components/ItemReport.vue') },
    { path: '/itemfound', component: require('./components/ItemFound.vue') },
    { path: '/reportfound', component: require('./components/ReportFound.vue') },
    { path: '/reportlost', component: require('./components/ReportLost.vue') }
]

//Arjel - initialize vue router
const router = new VueRouter({
    mode: 'history',
    routes
});


//Arjel - filtering vue
Vue.filter('upFirst', function (value) {
    return value.charAt(0).toUpperCase() + value.slice(1)
});

//Arjel - filter date
Vue.filter('myDate', function (created) {
    return moment(created).format('MMMM Do YYYY');
})

//Arjel - accessing progressbar
Vue.use(VueProgressBar, options)

const options = {
    color: '#bffaf3',
    failedColor: '#874b4b',
    thickness: '5px',
    transition: {
        speed: '.3s',
        opacity: '0.6s',
        termination: 300
    },
    autoRevert: true,
    location: 'left',
    inverse: false
}

const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});

window.Fire = new Vue();

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

Vue.component('example-component', require('./components/ExampleComponent.vue'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
