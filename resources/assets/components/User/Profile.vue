<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                test bla
                <router-link :to="{ path: '/algemeen'}" replace>Algemeen</router-link>
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
import Multiselect from 'vue-multiselect'

export default {
    props: {
        currentUser: {
            type: Object,
            default () {
                return {}
            }
        }
    },
    components: {
        'multiselect': Multiselect
    },
    mounted () {
        console.log(this.currentUser)
    }
}
</script>