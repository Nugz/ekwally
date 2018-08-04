import Router from './routes/index'
import Store from './store/index'
import Profile from './Profile'
import Vue from 'vue'

new Vue({
    router: Router,
    components: { Profile },
    template: '<Profile/>',
    store: Store
}).$mount('#profile');
