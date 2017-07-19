<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Información Gerencial de AGRO RURAL</title>
        <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
        <!-- Styles -->
        <link href="{{ URL::asset('/css/app.css?ver=1') }}" rel="stylesheet" type="text/css">
        <script src="https://www.gstatic.com/charts/loader.js"></script>
        @yield('head')
    </head>
    <body class="{{$body_class}}">
      <div id="app">
        <header>
          <nav class="top-nav">
            <div class="container">
              <div class="nav-wrapper">
                <a class="page-title">@yield('pageName')</a>
                <a href="#" data-activates="nav-mobile" class="button-collapse top-nav"><i class="material-icons">menu</i></a>
              </div>
            </div>
          </nav>

          @yield('sidebar')
          <sidebar-menu></sidebar-menu>
        </header>
        <main>
          <div class="container">
            <div id="content" class="row">
              <div class="col s12 m12 l112">
                @yield('content')
              </div>
            </div>
          </div>
        </main>
      </div>
        @yield('pre-footer')
        <script src="{{ mix('js/app.js') }}"></script>
        @yield('footer')
      
    </body>
</html>
