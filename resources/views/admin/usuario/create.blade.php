@extends('admin.layouts.master')

@section('breadcrumb', 'Usuário')

@section('title', 'Usuário')

@section('content')
<h1>Criar Usuario</h1>
<hr>

<div class="col-md-12 text-right">
    <a class="btn btn-primary" href="{{url('admin/users/') }}"><i class="fas fa-undo-alt"></i> Voltar</a>
</div>
<div class="col-md-12">
    <form class="m-t" role="form" method="POST" action="{{ url('admin/users/create') }}">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
                    <label for="username">username</label>
                    <input type="text" class="form-control" name="username" placeholder="username">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                    <label for="password">password</label>
                    <input type="password" class="form-control" name="password" placeholder="password">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('sobrenome') ? 'has-error' : ''}}">
                    <label for="sobrenome">sobrenome</label>
                    <input type="text" class="form-control" name="sobrenome" placeholder="sobrenome">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                    <label for="email">email</label>
                    <input type="email" class="form-control" name="email" placeholder="email">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('data_nascimento') ? 'has-error' : ''}}">
                    <label for="data_nascimento">data_nascimento</label>
                    <input type="date" class="form-control" name="data_nascimento" placeholder="data_nascimento">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('admin') ? 'has-error' : ''}}">
                    <label for="admin">admin</label>
                    <input type="text" class="form-control" name="admin" placeholder="admin" maxlength="4">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                    <label for="status">status</label>
                    <input type="text" class="form-control" name="status" placeholder="status">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <button type="submit" class="btn btn-success block m-b">Salvar</button>
            </div>
        </div>
    </form>
</div>
@endsection