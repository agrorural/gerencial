
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
// Vue.component('chart', require('./components/Chart.vue'));
Vue.component('sidebar-menu', require('./components/SidebarMenu.vue'));

import Chartkick from 'chartkick'
import VueChartkick from 'vue-chartkick'

Vue.use(VueChartkick, { Chartkick })

// bootstrap the demo
const app = new Vue({
  el: '#app',
  data: {
      chartData: []
    }, 
  mounted: function(){
      axios({
        method: 'get',
        url: '/persona/charts',
        transformResponse: [function (data) {
          var respuesta = JSON.parse(data);
          //{name: 'AGRO RURAL', data: {"Enero": 25000, "Febrero": 50000, "Marzo": 45000}}
          var transformado = [];

          $.each(respuesta, function(key, value) {

          	var obj = {name: null, data: {Enero:null,Febrero:null,Marzo:null}};

          	obj.name = value.name;
//debugger;
          	$.each(value.data, function(key, value) {
         		//debugger;
          		switch (value.id_month) {
		          case "01":
		            obj.data.Enero = value.imp_patronal;
		            break;
		          case "02":
		            obj.data.Febrero = value.imp_patronal;
		              break;
		          case "03":
		            obj.data.Marzo = value.imp_patronal;
		              break;
		        }
          	});

			transformado.push(obj);

          });
          // debugger;

          return transformado;
        }]
      }).then(response => {
    // debugger;
      this.chartData = response.data;
    });

    },
})
