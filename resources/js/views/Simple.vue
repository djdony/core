<template>
    <div>
        <div v-for="setting in settings.data">
            <navigation :company="setting.company"></navigation>
            <banner :title="setting.title"></banner>
            <main id="main">
                <about :about="setting.about"></about>
                <why></why>
                <faq :questions="questions"></faq>
                <contact :setting="setting"></contact>
                <footers></footers>
            </main>
        </div>

    </div>

</template>

<script>
import {mapGetters} from "vuex";
export default {
    name: 'home',
    components: {
        Navigation: () => import('../simple/Navigation'),
        Why: () => import('../simple/Why'),
        Banner: () => import('../simple/Banner'),
        Faq: () => import('../simple/Faq'),
        Contact: () => import('../simple/Contact'),
        Footers: () => import('../simple/Footer'),
        About: () => import('../simple/About'),
    },
    mounted() {
        this.$store.dispatch('fetchSettings')
        this.$store.dispatch('fetchQuestions')
    },
    computed: {
        ...mapGetters([
            'settings',
            'questions'
        ])
    }
}
</script>

