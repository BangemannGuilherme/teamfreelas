<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TeamFreelas | User Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6 text-center">
                <img alt="image" src="/img/teamfreelas.png"/>
                <h1 class="font-bold">Bem vindo ao TeamFreelas!</h1>
                <h2 class="font-bold">Faça seu login!</h2>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form class="m-t" role="form" method="POST" action="{{ route('logar') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Usuário" name="username" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Senha" name="password" required="">
                        </div>
                        <button type="submit" class="btn btn-success block full-width m-b">Login</button>

                        <!-- <a href="#">
                            <small>Esqueceu a senha?</small>
                        </a> -->

                        <p class="text-muted text-center">
                            <small>Você ja tem registro?</small>
                        </p>
                        <a class="btn btn-sm btn-success btn-block btn-outline" href="{{ route('registro') }}">Criar uma conta</a>
                        <a class="btn btn-sm btn-success btn-block btn-outline" href="{{ route('home') }}">Página incial</a>
                    </form>

                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Team Freelas
            </div>
            <div class="col-md-6 text-right">
               <small>© 2014-2015</small>
            </div>
        </div>
    </div>

</body>

</html>
