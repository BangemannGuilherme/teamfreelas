@extends('admin.layouts.master')

@section('breadcrumb', 'Status')

@section('title', 'Status')

@section('content')
<h1>Editar Status <strong>#{{ $id }}</strong></h1>
<hr>

<div class="col-md-12 text-right">
    <a class="btn btn-primary" href="{{ url('admin/status/') }}"><i class="fas fa-undo-alt"></i> Voltar</a>
</div>
<div class="col-md-12">
    <form class="m-t" role="form" method="POST" action="{{ url('admin/status/edit/' . $id) }}">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" value="{{ $nome }}" placeholder="Nome">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('cor') ? 'has-error' : ''}}">
                    <label for="cor">Cor</label>
                    <input type="text" class="form-control" name="cor" value="{{ $cor }}" placeholder="Cor">
                </div>
                <label>Ex.: </label>
                <small class="label label-default">default</small>
                <small class="label label-primary">primary</small>
                <small class="label label-success">success</small>
                <small class="label label-info">info</small>
                <small class="label label-warning">warning</small>
                <small class="label label-danger">danger</small>
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