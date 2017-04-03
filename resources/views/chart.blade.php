@extends ('master')
@section('head')
    <title>Chart</title>
    {!! Charts::assets() !!}
@stop

@section('content')
        <h1>Charts</h1>
        <center>
            {!! $chart->render() !!}
        </center>
@stop