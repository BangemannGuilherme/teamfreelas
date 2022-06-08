<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TeamFreelas | User Register</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="padding-top-img-login text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <img alt="image" src="/img/teamfreelas.png"/>

            </div>
            <div class="middle-box text-center loginscreen">
                <h3>Bem vindo a pagina de registro</h3>
                <p><b>TeamFreelas</b></p>
                <p>Crie sua conta e seja feliz!.</p>
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="m-t" role="form" method="POST" action="{{ route('registro') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nome" name="name" required="">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Sobrenome" name="surname" required="">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" name="email" required="">
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" placeholder="Data de Nascimento" name="data_nascimento" required="">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Usuário" name="username" required="">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Senha" name="password" required="">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirmar senha" name="password_confirmation" required="">
                    </div>
                    <button type="submit" class="btn btn-success block full-width m-b">Registro</button>

                    <p class="text-muted text-center"><small>Já tem uma conta?</small></p>
                    <a class="btn btn-sm btn-success btn-block btn-outline" href="{{ route('login') }}">Logar</a>
                    <a class="btn btn-sm btn-success btn-block btn-outline" href="{{ route('home') }}">Página incial</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>
