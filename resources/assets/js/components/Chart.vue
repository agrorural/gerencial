<template>
  <div class="small">
    <bar
      :chart-data="datacollection"
      :options="{responsive: true, maintainAspectRatio: true}"
      :width="800"
      :height="400">
    </bar>
  </div>
</template>

<script>
  import Bar from '../BarChart.js'

  export default {
    components: {
      Bar
    },
    data () {
      return {
        datacollection: []
      }
    },
    mounted () {
      axios({
        method: 'get',
        url: '/persona/chart',
        transformResponse: [function (data) {
          // Do whatever you want to transform the data
          var meses=['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Setiembre'];
          var respuesta = JSON.parse(data);
          var transformado = {
            labels:['Enero', 'Febrero', 'Marzo'],
            datasets:[]
          }

          function getRandomInt(min, max) {
              return Math.floor(Math.random() * (max - min + 1)) + min;
          }

          var datito = [];
          var id = ''
          $.each(respuesta, function(key, value) {
            if(id != value.id_persona){
              id = value.id_persona;
              $.each(respuesta, function(key, value) {
                if(id == value.id_persona){
                  datito.push(value.data);
                }
              });
              // debugger;
              transformado.datasets.push({
              label: value.label,
              backgroundColor: '#B' + getRandomInt(0, 9) + getRandomInt(11, 99) + value.id_persona,
              data: datito
             });

             datito=[];
            }

          });
          // debugger;

          return transformado;
        }]
      })

    .then(response => {
    // debugger;
      this.datacollection = response.data;
    });

    },
    methods: {

    }
  }
</script>
