
require('./bootstrap');
import Vuetify from './vuetify'
import Vue from 'vue'
import router from './router'
import VueRouter from 'vue-router'
import App from './App.vue'
import store from './Store/index';
window.Vue = require('vue');
Vue.use(VueRouter)

Vue.config.productionTip=false
Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const app = new Vue({
    el: '#app',
    router: router,
    vuetify: Vuetify,
    store,
    components: { App }
});
