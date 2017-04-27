
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vuetify from 'vuetify'
require('./bootstrap');
//require('./stylus/main.styl');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
 Vue.use(Vuetify)

Vue.component('notification', require('./components/Notification.vue'));
//Vue.component('notification', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',
    data:{
      message: 'Vue działa !'
    }
})
