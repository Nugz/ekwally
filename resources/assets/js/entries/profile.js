import Vue from 'vue'
import VueRouter from 'vue-router'
import App from '../../App.vue'

Vue.use(VueRouter)

const Profile = resolve => require(['../../components/User/Profile.vue'], resolve)

// Child routes definition
const General = resolve => require(['../../components/User/Profile/General.vue'], resolve)
const Competence = resolve => require(['../../components/User/Profile/Competence.vue'], resolve)
const Skills = resolve => require(['../../components/User/Profile/Skills.vue'], resolve)

// Define project routes
const childRoutes = [
    { name: 'algemeen', path: 'algemeen', component: General, meta: { title: 'Profiel algemeen' } },
    { name: 'competenties', path: 'competenties', component: Competence, meta: { title: 'Competenties' } },
    { name: 'skills', path: 'skills', component: Skills, meta: { title: 'Competenties' } }
]

const router = new VueRouter({
    name: 'profiel',
    mode: 'history',
    base: window.location.pathName,
    component: Profile,
    children: childRoutes
})

import Store from '../../store/index'

new Vue({
    router: router,
    template: '<App/>',
    store: Store,
    render: h => h(App)
}).$mount('#app')
