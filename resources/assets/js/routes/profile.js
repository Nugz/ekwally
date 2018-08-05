import Profile from '../../components/User/Profile.vue';
import General from '../../components/User/Profile/General.vue';
import Competence from '../../components/User/Profile/Competence.vue';
import Skills from '../../components/User/Profile/Skills.vue';

// Define project routes
export const routes = [
	{
		name: 'profiel',
		path: '/',
		component: Profile,
		meta: {
			title: 'Profiel algemeen'
		},
		children: [
			{ name: 'algemeen', path: '/algemeen', component: General, meta: { title: 'Profiel algemeen' } },
			{ name: 'competenties', path: '/competenties', component: Competence, meta: { title: 'Competenties' } },
			{ name: 'skills', path: '/skills', component: Skills, meta: { title: 'Competenties' } }
		]
	}
];