<div class="ibox">
    <div class="ibox-title">
        <span class="label label-primary float-right">NOVO!</span>
        <h5>{{ strtoupper($servico->titulo) }}</h5>
    </div>
    <div class="ibox-content">
        <div class="row">
            <div class="col-md-2 text-left">
            <img alt="member" class="rounded-circle" src="/img/carinha.png" style="width: 100px;height: unset;">
            </div>
            <div class="col-md-10">
            <h4>DESCRIÇÃO</h4>
            <p>{{ ucfirst($servico->descricao) }}</p>
            </div>
        </div> 
        <h4>USUÁRIO</h4>
        <p>
        {{ ucfirst($servico->cliente->user->nome) }} {{ ucfirst($servico->cliente->user->sobrenome) }}
        </p>
        <!-- <div>
            <span>Status of current project:</span>
            <div class="stat-percent">48%</div>
            <div class="progress progress-mini">
                <div style="width: 48%;" class="progress-bar"></div>
            </div>
        </div> -->
        <div class="row  m-t-sm">
            <div class="col-sm-4">
                <div class="font-bold">COMPLEXIDADE</div>
                {{ $servico->complexidade }}
            </div>
            <div class="col-sm-4">
                <div class="font-bold">DATA ESTIMADA</div>
                {{ Carbon\Carbon::parse($servico->data_estimada)->format('d/m/Y') }}
            </div>
            <div class="col-sm-4 text-right">
                <div class="font-bold">VALOR</div>
                R${{ $servico->valor_pagamento }}
            </div>
        </div>

    </div>
</div>
<hr>
    