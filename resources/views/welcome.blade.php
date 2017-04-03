@extends ('master')
@section('head')
    <title>Bienvenido</title>
@stop

@section('content')
        @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                @endif
            </div>
        @endif
        <h1>Bienvenido</h1>
        <div id="app">
            <ul>
                <li v-for="persona in personas">@{{ persona['des_empresa'] }}</li>
            </ul>
        </div>
@stop