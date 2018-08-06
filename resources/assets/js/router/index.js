import Vue from 'vue'
import VueRouter from 'vue-router'
import { ProfileRoutes}  from './routes/profile'

Vue.use(VueRouter);

export default new VueRouter({
	mode: 'history',
	base: '/',
	ProfileRoutes
});

