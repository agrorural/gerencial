@extends ('master')
@section('head')
    <title>Chart</title>
    {!! Charts::assets() !!}
@stop

@section('content')
	<div id="app">
    <h1 class="page-header">Reportes</h1>
        <chart></chart>
	</div>
	<div id ="chart">
		<h1>Charts</h1>
        <center>
            {!! $chart->render() !!}
        </center>
	</div>
@stop