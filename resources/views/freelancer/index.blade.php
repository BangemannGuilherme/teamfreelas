<div class="ibox">
    <div class="ibox-title">
        <h5> {{ ucfirst($freelancer->user->nome) }} {{ ucfirst($freelancer->user->sobrenome) }} </h5> 
        <span class="label label-primary float-right">NOVO!</span>
    </div>
    <div class="ibox-content">
        <div class="row">
            <div class="col-md-2 text-left">
            <img alt="member" class="rounded-circle" src="/img/carinha.png" style="width: 100px;height: unset;">
            </div>
            <div class="col-md-10">
            <h4>DESCRIÇÃO</h4>
            <p> {{ ucfirst($freelancer->descricao) }} </p> 
            </div>
        </div> 
        <!-- <div>
            <span>Status of current project:</span>
            <div class="stat-percent">48%</div>
            <div class="progress progress-mini">
                <div style="width: 48%;" class="progress-bar"></div>
            </div>
        </div> -->
        <div class="row  m-t-sm">
            <div class="col-sm-4">
                <div class="font-bold">TROFEU</div>
                 {{ $freelancer->trofeu }}
            </div>
            <div class="col-sm-4">
                <div class="font-bold">DATA DE REGISTRO</div>
                 {{ Carbon\Carbon::parse($freelancer->data_registro)->format('d/m/Y') }}
            </div>
            <div class="col-sm-4 text-right">
                <div class="font-bold">LOCALIZAÇÃO</div>
                 {{ $freelancer->localizacao }}
            </div>
        </div>

    </div>
</div>
<hr>