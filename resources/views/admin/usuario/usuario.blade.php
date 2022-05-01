<tr>
    <td>{{ $usuario->id }}</td>
    <td>{{ $usuario->username }}</td>
    <td>{{ $usuario->nome }} {{ $usuario->sobrenome }}</td>
    <td>
        @if ($usuario->admin)
        <span style="color: green">Sim</span> 
        @else
        <span style="color: red">Não</span>
        @endif
    </td>
    {{-- <td>{{ Carbon\Carbon::parse($usuario->created_on)->format('d/m/Y H:i') }}</td> --}}
    <td>
        @if ($usuario->status)
        <span style="color: green">Sim</span>
        @else
        <span style="color: red">Não</span>
        @endif
    </td>
    {{-- <td class="text-center">
        <button title="Editar Usuário" class="btn btn-info ${user_logado}" onClick="editarUsuario({{ $usuario->id }})"><i class="fa fa-edit fa-fw"></i></button>
        @if ($usuario->status === 1)
        <button title="Bloquear (Inativar)" class="btn btn-warning ${user_logado} ${user_inativo}" onClick="inativarUsuario({{ $usuario->id }})"><i class="fa fa-lock fa-fw"></i></button>
        @else
        <button title="Desbloquear (Ativar)" class="btn btn-primary ${user_logado} ${user_ativo}" onClick="ativarUsuario({{ $usuario->id }})"><i class="fa fa-lock-open fa-fw"></i></button>
        @endif
    </td> --}}
</tr>




{{-- <h1>Editar Usuario</h1>
<hr> --}}
{{-- <fieldset>
    <h2>Profile Information</h2>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>First name *</label>
                <input id="name" name="name" type="text" class="form-control required">
            </div>
            <div class="form-group">
                <label>Last name *</label>
                <input id="surname" name="surname" type="text" class="form-control required">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Email *</label>
                <input id="email" name="email" type="text" class="form-control required email">
            </div>
            <div class="form-group">
                <label>Address *</label>
                <input id="address" name="address" type="text" class="form-control">
            </div>
        </div>
    </div>
</fieldset>    
@endsection --}}

{{-- <form method="POST" action="" accept-charset="UTF-8" class="form-horizontal"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden"> --}}

{{-- <div class="form-group ">
    <label for="name" class="col-sm-2 control-label">Nome: </label>
    <div class="col-sm-6">
        <input class="form-control" required="required" name="name" type="text" value="Redmine Admin" id="name">
        
    </div>
</div>

<div class="form-group ">
    <label for="username" class="col-sm-2 control-label">Usuário: </label>
    <div class="col-sm-6">
        <input class="form-control" required="required" name="username" type="text" value="admin" id="username">
        
    </div>
</div>

<div class="form-group ">
    <label for="email" class="col-sm-2 control-label">E-mail: </label>
    <div class="col-sm-6">
        <input class="form-control" required="required" name="email" type="text" value="admin@example.net" id="email">
        
    </div>
</div>

<div class="form-group ">
    <label for="password" class="col-sm-2 control-label">Senha: </label>
    <div class="col-sm-6">
        <input class="form-control" name="password" type="password" value="" id="password">
        
    </div>
</div>

<div class="form-group ">
    <label for="admin" class="col-sm-2 control-label">Admin: </label>
    <div class="col-sm-10">
        <input checked="checked" name="admin" type="checkbox" value="t" id="admin">
        
    </div>
</div>

<div class="form-group ">
    <label for="ativo" class="col-sm-2 control-label">Ativo: </label>
    <div class="col-sm-10">
        <input checked="checked" name="ativo" type="checkbox" value="t" id="ativo">
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-3 col-sm-2">
        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Salvar">
    </div>
</div> --}}
{{-- </form> --}}