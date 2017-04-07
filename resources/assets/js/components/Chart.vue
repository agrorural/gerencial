<template>
  <div class="small">
    <bar :chart-data="datacollection"></bar>
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
          var respuesta = JSON.parse(data);
          var transformado = {
            labels:['Tipo de Personal'],
            datasets:[]
          }

          $.each(respuesta, function(key, value) {
            // debugger;
            transformado.datasets.push({
            label: value.labels,
            backgroundColor: '#f87979',
            data: [value.data]
           });
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

<style>
  .small {
    max-width: 600px;
    margin:  150px auto;
  }
</style>