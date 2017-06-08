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
        <h1 class="page-header">Dashboard</h1>
        <div class="spinner-wrapper">
          <div class="spinner">
            <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
            <span class="sr-only">Loading...</span>
          </div>
        </div>
@stop
