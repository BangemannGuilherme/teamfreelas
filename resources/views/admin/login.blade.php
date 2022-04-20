<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TeamFreelas | Login</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="padding-top-img-login animated text-center fadeInDown">
        <div>
            <div>

                <!-- <h1 class="logo-name">IN+</h1> -->
                <img alt="image" src="/img/teamfreelas.png"/>

            </div>
            <div class="middle-box text-center loginscreen">
                <h3>Bem vindo ao Painel do Admin</h3>
                <p><b>TeamFreelas</b></p>
                <p>Login in. To see it in action.</p>
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="m-t" role="form" method="POST" action="{{ route('admin.login') }}">
                    @csrf
                    <div class="form-group">
                        <input type="user" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-success block full-width m-b">Login</button>

                    <a href="/#"><small>Forgot password?</small></a>
                    <p class="text-muted text-center"><small>Do not have an account?</small></p>
                    <a class="btn btn-sm btn-white btn-block" href="/register.html">Create an account</a>
                </form>
                <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.js"></script>

</body>

</html>
