<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    
    <!-- <link href="dashboard.css" rel="stylesheet"> -->
   
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">  
  <!-- Branding Image -->
  <a class="navbar-brand" href="{{ url('/') }}">
      {{ config('app.name', 'Laravel') }}
  </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Блог <b class="caret"></b></a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="{{ route('create_post_path') }}">Добавить запись в блог</a>
                        <a class="dropdown-item" href="{{ route('store_post_path') }}">Все записи</a>
                    </div>
            </li>
        </ul>  
        
    <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Транспорт <b class="caret"></b></a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="{{ route('create_transport_path') }}">Добавить транспорт</a>
                <a class="dropdown-item" href="{{ route('store_transport_path') }}">Список транспорта</a>
            </div>    
        </li>
    </ul>
                    
    <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Производители БСМТ <b class="caret"></b></a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="{{ route('create_vbsmt_path') }}">Добавить производителя</a>
                <a class="dropdown-item" href="{{ route('store_vbsmt_path') }}">Список производителей</a>
            </div>
        </li>
    </ul>

    <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Блоки БСМТ <b class="caret"></b></a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="{{ route('create_bsmt_path') }}">Добавить блок БСМТ</a>
                <a class="dropdown-item" href="{{ route('store_bsmt_path') }}">Список блоков БСМТ</a>
                <a class="dropdown-item" href="{{ route('create_sbsmt_path') }}">Добавить статус БСМТ</a>
                <a class="dropdown-item" href="{{ route('store_sbsmt_path') }}">Список статусов БСМТ</a>
            </div>
        </li>
    </ul> 
            
    <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Транспорт на линии<b class="caret"></b></a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="{{ route('create_transport_active_path') }}">Добавить транспорт</a>
                <a class="dropdown-item" href="{{ route('store_transport_active_path') }}">Список транспорта</a>
            </div>
        </li>
    </ul>                    
                    <!-- Right Side Of Navbar -->
                    
    <ul class="nav navbar-nav navbar-right">
        @guest
        <li class="nav-item" ><a class="nav-link" href="{{ route('login') }}">Вход</a></li>
        <li class="nav-item" ><a class="nav-link"href="{{ route('register') }}">Регистрация</a></li>
        @else
        
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </li>
        @endguest
    </ul>
    </div>         
</nav>

<main role="main" class="container">
   <div class="jumbotron">
    @include('layouts._errors')
    @include('layouts._messages')
    @yield('content')
   </div>
</div>

    <script src="{{ asset('js/app.js') }}"></script> 
    @yield('extra-js')
    
</body>
</html>    
    
