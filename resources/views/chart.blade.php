@extends ('master')
@section('head')
    <title>Chart</title>
    {!! Charts::assets() !!}
@stop

@section('content')
	<div id="app">
        
	</div>
	<div id ="chart">
		<h1>Charts</h1>
        <center>
            {!! $chart->render() !!}
        </center>
	</div>
@stop