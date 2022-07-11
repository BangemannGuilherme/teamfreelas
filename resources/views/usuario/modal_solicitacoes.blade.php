<div class="modal inmodal" id="solicitacoes" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated bounceInDown">
            <!-- Modal Header -->
            <div class="modal-header blue-bg">
                <button type="button" title="Fechar" class="close" data-dismiss="modal" data-backdrop=""><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Solicitações pendente</h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <!-- Modal Campos -->
                <div class="col-md-12">
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