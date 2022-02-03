/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


// ->0 Import Vue and Vue Router
import Vue from 'vue';
import VueRouter from 'vue-router'
Vue.use(VueRouter)

// ->1 Define Route Pages
const Home = Vue.component('Home', require('./pages(Home.vue').default);
const About = Vue.component('About', require('./pages(About.vue').default);
const Contacts = Vue.component('Contacts', require('./pages(Contacts.vue').default);

// ->2 Define Route name and Components

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home,
    },
    {
        path: '/about',
        name: 'about',
        component: About,
    },
    {
        path: '/contacts',
        name: 'contacts',
        component: Contacts,
    }
]

// -> Create vue Router instance

const router = new VueRouter({
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

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('App', require('./App.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    router,
    el: '#app',
});
