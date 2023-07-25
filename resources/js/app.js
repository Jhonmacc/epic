// import './bootstrap';
// import { createApp } from 'vue';
// import Welcome from './components/Welcome'

// const app = createApp({})

// app.component('welcome', Welcome)

// app.mount('#app')
import {createApp} from 'vue';

require('./bootstrap');


import App from './App.vue';
import axios from 'axios';
import router from './router';

const app = createApp(App);
app.config.globalProperties.$axios = axios;
app.use(router);
app.mount('#app');