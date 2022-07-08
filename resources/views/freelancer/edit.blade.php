<!-- Modal Perfil -->
<!-- Botão Abrir Modal -->
<div class="text-left">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#divModalFreelancer"><i class="fa-solid fa-pen-to-square"></i> Editar informações</button>
</div>
<!-- Modal -->
<div class="modal inmodal fade" id="divModalFreelancer" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <div class="widget no-padding widget-margin white-bg col-md-12">
                                <h3 for="descricao">Descrição:</h3>
                                <textarea id="descricao" name="usuario_nome" type="text" placeholder="Descrição" class="form-control" value="{{}}" disabled> </textarea>
                                <label id="descricao_editar" data-toggle="button" class="btn btn-success btn-outline form-control" type="button" aria-pressed="false"><i class="fa-solid fa-pen-to-square"></i> Editar</label>
                            </div>
                            {{-- <div class="widget no-padding widget-margin white-bg col-md-12">
                                <h3 for="sobrenome">Sobrenome:</h3>
                                <input id="sobrenome" name="usuario_sobrenome" type="text" placeholder="Sobrenome" class="form-control" value="{{ $usuario->sobrenome }}" disabled>
                                <label id="sobrenome_editar" data-toggle="button" class="btn btn-success btn-outline form-control" type="button" aria-pressed="false"><i class="fa-solid fa-pen-to-square"></i> Editar</label>
                            </div> --}}
                            <div class="widget no-padding widget-margin white-bg col-md-6">
                                <h3 for="email">Habilidades:</h3>
                                <input id="email" name="usuario_email" type="email" placeholder="Habilidades" class="form-control" value="" disabled>
                                <label id="email_editar" data-toggle="button" class="btn btn-success btn-outline form-control" type="button" aria-pressed="false"><i class="fa-solid fa-pen-to-square"></i> Editar</label>
                            </div>
                            {{-- <div class="widget no-padding widget-margin white-bg col-md-6">
                                <h3 for="data_nascimento">Data de Nascimento:</h3>
                                <input id="data_nascimento" name="usuario_data_nascimento" type="date" placeholder="Data de Nascimento" class="form-control" value="{{ $usuario->data_nascimento }}" disabled>
                                <label id="data_nascimento_editar" data-toggle="button" class="btn btn-success btn-outline form-control" type="button" aria-pressed="false"><i class="fa-solid fa-pen-to-square"></i> Editar</label>
                            </div> --}}
                        </div>
                        <!-- Endereço -->
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