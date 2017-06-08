<template>
  <div class="small">
    <line-chart
      :chart-data="datacollection"
      :options="{responsive: true, maintainAspectRatio: true}">
    </line-chart>
  </div>
</template>

<script>
  import LineChart from '../LineChart.js'

  export default {
    components: {
      LineChart
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

          var respuesta = JSON.parse(data);
          var transformado = {
            labels:['Enero', 'Febrero', 'Marzo'],
            datasets:[]
          }

          function getRandomInt(min, max) {
              return Math.floor(Math.random() * (max - min + 1)) + min;
          }



          var chartData = [];
          var id = ''
          $.each(respuesta, function(key, value) {
            if(id != value.id_persona){
              id = value.id_persona;
              $.each(respuesta, function(key, value) {
                if(id == value.id_persona){
                  chartData.push(value.data);
                }
              });
              // debugger;
              var r2 = getRandomInt(11111,99999);
              transformado.datasets.push({
              label: value.label,
              fill: false,
              // lineTension: 0.1,
              backgroundColor: '#C' + r2 ,
              borderColor: '#C' + r2,
              pointStyle: 'circle',
              borderWidth: 1,
              borderCapStyle: 'butt',
              borderDash: [],
              borderDashOffset: 0.0,
              borderJoinStyle: 'miter',
              pointBorderColor: '#C' + r2,
              // pointBackgroundColor: '#fff',
              pointBorderWidth: 3,
              pointHoverRadius: 3,
              pointHoverBackgroundColor: '#C' + r2,
              pointHoverBorderColor: '#C' + r2,
              pointHoverBorderWidth: 4,
              pointRadius: 1,
              pointHitRadius: 10,
              spanGaps: false,
              data: chartData
             });
             chartData=[];
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
