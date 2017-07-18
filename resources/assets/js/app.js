
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
    personaData: [],
    personaTotal: [],
    fuenteTotal: []
  }, 
  
  mounted: function(){
    axios({
        method: 'get',
        url: '/persona/graficas',
        transformResponse: [function (data) {
        let respuesta = JSON.parse(data);
        let trasResponse = {data1: [], data2: []};

          $.each(respuesta, function(key, value) {
            //console.log(value);
            let persona = {name: null, data: {}};
          	let persona2 = {name: null, data: {}};

            persona.name = value.name;
          	persona2.name = value.name;
            //debugger;
          	$.each(value.data, function(key, value) {
         		//debugger;
            //console.log(value);
          		switch (value.id_month) {
		          case "01":
                persona.data.ENE = (+parseFloat(value.imp_patronal).toFixed(10)) + (+parseFloat(value.imp_remuneracion).toFixed(10));
		            persona2.data.ENE = parseInt(value.total_persona);
		            break;
		          case "02":
		            persona.data.FEB = (+parseFloat(value.imp_patronal).toFixed(10)) + (+parseFloat(value.imp_remuneracion).toFixed(10));
		            persona2.data.FEB = parseInt(value.total_persona);
                break;
		          case "03":
		            persona.data.MAR = (+parseFloat(value.imp_patronal).toFixed(10)) + (+parseFloat(value.imp_remuneracion).toFixed(10));
		            persona2.data.MAR = parseInt(value.total_persona);
                break;
              case "04":
                persona.data.ABR = (+parseFloat(value.imp_patronal).toFixed(10)) + (+parseFloat(value.imp_remuneracion).toFixed(10));
                persona2.data.ABR = parseInt(value.total_persona);
                break;
              case "05":
                persona.data.MAY = (+parseFloat(value.imp_patronal).toFixed(10)) + (+parseFloat(value.imp_remuneracion).toFixed(10));
                persona2.data.MAY = parseInt(value.total_persona);
                break;
              case "06":
                persona.data.JUN = (+parseFloat(value.imp_patronal).toFixed(10)) + (+parseFloat(value.imp_remuneracion).toFixed(10));
                persona2.data.JUN = parseInt(value.total_persona);
                break;
              case "07":
                persona.data.JUL = (+parseFloat(value.imp_patronal).toFixed(10)) + (+parseFloat(value.imp_remuneracion).toFixed(10));
                persona2.data.JUL = parseInt(value.total_persona);
                break;
              case "08":
                persona.data.AGO = (+parseFloat(value.imp_patronal).toFixed(10)) + (+parseFloat(value.imp_remuneracion).toFixed(10));
                persona2.data.AGO = parseInt(value.total_persona);
                break;
              case "09":
                persona.data.SET = (+parseFloat(value.imp_patronal).toFixed(10)) + (+parseFloat(value.imp_remuneracion).toFixed(10));
                persona2.data.SET = parseInt(value.total_persona);
                break;
              case "10":
                persona.data.OCT = (+parseFloat(value.imp_patronal).toFixed(10)) + (+parseFloat(value.imp_remuneracion).toFixed(10));
                persona2.data.OCT = parseInt(value.total_persona);
                break;
              case "11":
                persona.data.NOV = (+parseFloat(value.imp_patronal).toFixed(10)) + (+parseFloat(value.imp_remuneracion).toFixed(10));
                persona2.data.NOV = parseInt(value.total_persona);
                break;
              case "12":
                persona.data.DIC = (+parseFloat(value.imp_patronal).toFixed(10)) + (+parseFloat(value.imp_remuneracion).toFixed(10));
                persona2.data.DIC = parseInt(value.total_persona);
                break;
		          }
          	});

             trasResponse.data1.push(persona);
			       trasResponse.data2.push(persona2);

          });
          // debugger;

          return trasResponse;
        }]
      }).then(response => {
        this.personaData = response.data.data1;
        this.personaTotal = response.data.data2;
    });

      axios({
        method: 'get',
        url: '/fuente/graficas',
        transformResponse: [function (data) {
        let respuesta = JSON.parse(data);
        let valueData = [];

          $.each(respuesta, function(key, value) {
            if(value.id == 5){
              let valueArr = ['Anticipo',  value.ant_fuente];
              //debugger;
              valueData.push(valueArr);

              var valueArr2 = ['Devengado',  value.dev_fuente];

              valueData.push(valueArr2);

              //debugger;
            }
          });
          // debugger;

          return valueData;
        }]
      }).then(response => {
        this.fuenteTotal = response.data;
    });

  },
})

$(document).ready(function(){
  // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
  $('.modal').modal();

   // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  $('.collapsible').collapsible();
});

