import Home from '../views/Home'
import About from '../views/About'


const routes = () => {
    return [
        {
            path: '/',
            name: 'Home',
            component: Home,
        },
        {
            path: '/about',
            name: 'About',
            component: About,
        }
    ]
}

export default routes()