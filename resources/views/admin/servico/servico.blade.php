<tr>
    <td>{{ $servico->id }}</td>
    <td>{{ $servico->descricao }}</td>
    <td>{{ $servico->complexidade }}</td>
    <td>{{ $servico->data_estimada }}</td>
    <td>{{ $servico->valor_pagamento }}</td>
    <td>{{ Carbon\Carbon::parse($servico->data_estimada)->format('d/m/Y H:i') }}</td>
    <td>
        @if ($servico->status)
        <span style="color: green">Sim</span>
        @else
        <span style="color: red">Não</span>
        @endif
    </td>
</tr>