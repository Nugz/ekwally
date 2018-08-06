import Vue from 'vue'
import Vuex from 'vuex'
import user from './modules/user';
import information from './modules/information'

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        user,
        information
    }
})