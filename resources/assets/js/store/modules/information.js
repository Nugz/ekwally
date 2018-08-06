export default {

	namespaced: true,

	state: {

		positions: [],
		sections: [],

	},

	getters: {
		positions: state=> {
			return state.positions;
		}
	},

	actions: {

		async getPositions({ commit }) {
			const { data: positions } = await axios.get('/api/information/positions');
			commit('setPositions', positions.data)
		}

	},

	mutations: {

		setPositions(state, positions) {

			state.positions = positions;

		}

	}


}