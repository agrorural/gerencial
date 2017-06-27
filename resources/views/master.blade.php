<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Styles -->
        <link href="{{ URL::asset('/css/app.css?ver=1') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('/css/dashboard.css?ver=1') }}" rel="stylesheet" type="text/css">
        <script src="https://www.gstatic.com/charts/loader.js"></script>
        @yield('head')
    </head>
    <body class="{{$body_class}}">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/">Información Gerencial</a>
            </div>
          </div>
        </nav>
        <div class="container-fluid">
          <div id="app" class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                @yield('sidebar')
              <sidebar-menu></sidebar-menu>

            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
              @yield('content')
            </div>
          </div>
        </div>
        @yield('pre-footer')
        <script src="{{ mix('js/app.js') }}"></script>
        @yield('footer')

    </body>
</html>
