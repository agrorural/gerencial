
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');
window.$ = window.jQuery = require('jquery');
window.Laravel = { csrfToken: $('meta[name=csrf-token]').attr("content") };
require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('sidebar-menu', require('./components/SidebarMenu.vue'));

import Chartkick from 'chartkick'
import VueChartkick from 'vue-chartkick'

Vue.use(VueChartkick, { Chartkick })

// bootstrap the demo
const app = new Vue({
  el: '#app',
  data: {
      personaData: []
    }, 
  mounted: function(){
      axios({
        method: 'get',
        url: '/persona/charts',
        transformResponse: [function (data) {
        var respuesta = JSON.parse(data);
        //{name: 'Workout', data: {'2013-02-10 00:00:00 -0800': 3, '2013-02-17 00:00:00 -0800': 4}},
        //{name: 'Call parents', data: {'2013-02-10 00:00:00 -0800': 5, '2013-02-17 00:00:00 -0800': 3}}
        var transformado = [];

          $.each(respuesta, function(key, value) {
            //console.log(value);
          	var persona = {name: null, data: {}};

          	persona.name = value.name;
            //debugger;
          	$.each(value.data, function(key, value) {
         		//debugger;
            console.log(value);
          		switch (value.id_month) {
		          case "01":
		            persona.data.ENE = (+parseFloat(value.imp_patronal).toFixed(10)) + (+parseFloat(value.imp_remuneracion).toFixed(10));
		            break;
		          case "02":
		            persona.data.FEB = (+parseFloat(value.imp_patronal).toFixed(10)) + (+parseFloat(value.imp_remuneracion).toFixed(10));
		            break;
		          case "03":
		            persona.data.MAR = (+parseFloat(value.imp_patronal).toFixed(10)) + (+parseFloat(value.imp_remuneracion).toFixed(10));
		            break;
              case "04":
                persona.data.ABR = (+parseFloat(value.imp_patronal).toFixed(10)) + (+parseFloat(value.imp_remuneracion).toFixed(10));
                break;
              case "05":
                persona.data.MAY = (+parseFloat(value.imp_patronal).toFixed(10)) + (+parseFloat(value.imp_remuneracion).toFixed(10));
                break;
              case "06":
                persona.data.JUN = (+parseFloat(value.imp_patronal).toFixed(10)) + (+parseFloat(value.imp_remuneracion).toFixed(10));
                break;
              case "07":
                persona.data.JUN = (+parseFloat(value.imp_patronal).toFixed(10)) + (+parseFloat(value.imp_remuneracion).toFixed(10));
                break;
              case "08":
                persona.data.AGO = (+parseFloat(value.imp_patronal).toFixed(10)) + (+parseFloat(value.imp_remuneracion).toFixed(10));
                break;
              case "09":
                persona.data.SET = (+parseFloat(value.imp_patronal).toFixed(10)) + (+parseFloat(value.imp_remuneracion).toFixed(10));
                break;
              case "10":
                persona.data.OCT = (+parseFloat(value.imp_patronal).toFixed(10)) + (+parseFloat(value.imp_remuneracion).toFixed(10));
                break;
              case "11":
                persona.data.NOV = (+parseFloat(value.imp_patronal).toFixed(10)) + (+parseFloat(value.imp_remuneracion).toFixed(10));
                break;
              case "12":
                persona.data.DIC = (+parseFloat(value.imp_patronal).toFixed(10)) + (+parseFloat(value.imp_remuneracion).toFixed(10));
                break;
		          }
          	});

			       transformado.push(persona);

          });
          // debugger;

          return transformado;
        }]
      }).then(response => {
    // debugger;
      this.personaData = response.data;
    });

    },
})
