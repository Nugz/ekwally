import Profile from 'User/Profile.vue';
import General from 'User/Profile/General.vue';
import Competence from 'User/Profile/Competence.vue';
import Skills from 'User/Profile/Skills.vue';

// Define project routes
export const ProfileRoutes = [
	{
		name: 'profiel',
		path: '/particulier/profiel',
		component: Profile,
		meta: {
			title: 'Profiel algemeen'
		},
		children: [
			{ name: 'algemeen', path: 'algemeen', component: General, meta: { title: 'Profiel algemeen' } },
			{ name: 'competenties', path: 'competenties', component: Competence, meta: { title: 'Competenties' } },
			{ name: 'skills', path: 'skills', component: Skills, meta: { title: 'Competenties' } }
		]
	}
];