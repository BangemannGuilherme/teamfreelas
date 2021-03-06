@extends('layouts.master')

@section('content')
<div class="container" style="margin-top: 4%; max-width: 70%;">
    <div class="wrapper wrapper-content animated fadeInUp">
        <div class="row">
            <div class="col-lg-9">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="m-b-md">
                                    <a href="#" class="btn btn-white btn-xs float-right">Edit project</a>

                                    <h2>Encaminhar proposta para:</h2>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <dl class="row mb-0">
                                    <div class="col-sm-4 text-sm-right">
                                        <dt>Status:</dt>
                                    </div>
                                    <div class="col-sm-8 text-sm-left">
                                        <dd class="mb-1"><span class="label label-primary">Active</span></dd>
                                    </div>
                                </dl>
                                <dl class="row mb-0">
                                    <div class="col-sm-4 text-sm-right">
                                        <dt>Criado por:</dt>
                                    </div>
                                    <div class="col-sm-8 text-sm-left">
                                        <dd class="mb-1">{{ ucfirst($servico->cliente->user->nome) }} {{ ucfirst($servico->cliente->user->sobrenome) }}</dd>
                                    </div>
                                </dl>
                                <dl class="row mb-0">
                                    <div class="col-sm-4 text-sm-right">
                                        <dt>Mensagens:</dt>
                                    </div>
                                    <div class="col-sm-8 text-sm-left">
                                        <dd class="mb-1"> 0</dd>
                                    </div>
                                </dl>
                                <dl class="row mb-0">
                                    <div class="col-sm-4 text-sm-right">
                                        <dt>Cliente:</dt>
                                    </div>
                                    <div class="col-sm-8 text-sm-left">
                                        <dd class="mb-1"><a href="#" class="text-navy"> {{ ucfirst($servico->cliente->user->nome) }} {{ ucfirst($servico->cliente->user->sobrenome) }}</a></dd>
                                    </div>
                                </dl>
                                <dl class="row mb-0">
                                    <div class="col-sm-4 text-sm-right">
                                        <dt>Vers??o:</dt>
                                    </div>
                                    <div class="col-sm-8 text-sm-left">
                                        <dd class="mb-1"> v1.0.0</dd>
                                    </div>
                                </dl>
                                <dl class="row mb-0">
                                    <div class="col-sm-4 text-sm-right">
                                        <dt>Valor:</dt>
                                    </div>
                                    <div class="col-sm-8 text-sm-left">
                                        <dd class="mb-1"> R${{ $servico->valor_pagamento }}</dd>
                                    </div>
                                </dl>

                            </div>
                            <div class="col-lg-6" id="cluster_info">

                                <dl class="row mb-0">
                                    <div class="col-sm-4 text-sm-right">
                                        <dt>Ultima Atualiza????o:</dt>
                                    </div>
                                    <div class="col-sm-8 text-sm-left">
                                        <dd class="mb-1">{{ Carbon\Carbon::parse($servico->updated_at)->format('d/m/Y h:i:s') }}</dd>
                                    </div>
                                </dl>
                                <dl class="row mb-0">
                                    <div class="col-sm-4 text-sm-right">
                                        <dt>Data cria????o:</dt>
                                    </div>
                                    <div class="col-sm-8 text-sm-left">
                                        <dd class="mb-1">{{ Carbon\Carbon::parse($servico->created_at)->format('d/m/Y h:i:s') }}</dd>
                                    </div>
                                </dl>
                                <dl class="row mb-0">
                                    <div class="col-sm-4 text-sm-right">
                                        <dt>Data estimada:</dt>
                                    </div>
                                    <div class="col-sm-8 text-sm-left">
                                        <dd class="mb-1">{{ Carbon\Carbon::parse($servico->data_estimada)->format('d/m/Y') }}</dd>
                                    </div>
                                </dl>
                                {{-- <dl class="row mb-0">
                                    <div class="col-sm-4 text-sm-right">
                                        <dt>Participants:</dt>
                                    </div>
                                    <div class="col-sm-8 text-sm-left">
                                        <dd class="project-people mb-1">
                                            <a href=""><img alt="image" class="rounded-circle" src="/img/carinha.png"></a>
                                            <a href=""><img alt="image" class="rounded-circle" src="/img/carinha.png"></a>
                                            <a href=""><img alt="image" class="rounded-circle" src="/img/carinha.png"></a>
                                            <a href=""><img alt="image" class="rounded-circle" src="/img/carinha.png"></a>
                                            <a href=""><img alt="image" class="rounded-circle" src="/img/carinha.png"></a>
                                        </dd>
                                    </div>
                                </dl> --}}
                                <dl class="row mb-0">
                                    <div class="col-sm-4 text-sm-right">
                                        <dt>Complexidade:</dt>
                                    </div>
                                    <div class="col-sm-8 text-sm-left">
                                        <dd class="mb-1">{{ $servico->complexidade }}</dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <dl class="row mb-0">
                                    <div class="col-sm-2 text-sm-right">
                                        <dt>T??tulo:</dt>
                                    </div>
                                    <div class="col-sm-8 text-sm-left">
                                        <dd class="mb-1">{{ mb_strtoupper($servico->titulo) }}</dd>
                                    </div>
                                </dl>
                                <dl class="row mb-0">
                                    <div class="col-sm-2 text-sm-right">
                                        <dt>Descri????o:</dt>
                                    </div>
                                    <div class="col-sm-8 text-sm-left">
                                        <dd class="mb-1">{{ ucfirst($servico->descricao) }}</dd>
                                    </div>
                                </dl>
                                <dl class="row mb-0 text-right">
                                    <div class="col-sm-12 text-sm-right">
                                        <button type="button" class="btn btn-success btn-outline btn-sm" data-toggle="modal" data-target="#enviarSolicitacao">
                                            Enviar solicita????o
                                        </button>
                                    </div>
                                </dl>
                            </div>
                        </div>

                        @include('servico.modal')

                        {{-- <div class="row">
                            <div class="col-lg-12">
                                <dl class="row mb-0">
                                    <div class="col-sm-2 text-sm-right">
                                        <dt>Completed:</dt>
                                    </div>
                                    <div class="col-sm-10 text-sm-left">
                                        <dd>
                                            <div class="progress m-b-1">
                                                <div style="width: 60%;" class="progress-bar progress-bar-striped progress-bar-animated"></div>
                                            </div>
                                            <small>Project completed in <strong>60%</strong>. Remaining close the project, sign a contract and invoice.</small>
                                        </dd>
                                    </div>
                                </dl>
                            </div>
                        </div> --}}
                        <div class="row m-t-sm">
                            <div class="col-lg-12">
                                <div class="panel blank-panel">
                                    <div class="panel-heading">
                                        <div class="panel-options">
                                            <ul class="nav nav-tabs">
                                                <li><a class="nav-link active" href="#tab-1" data-toggle="tab">Mensagens</a></li>
                                                <li><a class="nav-link" href="#tab-2" data-toggle="tab">??ltimas atualiza????e</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">

                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab-1">
                                                <div class="feed-activity-list">
                                                    <div class="feed-element">
                                                        <a href="#" class="float-left">
                                                            <img alt="image" class="rounded-circle" src="/img/carinha.png">
                                                        </a>

                                                        <div class="media-body ">
                                                            <small class="float-right">2h ago</small>
                                                            <strong>Mark Johnson</strong> posted a new message<br>
                                                            <small class="text-muted">Today 2:10 pm - 12.06.2014</small>
                                                            <div class="well">
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                                Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane" id="tab-2">

                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>Status</th>
                                                        <th>Title</th>
                                                        <th>Start Time</th>
                                                        <th>End Time</th>
                                                        <th>Comments</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <span class="label label-primary"><i class="fa fa-check"></i> Completed</span>
                                                        </td>
                                                        <td>
                                                            Create project in webapp
                                                        </td>
                                                        <td>
                                                            12.07.2014 10:10:1
                                                        </td>
                                                        <td>
                                                            14.07.2014 10:16:36
                                                        </td>
                                                        <td>
                                                            <p class="small">
                                                                Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable.
                                                            </p>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="label label-primary"><i class="fa fa-check"></i> Accepted</span>
                                                        </td>
                                                        <td>
                                                            Various versions
                                                        </td>
                                                        <td>
                                                            12.07.2014 10:10:1
                                                        </td>
                                                        <td>
                                                            14.07.2014 10:16:36
                                                        </td>
                                                        <td>
                                                            <p class="small">
                                                                Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                                            </p>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                                                        </td>
                                                        <td>
                                                            There are many variations
                                                        </td>
                                                        <td>
                                                            12.07.2014 10:10:1
                                                        </td>
                                                        <td>
                                                            14.07.2014 10:16:36
                                                        </td>
                                                        <td>
                                                            <p class="small">
                                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                                            </p>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="label label-primary"><i class="fa fa-check"></i> Reported</span>
                                                        </td>
                                                        <td>
                                                            Latin words
                                                        </td>
                                                        <td>
                                                            12.07.2014 10:10:1
                                                        </td>
                                                        <td>
                                                            14.07.2014 10:16:36
                                                        </td>
                                                        <td>
                                                            <p class="small">
                                                                Latin words, combined with a handful of model sentence structures
                                                            </p>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="label label-primary"><i class="fa fa-check"></i> Accepted</span>
                                                        </td>
                                                        <td>
                                                            The generated Lorem
                                                        </td>
                                                        <td>
                                                            12.07.2014 10:10:1
                                                        </td>
                                                        <td>
                                                            14.07.2014 10:16:36
                                                        </td>
                                                        <td>
                                                            <p class="small">
                                                                The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                                                            </p>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                                                        </td>
                                                        <td>
                                                            The first line
                                                        </td>
                                                        <td>
                                                            12.07.2014 10:10:1
                                                        </td>
                                                        <td>
                                                            14.07.2014 10:16:36
                                                        </td>
                                                        <td>
                                                            <p class="small">
                                                                The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                                            </p>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="label label-primary"><i class="fa fa-check"></i> Reported</span>
                                                        </td>
                                                        <td>
                                                            The standard chunk
                                                        </td>
                                                        <td>
                                                            12.07.2014 10:10:1
                                                        </td>
                                                        <td>
                                                            14.07.2014 10:16:36
                                                        </td>
                                                        <td>
                                                            <p class="small">
                                                                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                                                            </p>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="label label-primary"><i class="fa fa-check"></i> Completed</span>
                                                        </td>
                                                        <td>
                                                            Lorem Ipsum is that
                                                        </td>
                                                        <td>
                                                            12.07.2014 10:10:1
                                                        </td>
                                                        <td>
                                                            14.07.2014 10:16:36
                                                        </td>
                                                        <td>
                                                            <p class="small">
                                                                Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable.
                                                            </p>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                                                        </td>
                                                        <td>
                                                            Contrary to popular
                                                        </td>
                                                        <td>
                                                            12.07.2014 10:10:1
                                                        </td>
                                                        <td>
                                                            14.07.2014 10:16:36
                                                        </td>
                                                        <td>
                                                            <p class="small">
                                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                                            </p>
                                                        </td>

                                                    </tr>

                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="wrapper wrapper-content project-manager">
                    <h4>Descri????o do Projeto</h4>

                    <p class="small">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look
                        even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                    </p>

                    <p class="small font-bold">
                        <span><i class="fa fa-circle text-warning"></i> High priority</span>
                    </p>
                    <h5>Project tag</h5>
                    <ul class="tag-list" style="padding: 0">
                        <li><a href=""><i class="fa fa-tag"></i> Zender</a></li>
                        <li><a href=""><i class="fa fa-tag"></i> Lorem ipsum</a></li>
                        <li><a href=""><i class="fa fa-tag"></i> Passages</a></li>
                        <li><a href=""><i class="fa fa-tag"></i> Variations</a></li>
                    </ul>
                    <h5>Project files</h5>
                    <ul class="list-unstyled project-files">
                        <li><a href=""><i class="fa fa-file"></i> Project_document.docx</a></li>
                        <li><a href=""><i class="fa fa-file-picture-o"></i> Logo_zender_company.jpg</a></li>
                        <li><a href=""><i class="fa fa-stack-exchange"></i> Email_from_Alex.mln</a></li>
                        <li><a href=""><i class="fa fa-file"></i> Contract_20_11_2014.docx</a></li>
                    </ul>
                    <div class="text-center m-t-md">
                        <a href="#" class="btn btn-xs btn-primary">Add files</a>
                        <a href="#" class="btn btn-xs btn-primary">Report contact</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@include('javascript-page')
@include('css-page')