<tr>
    <td>{{ $usuario->id }}</td>
    <td>{{ $usuario->login }}</td>
    <td>{{ $usuario->firstname }} {{ $usuario->lastname }}</td>
    <td>
        @if ($usuario->admin)
        <span class="green">Sim</span> 
        @else
        <span class="red">Não</span>
        @endif
    </td>
    <td>{{ Carbon\Carbon::parse($usuario->created_on)->format('d/m/Y H:i') }}</td>
    <td>
        @if ($usuario->status === 1)
        <span class="green">Sim</span>
        @else
        <span class="red">Não</span>
        @endif
    </td>
    <td class="text-center">
        <button title="Editar Usuário" class="btn btn-info ${user_logado}" onClick="editarUsuario({{ $usuario->id }})"><i class="fa fa-edit fa-fw"></i></button>
        @if ($usuario->status === 1)
        <button title="Bloquear (Inativar)" class="btn btn-warning ${user_logado} ${user_inativo}" onClick="inativarUsuario({{ $usuario->id }})"><i class="fa fa-lock fa-fw"></i></button>
        @else
        <button title="Desbloquear (Ativar)" class="btn btn-primary ${user_logado} ${user_ativo}" onClick="ativarUsuario({{ $usuario->id }})"><i class="fa fa-lock-open fa-fw"></i></button>
        @endif
    </td>
</tr>
