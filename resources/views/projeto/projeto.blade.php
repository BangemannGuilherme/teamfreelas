@extends('layouts.master')

@section('content')
<div class="container" style="margin-top: 3%;">
    <div class="col-md-12 widgets-perfil">
        <h1 style="font-weight: bold;">Publicar projeto</h1>
        <div class="widgets-group">
            <div class="col-md-12 widgets-subtitle"><h3 style="font-weight: bold;">Descreva as Informações do seu projeto:</h3></div>
                <div class="widget ibox-content">
                    <div class="col-md-12">
                        <form class="m-t" role="form" method="POST" action="">
                            @csrf
                                <div class="col-sm-12">
                                    <div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
                                        <label for="titulo">Título</label>
                                        <input type="text" class="form-control" name="titulo" placeholder="Título">
                                    </div>
                                </div>    

                            <div class="col-sm-12">
                                    <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                                        <label for="descricao">Descrição</label>
                                        <textarea type="text" class="form-control" name="descricao" placeholder="Descrição"></textarea>
                                    </div>
                            </div>
                    

                                <div class="col-sm-12">
                                    <div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
                                        <label for="valor_pagamento">Valor Pagamento</label>
                                        <input type="text" class="form-control" name="valor_pagamento" placeholder="Valor Pagamento">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group {{ $errors->has('sobrenome') ? 'has-error' : ''}}">
                                        <label for="complexidade">Complexidade</label>
                                        <select type="select" class="form-control select2" name="complexidade" placeholder="Complexidade">
                                        <option> Baixa </option>
                                        <option> Média</option>
                                        <option> Alta </option>
                                        </select>
                                    </div>
                                </div>
                    

                                <div class="col-sm-3">
                                    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                                        <label for="data_estimada">Prazo para conclusão</label>
                                        <input type="date" class="form-control" name="data_estimada" placeholder="Data estimada">
                                    </div>
                                </div>

                    
                    
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success block m-b">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection