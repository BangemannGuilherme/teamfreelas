@extends('layouts.master')

@section('content')
<div class="container" style="margin-top: 3%;">
    <div class="col-md-12 widgets-perfil">
        <h1>PERFIL DE USUÁRIO</h1><h2 style="font-weight: bold;">{{ Auth::user()->nome }} {{ Auth::user()->sobrenome }}</h2>
        <div class="widgets-group">
            <div class="col-md-12 widgets-subtitle"><h3>Informações</h3></div>
            <div class="col-md-12">
                <div class="widget style1 lazur-bg" data-toggle="tooltip" title="Quantidade de servidores virtuais">
                    <div class="row">
                        <div class="col-md-4">
                            <i class="fas fa-cloud-upload-alt fa-5x"></i>
                            <!--<img src="img/servers-cloud.png" width="120%">-->
                        </div>
                        <div class="col-md-8 text-right">
                            <div class="bottom">
                                <span> SERVIDORES VIRTUAIS </span>
                            </div>
                            <h2 class="font-bold">AAAAAAAAAAAAAAA</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="widget style1 navy-bg" data-toggle="tooltip" title="Quantidade de servidores físicos">
                    <div class="row">
                        <div class="col-md-4">
                            <i class="fas fa-hdd fa-5x"></i>
                            <!--<img src="img/servers.png" width="120%">-->
                        </div>
                        <div class="col-md-8 text-right">
                            <div class="bottom">
                                <span> SERVIDORES FÍSICOS </span>
                            </div>
                            <h2 class="font-bold">AAAAAAAAAAAAAAA</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="widget style1 yellow-bg" data-toggle="tooltip" title="Quantidade total de servidores">
                    <div class="row">
                        <div class="col-md-4">
                            <i class="fas fa-server fa-5x"></i>
                        </div>
                        <div class="col-md-8 text-right">
                            <div class="bottom">
                                <span> TOTAL DE SERVIDORES </span>
                            </div>
                            <h2 class="font-bold">AAAAAAAAAAAAAAA</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection

<script>
    window.onload = function(){
        $('.navbar-default').addClass('navbar-scroll');
    }
</script>

<style>
    .widgets-perfil {
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        padding: 1.25%;
        margin-top: 1%;
        margin-bottom: 1%;
    }
</style>