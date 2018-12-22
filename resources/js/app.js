import $ from 'jquery';
window.$ = window.jQuery = $;

import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
Vue.use(BootstrapVue)

import App from './views/App'
import Inicio from './views/Inicio'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'Inicio',
            component: Inicio
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
