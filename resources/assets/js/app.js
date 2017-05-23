
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vuetify from 'vuetify'
import VueResource from 'vue-resource'
require('./bootstrap');
//require('./stylus/main.styl');

window.Vue = require('vue');
var VueRouter = require('vue-router');
var link = 'http://localhost:8000/test';
var apiURL = 'http://localhost:8000/test';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
 Vue.use(Vuetify);
 Vue.use(VueRouter);
 Vue.use(VueResource);

Vue.component('notification', require('./components/Notification.vue'));


const app = new Vue({
    el: '#app',

    headers:{
      'X-CSRF-TOKEN':  document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    },

    data: function() {
        return {

            items: [{'test':'test'}],
            post:
            [
              {
                'desktopNr': '232',
                'email': 'slawek@tgs.pl',
                'message': 'Nowa wiadomość',
              },
              {
                'desktopNr': '543',
                'email': 'olek@tgs.pl',
                'message': 'Nowa wiadomość od Olak',
              },

            ]
        };
    },

    created: function () {
        this.fetchData();
        //console.log("Test");
    },

    methods: {

      testFunction: function() {
        console.log("Funkcja testowa");
      },

      fetchData() {
        //console.log("test fatch");
        Vue.http.get(apiURL)
          .then( function(response) {
           var  a = JSON.parse(response.bodyText);
            //console.log(a[0].id);
            //console.log(a[0].email);
          } )
          .catch( function(error) {
              console.error("Błąd: " + error);
          } );
      },

      savePost: function(){
        console.log('Test savePost');

        Vue.http.interceptors.push((request, next) => {
          request.headers.set('X-CSRF-TOKEN', Laravel.csrfToken);
          next();
        });
        //Vue.http.options.emulateJSON = true;
        Vue.http.post(apiURL , this.post )
          .then(function (response) {
                  // Success
              console.log("Sukces wykonanie post w app.js");
              //console.log(response.data)
          },function (response) {
                  // Error
                  console.log("Błąd wykonania post w app.js!");
                  //console.log(response.data)
          });

      },

    }
})
