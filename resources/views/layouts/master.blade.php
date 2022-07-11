<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TeamFreelas</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <link href="/font-awesome/css/font-awesome.css" rel="stylesheet"> --}}
    <script src="https://kit.fontawesome.com/ce2769c38b.js" crossorigin="anonymous"></script>

    <!-- Mainly scripts -->
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/js/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/js/inspinia.js"></script>
    <script src="/js/plugins/pace/pace.min.js"></script>
    <script src="/js/plugins/wow/wow.min.js"></script>

    <!-- Toastr style -->
    <link href="/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>

<body id="page-top" class="landing-page no-skin-config">
    <div class="navbar-wrapper">
        <nav class="navbar navbar-default navbar-fixed-top navbar-expand-md" role="navigation">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">Página Inicial</a>
                <div class="navbar-header page-scroll">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="nav-link page-scroll" href="{{ route('servico.create') }}">Publicar Projeto</a></li>
                        <li><a class="nav-link page-scroll" href="{{ route('servico.list') }}" >Projetos publicados</a></li>
                        <li><a class="nav-link page-scroll" href="{{ route('freelancer.list') }}">Freelancers disponíveis</a></li>
                        <li><a class="nav-link page-scroll" href="#contact">Contato</a></li>
                        <li>&emsp;&emsp;&emsp;</li>
                    </ul>
                </div>
                @if (Auth::check())
                <a class="navbar-brand" href="{{ route('usuario.perfil', ['username' => Auth::user()->username]) }}">{{ Auth::user()->nome }}</a>
                @else
                <a class="navbar-brand" href="{{ route('registro') }}">Cadastre-se</a>
                @endif
                @if (Auth::check())
                <a class="navbar-brand" href="{{ route('logout') }}">Logout</a>
                @else
                <a class="navbar-brand" href="{{ route('login') }}">Login</a>
                @endif
            </div>
        </nav>
    </div>

@yield('content')

    <section id="contact" class="gray-section contact">
        <div class="container">
            <div class="row m-b-lg">
                <div class="col-lg-12 text-center">
                    <div class="navy-line"></div>
                    <h1>Fale Conosco</h1>
                    <p>Se tiver alguma dúvida, não hesite em nos contatar.</p>
                </div>
            </div>
            <div class="row m-b-lg justify-content-center">
                <div class="col-lg-3 ">
                    <address>
                        <strong><span class="navy">TeamFreelas</span></strong><br/>
                        795 Folsom Ave, Suite 600<br/>
                        San Francisco, CA 94107<br/>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>
                </div>
                <div class="col-lg-4">
                    <p class="text-color">
                        Consectetur adipisicing elit. Aut eaque, totam corporis laboriosam veritatis quis ad perspiciatis, totam corporis laboriosam veritatis, consectetur adipisicing elit quos non quis ad perspiciatis, totam corporis ea,
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="mailto:teamfreelas@gmail.com" class="btn btn-success">Mandar Email</a>
                    <p class="m-t-sm">
                        Siga-nos nas redes sociais
                    </p>
                    <ul class="list-inline social-icon">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center m-t-lg m-b-lg">
                    <p><strong>&copy; 2022 TeamFreelas</strong><br/> Sempre criando, inovando, proporcionando e permitindo que o seu projeto saia do papel.</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

<style>
    .sweet-alert button.confirm {
        background-color: #3085d6 !important;
    }

    .sweet-alert button.cancel {
        background-color: #d04343 !important;
    }
</style>