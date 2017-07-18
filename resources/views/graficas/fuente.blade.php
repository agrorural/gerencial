@extends ('master', ['body_class' => 'graficas'])
@section('head')
@stop
@section('pageName')
Gráficas de Fuentes de Financiamiento
@stop
@section('content')

    <pie-chart :data="fuenteTotal"></pie-chart>

@stop
