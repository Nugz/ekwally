import Vue from 'vue'
import VueDraggable from 'vue-draggable'
import Multiselect from 'vue-multiselect'
import Store from '../../store/index'

// Import entry component
import Profile from '../../components/User/Profile.vue'

// Vue global plugin usage
Vue.use(VueDraggable) // https://www.npmjs.com/package/vue-draggable
Vue.use(Multiselect) // https://www.npmjs.com/package/vue-multiselect


new Vue({
    el: '#app',
    components: {
        Profile
    },
    store: Store
})
