import Vue from "vue";
import Vuex from "vuex";
Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        settings: [],
        questions: [],

    },
    getters: {
        settings: state => {
            return state.settings
        },
        questions: state => {
            return state.questions
        },
    },
    mutations: {
        fetchSettings(state, settings) {
            return state.settings = settings
        },
        fetchQuestions(state, questions) {
            return state.questions = questions
        },
    },
    actions: {
        fetchSettings({commit}) {
            axios.get('/api/settings')
                .then(res => {
                    commit('fetchSettings', res.data)
                }).catch(err => {
                console.log(err)
            })
        },
        fetchQuestions({commit}) {
            axios.get('/api/faqs')
                .then(res => {
                    commit('fetchQuestions', res.data)
                }).catch(err => {
                console.log(err)
            })
        },
    },
    modules: {}
})
