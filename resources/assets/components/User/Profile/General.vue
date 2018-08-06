<template>
    <div>
        <p>Positions:</p>
        <ul>
            <li v-for="position in positions">
                {{ position.name }}
            </li>
        </ul>
    </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'

export default {

    computed: {
        ...mapGetters('information', {
            positions: 'positions'
        })
    },

    created() {
			this.$store.dispatch('information/getPositions');
    }
}
</script>