<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 v-show="user.id"> welkom {{ user.name }} </h3>
                <router-link :to="{ path: '/algemeen'}" replace>Algemeen</router-link>
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
import Multiselect from 'vue-multiselect'
import { mapState, mapActions } from 'vuex'

export default {
	props: {},
	components: {
		'multiselect': Multiselect
	},
    computed: mapState({
        user: state => state.user
	}),
    created() {
		this.$store.dispatch('user/getUser');
    }
}
</script>