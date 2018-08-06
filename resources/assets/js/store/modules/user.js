export default {

	namespaced: true,

	state: {

		id: null,
		name: '',
		email: '',
		type: '',

	},

	getters: {},

	actions: {

		async getUser({ commit }) {
			const { data: user } = await axios.get('/api/user');
			commit('set', user.data)
		}

	},

	mutations: {

		set(state, user) {

			state.id = user.id;
			state.name = user.name;
			state.email = user.email;
			state.type = user.type;

		}

	}


}