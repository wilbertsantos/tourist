import { createRouter, createWebHistory } from 'vue-router';
import City from './components/City.vue';
import Welcome from './components/Welcome.vue';


const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'home',
            component: Welcome
        },

        {
            path: '/city',
            name: 'city',
            component: City
        }
    ]
});


export default router;

