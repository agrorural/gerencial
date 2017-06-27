@extends ('master', ['body_class' => 'graficas'])
@section('head')
@stop

@section('content')

    <h1 class="page-header">Gráficas</h1>
      <div class="col-sm-12">
        <!-- <chart></chart>-->
        <line-chart title="Personas vs. Importe Patronal 2017" :data="chartData"></line-chart>
        <column-chart title="Personas vs. Importe Patronal 2017" :data="chartData"></column-chart>
        <bar-chart title="Personas vs. Importe Patronal 2017" :data="chartData"></bar-chart>
      </div>
@stop
