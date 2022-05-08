@extends('layouts.master')

@section('title')
Usuário - Novo
@endsection

@section('content')

    <h1>Criar novo usuário</h1>
    <hr/>

    {!! Form::open(['url' => 'admin/usuario', 'class' => 'form-horizontal']) !!}

            <div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
                {!! Form::label('name', 'Nome: ', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
                {!! Form::label('username', 'Usuário: ', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('username', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
                {!! Form::label('email', 'E-mail: ', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
                {!! Form::label('password', 'Senha: ', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('company') ? 'has-error' : ''}}">
                {!! Form::label('company', 'Empresa: ', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('company', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('company', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('paineis') ? 'has-error' : ''}}">
                {!! Form::label('painelprincipal', 'Painel Principal: ', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('painelprincipal', \App\Painel::listarPaineis(true), null, ['class' => 'form-control select2']) !!}
                    {!! $errors->first('painelprincipal', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
                {!! Form::label('debug', 'Modo Debug: ', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                    {!! Form::checkbox('debug', 't', false) !!}
                    {!! $errors->first('debug', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
                {!! Form::label('admin', 'Admin: ', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                    {!! Form::checkbox('admin', 't', false) !!}
                    {!! $errors->first('admin', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('externo') ? 'has-error' : ''}}">
                {!! Form::label('externo', 'Usuário externo: ', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                    {!! Form::checkbox('externo', 't', false) !!}
                    {!! $errors->first('externo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('company') ? 'has-error' : ''}}">
                {!! Form::label('api_token', 'API Token: ', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-6">
                    <div class="input-group">
                        {!! Form::text('api_token', null, ['class' => 'form-control']) !!}
                        <div class="input-group-btn">
                            <button class="btn btn-info" type="button" title="Gerar HASH" style="padding: 9.5px 10px;" onclick="generateHash('#api_token', 60);return false;"> <i class="fas fa-random"></i> </button>
                        </div>
                        {!! $errors->first('api_token', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>

            <div class="form-group {{ $errors->has('paineis') ? 'has-error' : ''}}">
                {!! Form::label('grupo_id[]', 'Grupos: ', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('grupo_id[]', \App\Grupo::all()->pluck('nome', 'id'), null, ['class' => 'form-control select2', 'multiple']) !!}
                    {!! $errors->first('grupo_id[]', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-2">
            {!! Form::submit('Salvar', ['class' => 'btn btn-primary btn-lg btn-block']) !!}
        </div>
    </div>
    {!! Form::close() !!}

@endsection

<script type="text/javascript">
    
function generateHash(field, length) {

    if( $(field).length )
        $(field).val('');

    var result           = '';
    var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
       result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }

    $(field).val(result);
}

</script>