@extends ('master', ['body_class' => 'graficas'])
@section('head')
@stop
@section('pageName')
Gráficas de Personal
@stop
@section('content')

    <line-chart title="Personas vs. Gasto 2017" :data="personaData"  xtitle="Mes" ytitle="Gasto" legend="bottom"></line-chart>
    <column-chart title="Total de Persona 2017" :data="personaTotal"  xtitle="Mes" ytitle="Personas" legend="bottom"></column-chart>

@stop
