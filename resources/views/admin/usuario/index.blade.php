@extends('admin.master')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                <h2 class="no-margins">Usuários</h2>
            </div>
            {{-- <div class="pull-right">
                <button class="btn btn-success" id="btNovoItem" onclick="adicionarUsuario()"><i class="fa fa-plus" aria-hidden="true" data-original-title="" title="" tooltip-init="true"></i> Novo Usuário</button>
            </div> --}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive no-padding">
                <div class="dataTables_wrapper no-footer">
                    {{-- <form id="formFiltros" method="GET" class="form-inline col-md-12 text-center">
                        <div style="display:none;">
                            <input type="password">
                        </div><!--Evita que o browser queira salvar campos do tipo senha-->
                        <div class="text-center col-md-offset-2 col-md-6">
                            <label class="col-md-12 control-label">Busca:</label>
                            <input type="text" class="form-control input-busca" name="busca" placeholder="Busca...">
                        </div>
                        <div class="text-left col-md-4 btn-cfg">
                            <button type="submit" class="btn btn-primary btn-lg btn-margin" value="Search">Aplicar</button>
                            <button type="submit" class="btn btn-default btn-lg btn-margin" value="Search" onClick="limpaBusca()">Limpar</button>
                        </div>
                    </form> --}}
                    <table id="user_table" class="table hover table-bordered table-datatable" role="grid">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Usuário</th>
                                <th>Nome</th>
                                <th>Admin</th>
                                <th>Data de Criação</th>
                                <th>Ativo</th>
                            </tr>
                        </thead>
                        <tbody><?dump($usuarios)?>
                            @each('admin.usuario.usuario', $usuarios, 'usuario')
                        </tbody>
                    </table>
                    {{-- @if ($usuarios->lastPage() > 1)
                    <ul class="pagination pull-right">
                        <li class="{{ ($usuarios->currentPage() == 1) ? ' disabled' : '' }}">
                            <a href="{{ $usuarios->url(1) }}">Voltar</a>
                        </li>
                        @for ($i = 1; $i <= $usuarios->lastPage(); $i++)
                            <li class="{{ ($usuarios->currentPage() == $i) ? ' active' : '' }}">
                                <a href="{{ $usuarios->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                        <li class="{{ ($usuarios->currentPage() == $usuarios->lastPage()) ? ' disabled' : '' }}">
                            <a href="{{ $usuarios->url($usuarios->currentPage()+1) }}" >Próximo</a>
                        </li>
                    </ul>
                    @endif --}}
                </div>
            </div>
        </div>
    </div>
    {{-- <form id="novoUsuario" name="novoUsuario" class="m-t-sm" onSubmit="salvarUsuario(); return false;" autocomplete="off">
        <div class="row">
            <div class="col-md-12" id="usuarioItens"></div>
            <div class="col-md-12 text-center" id="divSalvar"> 
                <button class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Salvar Usuário</button>
                <input type="submit" style="display: none;">
            </div>
        </div>
    </form> --}}
</div>

{{-- @include('CS::Usuario.javascript')
@include('CS::Usuario.css') --}}
@endsection