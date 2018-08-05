require('./bootstrap');

import Vue from 'vue'
import Store from '../store/index'
import Profile from '../components/Profile.vue'

new Vue({
    el: '#app',
    components: {
        Profile
    },
    store: Store
})
