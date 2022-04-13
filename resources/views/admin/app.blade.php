<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TITLE</title>
        <!-- Font-Awesome 5-->
        <link href="/resources/font-awesome/css/fontawesome-all.min.css" rel="stylesheet"> <!--load all styles -->
        <link href="/resources/font-awesome/css/fontawesome.min.csss" rel="stylesheet"> <!--v4 compatibility -->


    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout" class="skin-blue">
    <nav class="navbar navbar-default">
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
                <a style="padding: 10px; height: 76px; position: absolute; background-color: white; border-radius: 4px; box-shadow: 2px 2px 2px #333; border: 1px solid #ccc;" href=""><img src="" width="80"></a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse" style="margin-left: 100px; margin-right: 100px">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav navbar-brand" style="padding: 0">
                    <li><a href="{{ url('/home') }}">aa</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right navbar-brand" style="padding: 0">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Criar usuário</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Sair</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="/resources/js/bootstrap.min.js"></script>
    <script src="/resources/js/jquery-3.1.1.min.js"></script>
</body>
</html>
