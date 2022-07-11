<tr>
    <td>{{ $status->id }}</td>
    <td>{{ $status->nome }}</td>
    <td>{{ $status->cor }}</td>
    <td>{{ Carbon\Carbon::parse($status->updated_at)->format('d/m/Y H:i') }}</td>
    <td>{{ Carbon\Carbon::parse($status->created_at)->format('d/m/Y H:i') }}</td>
    <td class="text-center">
        <a title="Editar Status" class="btn btn-info" href="" ><i class="fa fa-edit fa-fw"></i></a>
        <a title="Excluir Status" class="btn btn-danger" href="{{ route('status.destroy',  ['id' => $status->id]) }}" ><i class="fas fa-trash-alt"></i></a>
    </td>
</tr>