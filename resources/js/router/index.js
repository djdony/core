import Vue from 'vue'
import VueRouter from 'vue-router'
import routes from '../router/routes.js'

Vue.use(VueRouter)
const router = new VueRouter({
    mode: 'history',
    routes
})
router.beforeEach((to, from, next) => {
    const loggedIn = localStorage.getItem('user')

    if (to.matched.some(record => record.meta.auth) && !loggedIn) {
        next('/login')
        return
    }
    next()
})

export default router
