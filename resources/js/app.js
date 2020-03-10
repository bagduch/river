// Axios & Echo global
require('./bootstrap');

/* Core */
import Vue from 'vue'
import App from './App.vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import Notifications from 'vue-notification'
Vue.use(Notifications)

// Install BootstrapVue
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

/* Main component */
Vue.component('App', App)

/* This is main entry point */
new Vue({
    render: h => h(App),
}).$mount('#app')
