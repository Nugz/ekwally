import Store from '../../store/index'
import { routes } from '../router/profile';



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
