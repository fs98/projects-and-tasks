import { createRouter, createWebHistory } from 'vue-router';

import Login from './components/login/Login.vue';
import Dashboard from './components/dashboard/Dashboard.vue';
import Projects from './components/projects/Projects.vue';

const router = createRouter({
    history : createWebHistory(),
    routes : [
        {
          path: '/',
          component: Login,
          name: 'home'
        },
        {
          path: '/login',
          component: Login,
          name: 'login',
          alias: '/'
        },
        {
          path: '/projects',
          component: Projects,
          name: 'projects'
        },
        {
          path: '/dashboard',
          component: Dashboard,
          name: 'dashboard'
        }
    ]
});

export default router;