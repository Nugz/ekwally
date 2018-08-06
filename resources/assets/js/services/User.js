export default {
	get() {
		return axios.get('/api/user');
	},
	getProfile() {
		axios.get('/api/user/profile')
			.then(response => {
				console.log(response);
				this.currentUser = response.data;
			});
	}
}