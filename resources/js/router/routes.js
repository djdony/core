import Old from '../views/Home'
import Simple from "../views/Simple";


const routes = () => {
    return [
        {
            path: '/',
            name: 'Home',
            component: Simple,
        },
        {
            path: '/old',
            name: 'Old',
            component: Old,
        }
    ]
}

export default routes()
