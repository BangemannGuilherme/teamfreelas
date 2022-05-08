<tr>
    <td>{{ $proposta->id }}</td>
    <td>{{ $proposta->data_proposta }}</td>
    <td>{{ $proposta->valor_pagamento }}</td>
    <td>{{ Carbon\Carbon::parse($proposta->data_proposta)->format('d/m/Y H:i') }}</td>
    <td>
        @if ($proposta->status)
        <span style="color: green">Sim</span>
        @else
        <span style="color: red">Não</span>
        @endif
    </td>
</tr>