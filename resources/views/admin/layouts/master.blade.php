<!--
*
*  INSPINIA - Responsive Admin Theme
*  version 2.9.4
*
-->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>TeamFreelas | Admin Dashboard</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <link href="/font-awesome/css/font-awesome.css" rel="stylesheet"> --}}
    <script src="https://kit.fontawesome.com/ce2769c38b.js" crossorigin="anonymous"></script>

    <!-- Toastr style -->
    <link href="/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>

<body class="skin-2">
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            {{-- <img alt="image" class="rounded-circle" src="/img/profile_small.jpg"/> --}}
                            <img alt="image" src="/img/teamfreelas.png" style="width: 100%"/>
                            <div>
                                <span class="block m-t-xs font-bold text-center" style="color: white">{{ Auth::user()->nome }} {{ Auth::user()->sobrenome }}</span>
                                <span class="text-muted text-xs block text-center" style="color: white">{{ Auth::user()->username }}{{--<b class="caret"></b>--}}</span>
                            </div>
                            {{-- <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="dropdown-item" href="/profile.html">Profile</a></li>
                                <li><a class="dropdown-item" href="/contacts.html">Contacts</a></li>
                                <li><a class="dropdown-item" href="/mailbox.html">Mailbox</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/login.html">Logout</a></li>
                            </ul> --}}
                        </div>
                        <div class="logo-element">
                            TF+
                        </div>
                    </li>
                    <li class="active">
                        <a href="/admin"><i class="fas fa-home"></i> <span class="nav-label">Home</span></a>
                    </li>
                    <li>
                        <a href="/admin/users"><i class="fa fa-user"></i> <span class="nav-label">Usuários</span></a>
                    </li>
                    <li>
                        <a href="/admin/freelancers"><i class="fa fa-users"></i> <span class="nav-label">Freelancer</span></a>
                    </li>
                    <li>
                        <a href="/admin/propostas"><i class="fa-solid fa-clipboard-question"></i> <span class="nav-label">Proposta</span></a>
                    </li>
                    <li>
                        <a href="/admin/servicos"><i class="fa-solid fa-briefcase"></i> <span class="nav-label">Serviços</span></a>
                    </li>
                    <li>
                        <a href="/admin/contratos"><i class="fa-solid fa-file-signature"></i> <span class="nav-label">Contratos</span></a>
                    </li>
                    <li>
                        <a href="/admin/graphs"><i class="fas fa-chart-area"></i> <span class="nav-label">Gráficos</span></a>
                    </li>
                    <li>
                        <a href="/admin/reports"><i class="fas fa-file-alt"></i> <span class="nav-label">Relatórios</span></a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-success " href="/#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" action="search_results.html">
                            <div class="form-group">
                                <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li style="padding: 20px">
                            <span class="m-r-sm text-muted welcome-message">Seja Bem vindo ao Painel do Admin.</span>
                        </li>
                        <li>
                            <a href="{{ route('admin.logout') }}">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                        </li>
                        <li>
                            <a class="right-sidebar-toggle">
                                <i class="fa fa-tasks"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>                
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>@yield('title')</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>@yield('breadcrumb')</strong>
                        </li>
                    </ol>
                </div>
            </div>

            <div class="wrapper wrapper-content">
                <div class="animated fadeInRightBig">
                    {{-- <h3 class="font-bold">This is page content</h3> --}}
                    <div class="error-desc">
                        @yield('content')
                        {{-- <br/><a href="index.html" class="btn btn-success m-t">Dashboard</a> --}}
                    </div>
                </div>
            </div>

            {{-- <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        @yield('content')
                    </div>
                </div>
            </div> --}}
            <div class="footer">
                <div class="float-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> TeamFreelas Company &copy; 2022-2023
                </div>
            </div>
        </div>

    <!-- Mainly scripts -->
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="/js/plugins/flot/jquery.flot.js"></script>
    <script src="/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/js/inspinia.js"></script>
    <script src="/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="/js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="/js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="/js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="/js/plugins/toastr/toastr.min.js"></script>

    <script>
        $(document).ready(function() {

            let toast = $('.toast');

            setTimeout(function() {
                toast.toast({
                    delay: 5000,
                    animation: true
                });
                toast.toast('show');

            }, 2200);

            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#1ab394", "#1C84C6"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = {
                labels: ["App","Software","Laptop" ],
                datasets: [{
                    data: [300,50,100],
                    backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById("doughnutChart").getContext("2d");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

            var doughnutData = {
                labels: ["App","Software","Laptop" ],
                datasets: [{
                    data: [70,27,85],
                    backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById("doughnutChart2").getContext("2d");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

        });

        $(window).bind("scroll", function () {
            let toast = $('.toast');
            toast.css("top", window.pageYOffset + 20);

        });
    </script>

</body>
</html>
