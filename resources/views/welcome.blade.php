@extends ('master', ['body_class' => 'inicio'])
@section('head')
    <script src="https://use.fontawesome.com/20bd7521ad.js"></script>
@stop

@section('sidebar')
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
        <h1 class="page-header">Escritorio</h1>
        <div class="spinner-wrapper">
           <p>Aplicación de información gerencial de AGRO RURAL</p>
        </div>
@stop
