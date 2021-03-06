import Store from '../../store/index'
import Vue from 'vue'
import VueRouter from 'vue-router'
import { routes } from '../routes/profile';

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    base: '/particulier/profiel',
    routes
});

new Vue({
    el: '#app',
    store: Store,
    router
});
