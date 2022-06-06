<tr>
    <td>{{ $contrato->id }}</td>
    <td>{{ $contrato->data_inicio }}</td>
    <td>{{ $contrato->data_fim }}</td>
    <td>{{ $contrato->valor_pagamento }}</td>
    <td>{{ Carbon\Carbon::parse($contrato->data_inicio)->format('d/m/Y H:i') }}</td>
    <td>{{ Carbon\Carbon::parse($contrato->data_fim)->format('d/m/Y H:i') }}</td>
    <td>
        @if ($contrato->status)
        <span style="color: green">Sim</span>
        @else
        <span style="color: red">Não</span>
        @endif
    </td>
</tr>