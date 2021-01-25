<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'Laravel') }}</title>


        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @yield('styles')
        
        <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/cover/">

    </head>
    <body class="text-center">
      <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li>
                <a class="nav-link" href="{{ route('index') }}">Home</a>
              </li>
              <li>
                <a class="nav-link" href="{{ route('ajax') }}">Employees</a>
              </li>
              <li>
                <a class="nav-link" href="{{ route('create') }}">Create Employee</a>
              </li>
            </ul>
          </div>
        </nav>
        @yield('content')
      </div>

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
      @yield('javascripts')
    </body>
</html>
