@extends('admin.layouts.master')

@section('breadcrumb', 'Usuário')

@section('title', 'Usuário')

@section('content')

<h1>Editar Freelancer</h1>
<hr />

<form class="m-t" role="form" method="POST" action="{{ route('usuario.update',  ['id'=>$id]) }}">
    @csrf
    <div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
        <h4 for="nome">Nome</h4>
        <div class="col-md-6">
            <input type="text" class="" name="nome" value="{{ $nome }}">
        </div>
    </div>

    <div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
        <h4 for="nome">Sobrenome</h4>
        <div class="col-md-6">
            <input type="text" class="" name="sobrenome" value="{{ $sobrenome }}">
        </div>
    </div>

    <div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
        <h4 for="nome">Email</h4>
        <div class="col-md-6">
            <input type="text" class="" name="email" value="{{ $email }}">
        </div>
    </div>

    <button type="submit" class="btn btn-success block full-width m-b">Salvar</button>
</form>

@endsection