
import {createWebHistory, createRouter} from "vue-router";

import Home from '../pages/Home.vue';
import Register from '../pages/Register.vue';
import Login from '../pages/Login.vue';
import Dashboard from '../pages/Dashboard.vue';
// import Posts from '../components/Posts';
// import EditPost from '../components/EditPost';
// import AddPost from '../components/AddPost';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'register',
        path: '/register',
        component: Register
    },
    {
        name: 'login',
        path: '/login',
        component: Login
    },
    {
        name: 'dashboard',
        path: '/dashboard',
        component: Dashboard
    },
    // {
    //     name: 'posts',
    //     path: '/posts',
    //     component: Posts
    // },
    // {
    //     name: 'addpost',
    //     path: '/posts/add',
    //     component: AddPost
    // },
    // {
    //     name: 'editpost',
    //     path: '/posts/edit/:id',
    //     component: EditPost
    // }
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});

export default router;