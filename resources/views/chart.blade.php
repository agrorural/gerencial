@extends ('master', ['body_class' => 'graficas'])
@section('head')
@stop

@section('content')

    <h1 class="page-header">Gráficas</h1>
      <div class="col-sm-12">
        <line-chart title="Personas vs. Gasto 2017" :data="personaData"  xtitle="Mes" ytitle="Gasto" legend="bottom" :refresh="60"></line-chart>
        <column-chart title="Personas vs. Gasto 2017" :data="personaData"  xtitle="Mes" ytitle="Gasto" legend="bottom" :refresh="60"></column-chart>
      </div>
@stop
