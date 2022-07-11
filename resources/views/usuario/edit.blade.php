<!-- Modal Perfil -->
<!-- Botão Abrir Modal -->
<div class="text-left">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#divModalPerfil"><i class="fa-solid fa-pen-to-square"></i> Editar informações</button>
</div>
<!-- Modal -->
<div class="modal inmodal fade" id="divModalPerfil" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="max-width: 44.7508%">
        <div class="modal-content animated bounceInDown">
            <!-- Modal Header -->
            <div class="modal-header blue-bg">
                <button type="button" title="Fechar" class="close" data-dismiss="modal" data-backdrop=""><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Perfil</b> - Atualizar Informações</h4>
                <small class="font-bold">Aqui você pode editar as informações do seu perfil. Só modifique o que realmente deseja atualizar.</small>
            </div>
            <!-- Modal Body -->
            <form class="m-t" role="form" method="POST" action="{{ route('usuario.perfil.update', ['id' => Auth::user()->id]) }}" style="margin-bottom: 0 !important;">
                @csrf
                <div class="modal-body">
                    <!-- Modal Campos -->
                    <div class="form-group">
                        <!-- Usuário -->
                        <div class="ibox-content-group widgets-perfil row">
                            <div class="col-md-12">
                            <h2 class="text-center" style="font-weight: bold;">Informações de Usuário</h2>
                            <hr style="font-weight: bold;">
                            </div>
                            <div class="widget no-padding widget-margin white-bg col-md-6">
                                <h3 for="nome">Nome:</h3>
                                <input id="nome" name="usuario_nome" type="text" placeholder="Nome" class="form-control" value="{{ $usuario->nome }}" disabled>
                                <label id="nome_editar" data-toggle="button" class="btn btn-success btn-outline form-control" type="button" aria-pressed="false"><i class="fa-solid fa-pen-to-square"></i> Editar</label>
                            </div>
                            <div class="widget no-padding widget-margin white-bg col-md-6">
                                <h3 for="sobrenome">Sobrenome:</h3>
                                <input id="sobrenome" name="usuario_sobrenome" type="text" placeholder="Sobrenome" class="form-control" value="{{ $usuario->sobrenome }}" disabled>
                                <label id="sobrenome_editar" data-toggle="button" class="btn btn-success btn-outline form-control" type="button" aria-pressed="false"><i class="fa-solid fa-pen-to-square"></i> Editar</label>
                            </div>
                            <div class="widget no-padding widget-margin white-bg col-md-6">
                                <h3 for="email">Email:</h3>
                                <input id="email" name="usuario_email" type="email" placeholder="Email" class="form-control" value="{{ $usuario->email }}" disabled>
                                <label id="email_editar" data-toggle="button" class="btn btn-success btn-outline form-control" type="button" aria-pressed="false"><i class="fa-solid fa-pen-to-square"></i> Editar</label>
                            </div>
                            <div class="widget no-padding widget-margin white-bg col-md-6">
                                <h3 for="data_nascimento">Data de Nascimento:</h3>
                                <input id="data_nascimento" name="usuario_data_nascimento" type="date" placeholder="Data de Nascimento" class="form-control" value="{{ $usuario->data_nascimento }}" disabled>
                                <label id="data_nascimento_editar" data-toggle="button" class="btn btn-success btn-outline form-control" type="button" aria-pressed="false"><i class="fa-solid fa-pen-to-square"></i> Editar</label>
                            </div>
                        </div>
                        <!-- Endereço -->
                        <div class="ibox-content-group widgets-perfil row">
                            <div class="col-md-12">
                            <h2 class="text-center" style="font-weight: bold;">Informações de Endereço</h2>
                            <hr style="font-weight: bold;">
                            </div>
                            <div class="widget no-padding widget-margin white-bg col-md-4" style="max-width: 32.58% !important">
                                <h3 for="cep">CEP:</h3>
                                <input id="cep" name="endereco_cep" type="text" placeholder="CEP" class="form-control" value="{{ $usuario->cep }}" disabled>
                                <label id="cep_editar" data-toggle="button" class="btn btn-success btn-outline form-control" type="button" aria-pressed="false"><i class="fa-solid fa-pen-to-square"></i> Editar</label>
                            </div>
                            <div class="widget no-padding widget-margin white-bg col-md-4" style="max-width: 32.58% !important">
                                <h3 for="numero">Número:</h3>
                                <input id="numero" name="endereco_numero" type="number" placeholder="Número" class="form-control" value="{{ $usuario->numero }}" disabled>
                                <label id="numero_editar" data-toggle="button" class="btn btn-success btn-outline form-control" type="button" aria-pressed="false"><i class="fa-solid fa-pen-to-square"></i> Editar</label>
                            </div>
                            <div class="widget no-padding widget-margin white-bg col-md-4" style="max-width: 32.58% !important">
                                <h3 for="rua">Rua:</h3>
                                <input id="rua" name="endereco_rua" type="text" placeholder="Rua" class="form-control" value="{{ $usuario->rua }}" disabled>
                                <label id="rua_editar" data-toggle="button" class="btn btn-success btn-outline form-control" type="button" aria-pressed="false"><i class="fa-solid fa-pen-to-square"></i> Editar</label>
                            </div>
                            <div class="widget no-padding widget-margin white-bg col-md-4" style="max-width: 32.58% !important">
                                <h3 for="bairro">Bairro:</h3>
                                <input id="bairro" name="endereco_bairro" type="text" placeholder="Bairro" class="form-control" value="{{ $usuario->bairro }}" disabled>
                                <label id="bairro_editar" data-toggle="button" class="btn btn-success btn-outline form-control" type="button" aria-pressed="false"><i class="fa-solid fa-pen-to-square"></i> Editar</label>
                            </div>
                            <div class="widget no-padding widget-margin white-bg col-md-4" style="max-width: 32.58% !important">
                                <h3 for="cidade">Cidade:</h3>
                                <input id="cidade" name="endereco_cidade" type="text" placeholder="Cidade" class="form-control" value="{{ $usuario->cidade }}" disabled>
                                <label id="cidade_editar" data-toggle="button" class="btn btn-success btn-outline form-control" type="button" aria-pressed="false"><i class="fa-solid fa-pen-to-square"></i> Editar</label>
                            </div>
                            <div class="widget no-padding widget-margin white-bg col-md-4" style="max-width: 32.58% !important">
                                <h3 for="estado">Estado:</h3>
                                <input id="estado" name="endereco_estado" type="text" placeholder="Estado" class="form-control" value="{{ $usuario->estado }}" disabled>
                                <label id="estado_editar" data-toggle="button" class="btn btn-success btn-outline form-control" type="button" aria-pressed="false"><i class="fa-solid fa-pen-to-square"></i> Editar</label>
                            </div>
                            <div class="widget no-padding widget-margin white-bg col-md-3">
                                <h3 for="pais">País:</h3>
                                <input id="pais" name="endereco_pais" type="text" placeholder="País" class="form-control" value="{{ $usuario->pais }}" disabled>
                                <label id="pais_editar" data-toggle="button" class="btn btn-success btn-outline form-control" type="button" aria-pressed="false"><i class="fa-solid fa-pen-to-square"></i> Editar</label>
                            </div>
                        </div>
                        <!-- Contato -->
                        <div class="ibox-content-group widgets-perfil row">
                            <div class="col-md-12">
                            <h2 class="text-center" style="font-weight: bold;">Informações de Contato</h2>
                            <hr style="font-weight: bold;">
                            </div>
                            <div class="widget no-padding widget-margin white-bg col-md-4" style="max-width: 32.58% !important">
                                <h3 for="celular">Celular:</h3>
                                <input id="celular" name="contato_celular" type="text" placeholder="Celular" class="form-control" value="{{ $usuario->celular }}" disabled>
                                <label id="celular_editar" data-toggle="button" class="btn btn-success btn-outline form-control" type="button" aria-pressed="false"><i class="fa-solid fa-pen-to-square"></i> Editar</label>
                            </div>
                            <div class="widget no-padding widget-margin white-bg col-md-4" style="max-width: 32.58% !important">
                                <h3 for="telefone_residencial">Telefone Residencial:</h3>
                                <input id="telefone_residencial" name="contato_telefone_residencial" type="text" placeholder="Telefone Residencial" class="form-control" value="{{ $usuario->telefone_residencial }}" disabled>
                                <label id="telefone_residencial_editar" data-toggle="button" class="btn btn-success btn-outline form-control" type="button" aria-pressed="false"><i class="fa-solid fa-pen-to-square"></i> Editar</label>
                            </div>
                            <div class="widget no-padding widget-margin white-bg col-md-4" style="max-width: 32.58% !important">
                                <h3 for="telefone_empresarial">Telefone Empresarial:</h3>
                                <input id="telefone_empresarial" name="contato_telefone_empresarial" type="text" placeholder="Telefone Empresarial" class="form-control" value="{{ $usuario->telefone_empresarial }}" disabled>
                                <label id="telefone_empresarial_editar" data-toggle="button" class="btn btn-success btn-outline form-control" type="button" aria-pressed="false"><i class="fa-solid fa-pen-to-square"></i> Editar</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer modal-btn blue-bg">
                    <!-- Modal Botões -->
                    <button type="submit" class="btn btn-default btn-outline" title="Atualize suas informações"><i class="fa-solid fa-floppy-disk"></i> Atualizar informações</button>
                    <button type="button" class="btn btn-default btn-outline" title="Cancelar" class="close" data-dismiss="modal"><i class="fa-solid fa-xmark"></i> Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .modal {
        margin-bottom: 65.16px;
    }
    .widget-margin {
        margin: 3px;
        max-width: 49.248%;
    }
    .ibox-content-group {
        background-color: #ffffff;
        color: inherit;
        /* border-color: #e7eaec;
        border-image: none;
        border-style: solid;
        border-width: 1px; */
        clear: both;
        padding: 8px !important;
        padding-bottom: 16px !important;
        border-radius: 5px;
        place-content: center;
    }
    .btn-default:hover, .btn-default:focus, .btn-default.focus {
        color: black;
        background-color: white;
        border-color: white;
    }
</style>

@include('usuario.javascript')