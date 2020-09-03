import Vue from "vue";
import Vuex from "vuex";
Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        settings: [],

    },
    getters: {
        settings: state => {
            return state.settings
        },
    },
    mutations: {
        fetchSettings(state, settings) {
            return state.settings = settings
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
    },
    modules: {}
})
