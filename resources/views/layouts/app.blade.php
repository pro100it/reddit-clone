<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="dashboard.css" rel="stylesheet">
   
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        @auth
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Блог <b class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                    <a href="{{ route('create_post_path') }}">Добавить запись в блог</a>
                                    </li>
                                    <li>
                                    <a href="{{ route('store_post_path') }}">Все записи</a>
                                    </li>
                                </ul>
                        </li>
                        @endauth
                    </ul>  
                    <ul class="nav navbar-nav">
                        @auth
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Транспорт <b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                <a href="{{ route('create_transport_path') }}">Добавить транспорт</a>
                                </li>
                                <li>
                                <a href="{{ route('store_transport_path') }}">Список транспорта</a>
                                </li>
                            </ul>    
                        </li>
                        @endauth
                    </ul>
                    <ul class="nav navbar-nav">
                        @auth
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Производители БСМТ <b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                <a href="{{ route('create_vbsmt_path') }}">Добавить производителя</a>
                                </li>
                                <li>
                                <a href="{{ route('store_vbsmt_path') }}">Список производителей</a>
                                </li>
                            </ul>    
                        </li>
                        @endauth
                    </ul>
                    <ul class="nav navbar-nav">
                        @auth
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Блоки БСМТ <b class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
                                    
                                    <li>
                                    <a href="{{ route('create_bsmt_path') }}">Добавить блок БСМТ</a>
                                    </li>
                                    <li>
                                    <a href="{{ route('store_bsmt_path') }}">Список блоков БСМТ</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                    <a href="{{ route('create_sbsmt_path') }}">Добавить статус БСМТ</a>
                                    </li>
                                    <li>
                                    <a href="{{ route('store_sbsmt_path') }}">Список статусов БСМТ</a>
                                    </li>
                                </ul>
                        </li>
                        @endauth
                    </ul>                     
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Вход</a></li>
                            <li><a href="{{ route('register') }}">Регистрация</a></li>
                        @else
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

                <div class="container">
            @include('layouts._errors')
        
           @include('layouts._messages')

            @yield('content')
        </div>
                
        </div>

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('extra-js')
    
</body>
</html>    
    
