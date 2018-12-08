import $ from 'jquery';
window.$ = window.jQuery = $;

import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
Vue.use(BootstrapVue)

import App from './views/App'
import Welcome from './views/Welcome'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Welcome
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
