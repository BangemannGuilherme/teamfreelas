<tr>
    <td>{{ $servico->id }}</td>
    <td>{{ $servico->descricao }}</td>
    <td>{{ $servico->complexidade }}</td>
    <td>{{ Carbon\Carbon::parse($servico->data_estimada)->format('d/m/Y') }}</td>
    <td>{{ $servico->valor_pagamento }}</td>
    <td>{{ Carbon\Carbon::parse($servico->created_at)->format('d/m/Y H:i') }}</td>
    <td class="text-center">
        <a title="Editar Serviço/Projeto" class="btn btn-info" href="" ><i class="fa fa-edit fa-fw"></i></a>
        <a title="Excluir Serviço/Projeto" class="btn btn-danger" href="{{ route('servico.destroy',  ['id' => $servico->id]) }}" ><i class="fas fa-trash-alt"></i></a>
    </td>
</tr>