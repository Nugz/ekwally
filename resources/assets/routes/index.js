import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

// Routes definition
const UserProfile = resolve => require(['../components/UserProfile.vue'], resolve)

// Define project routes
export const routes = [
    { name: 'profile.user', path: '/particulier/profiel', component: UserProfile, meta: { title: 'Gebruikersprofiel aanpassen', module: 'user' } },
    { name: 'profile.company', path: '/zakelijk/profiel', component: UserProfile, meta: { title: 'Companyprofiel aanpassen', module: 'company'} }
]

const router = new Router({
    mode: 'history',
    routes
})

export default router
