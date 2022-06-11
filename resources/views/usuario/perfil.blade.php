@extends('layouts.master')

@section('content')
<div class="container" style="margin-top: 3%;">
    <div class="col-md-12 widgets-perfil">
        <h1>PERFIL DE USUÁRIO</h1>
        <div class="widgets-group">
            <div class="col-md-12 widgets-subtitle"><h2 style="font-weight: bold;">Informações:</h2></div>
            <div class="col-md-6">
                <div class="widget ibox-content">
                    <h2><label>Nome Completo:</label>
                        <p>{{ $usuario->nome }} {{ $usuario->sobrenome }}</p>
                    </h2>
                    <ul class="list-unstyled m-t-md">
                        <li>
                            <span class="fa fa-envelope m-r-xs"></span>
                            <label>Email:</label>
                            {{ $usuario->email }}
                        </li>
                        <li>
                            <span class="fa fa-home m-r-xs"></span>
                            <label>Endereço:</label>
                            {{ $usuario->rua }} {{ $usuario->numero }}, {{ $usuario->bairro }} {{ $usuario->cidade }}, {{ $usuario->pais }}
                        </li>
                        <li>
                            <span class="fa fa-phone m-r-xs"></span>
                            <label>Contato:</label>
                            {{ $usuario->celular }}, {{ $usuario->telefone_empresarial }}
                        </li>
                    </ul>
                    @include('usuario.edit')
                    {{-- <a class="btn btn-success btn-outline" href="{{ route('usuario.perfil.editar', ['username' => Auth::user()->username]) }}">Editar informações</a> --}}
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
    label {
        font-weight: bold;
    }

    .landing-page .navbar-default .nav li a {
        color: #676a6c;
    }

    .landing-page .navbar-scroll.navbar-default .nav li a {
        color: #676a6c;
    }

    .modal-body {
        padding: 20px 30px 5px 30px !important;
    }

    .widgets-perfil {
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        padding: 1.25%;
        margin-top: 1%;
        margin-bottom: 1%;
    }
</style>