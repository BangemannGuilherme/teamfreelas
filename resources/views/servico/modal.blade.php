<div class="modal inmodal" id="enviarSolicitacao" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated bounceInDown">
            <!-- Modal Header -->
            <div class="modal-header blue-bg">
                <button type="button" title="Fechar" class="close" data-dismiss="modal" data-backdrop=""><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Enviar solicitação de proposta</h4>
            </div>
            <!-- Modal Body -->
            <form class="m-t" role="form" method="POST" action="{{ route('solicitacao.store') }}" style="margin-bottom: 0 !important;">
                @csrf
                <div class="modal-body">
                    <!-- Modal Campos -->
                    <div class="form-group">
                        <p><strong>Atenção para os requisitos do projeto.</strong><br>Verifique as condições e as habilidades essenciais para a conclusão do projeto.
                            Isso evitará problemas futuros. O objetivo é entregar o projeto ao cliente o mais breve possível dentro do prazo estimado.<br><br>Envie uma
                            mensagem ao cliente e aguarde a sua solicitação ser respondida. Você poderá acompanhar a sua solicitação
                            no seu perfil. Todas as informações necessárias para o início do projeto estão na página inicial do projeto. Dúvidas futuras só serão respondidas
                            após o cliente aceitar a sua solicitação.
                        </p>
                        <label for="mensagem">Mensagem</label>
                        <textarea type="text" class="form-control" name="mensagem" placeholder="Mensagem"></textarea>
                        <input type="hidden" name="servico_id" value="{{ $servico->id }}">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    </div>
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer modal-btn blue-bg">
                    <!-- Modal Botões -->
                    <button type="submit" class="btn btn-default btn-outline" title="Enviar solicitação de proposta ao cliente"><i class="fa-solid fa-check-double"></i> Enviar solicitação</button>
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
    .btn-default:hover, .btn-default:focus, .btn-default.focus {
        color: black;
        background-color: white;
        border-color: white;
    }
</style>