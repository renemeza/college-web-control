<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>College Web Control</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Rene Meza">

    <!-- Le styles -->
    <link href="{{ asset('assets/styles/styles.css') }}" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=" { assets('assets/js/html5shiv.js') }></script>
    <![endif]-->

  </head>

  <body>

    <header>
      <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="navbar-inner">
            <div class="container">
              <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="brand" href="/">College Control</a>
              <div class="nav-collapse collapse">
                <ul class="nav">
                  <li class="active"><a href="/">Inicio</a></li>
                  <li><a href="#about">Acerca</a></li>
                  <li><a href="#contact">Contacto</a></li>
                </ul>
              </div><!--/.nav-collapse -->
               @if( Auth::check() )
              <div class="userinfo pull-right">
                Bienvenido, <strong>{{ Auth::user()->username }}</strong>! <br>
                {{ HTML::link('logout', 'Salir')}}
              </div>
              @endif
            </div>
          </div>

        </nav>
      </header>

    <div class="container-fluid" data-role="main">
       <!-- @yield('content') -->
       @yield('content')
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/require.js') }}"></script>

    @yield('scripts')
  </body>
</html>
