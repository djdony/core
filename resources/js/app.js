import Vue from 'vue'
import store from "./store"
import router from './router'

import { BootstrapVue } from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import styles from './assets/style.css'
import { library } from '@fortawesome/fontawesome-svg-core'
import { faPlane, faCalendarAlt, faTaxi, faUserTie, faMobileAlt, faBars } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faPlane, faCalendarAlt, faUserTie, faMobileAlt, faTaxi, faBars)
Vue.component('font-awesome-icon', FontAwesomeIcon)


// Install BootstrapVue
Vue.use(BootstrapVue)

//window._ = require('lodash');
window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const app = new Vue({
    el: '#app',
    store,
    router,
});
