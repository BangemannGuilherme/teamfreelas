@extends('layouts.master')

@section('content')
<div class="container" style="margin-top: 4%;">
    <div class="col-md-12">
        <h1>LISTAGEM DE SERVIÇOS DISPONÍVEIS</h1>
        <div class="col-md-4">
            Info Filtro
        </div>
        <div class="col-md-8">
            <div class="widget ibox-content">
                <ul>
                @each('servico.index', $servicos, 'servico')
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    window.onload = function(){
        $('.navbar-default').addClass('navbar-scroll');
    }
</script>