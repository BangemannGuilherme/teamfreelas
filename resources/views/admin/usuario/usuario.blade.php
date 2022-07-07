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
    <td>{{ Carbon\Carbon::parse($usuario->created_at)->format('d/m/Y H:i') }}</td>
    <td>
        @if ($usuario->status)
        <span style="color: green">Sim</span>
        @else
        <span style="color: red">Não</span>
        @endif
    </td>
    <td class="text-center">
        <a title="Editar Usuário" class="btn btn-info" href="{{ url('admin/users/edit/' . $usuario->id) }}" ><i class="fa fa-edit fa-fw"></i></a>
        @if ($usuario->status === 1)
        <button title="Bloquear (Inativar)" class="btn btn-warning ${user_logado} ${user_inativo}" onClick="inativarUsuario({{ $usuario->id }})"><i class="fa fa-lock fa-fw"></i></button>
        @else
        <button title="Desbloquear (Ativar)" class="btn btn-primary ${user_logado} ${user_ativo}" onClick="ativarUsuario({{ $usuario->id }})"><i class="fa fa-lock-open fa-fw"></i></button>
        @endif
        @if ($usuario->username == 'admin')
        <a title="Excluir Usuário" class="btn btn-danger disabled" href=""><i class="fas fa-trash-alt"></i></a>
        @else
        <a title="Excluir Usuário" class="btn btn-danger" href="{{ route('usuario.destroy',  ['id' => $usuario->id]) }}"><i class="fas fa-trash-alt"></i></a>
        @endif
    </td>
</tr>

<style>
    a.disabled {
        pointer-events: none;
        cursor: default;
    }
</style>