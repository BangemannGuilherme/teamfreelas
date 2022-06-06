@extends('admin.layouts.master')

@section('breadcrumb', 'Usuário')

@section('title', 'Usuário')

@section('content')
<h1>Editar Usuario <strong>#{{ $id }}</strong></h1>
<hr>

<div class="col-md-12 text-right">
    <a class="btn btn-primary" href="{{url('admin/users/') }}"><i class="fas fa-undo-alt"></i> Voltar</a>
</div>
<div class="col-md-12">
    <form class="m-t" role="form" method="POST" action="{{ url('admin/users/edit/' . $id) }}">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
                    <label for="username">Usuário</label>
                    <input type="text" class="form-control" name="username" value="{{ $username }}" placeholder="Username">
                </div>
            </div>
            {{-- <div class="col-sm-6">
                <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                    <label for="password">Senha</label>
                    <input type="password" class="form-control" name="password" placeholder="Senha">
                </div>
            </div> --}}
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" value="{{ $nome }}" placeholder="Nome">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('sobrenome') ? 'has-error' : ''}}">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" class="form-control" name="sobrenome" value="{{ $sobrenome }}" placeholder="Sobrenome">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $email }}" placeholder="Email">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('data_nascimento') ? 'has-error' : ''}}">
                    <label for="data_nascimento">Data de Nascimento</label>
                    <input type="date" class="form-control" name="data_nascimento" value="{{ $data_nascimento }}" placeholder="Data de Nascimento">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('admin') ? 'has-error' : ''}}">
                    <label for="admin">Admin</label>
                    <input type="text" class="form-control" name="admin" value="{{ $admin }}" placeholder="Admin" maxlength="4">
                </div>
            </div>
            
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" name="status" value="{{ $status }}" placeholder="Status">
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