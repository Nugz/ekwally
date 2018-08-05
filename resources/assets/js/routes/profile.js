const Profile = resolve => require(['../../components/User/Profile.vue'], resolve);

// Child routes definition
const General = resolve => require(['../../components/User/Profile/General.vue'], resolve);
const Competence = resolve => require(['../../components/User/Profile/Competence.vue'], resolve);
const Skills = resolve => require(['../../components/User/Profile/Skills.vue'], resolve);

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