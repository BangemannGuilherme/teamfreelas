<tr>
    <td>{{ $freelancer->id }}</td>
    <td>{{ $freelancer->usuario_id }}</td>
    <td>{{ $freelancer->data_registro }}</td>
    <td>{{ $freelancer->localizacao }}</td>
    <td>{{ $freelancer->descricao }}</td>
    <td>{{ $freelancer->trofeu }}</td>
    <td>{{ Carbon\Carbon::parse($freelancer->created_at)->format('d/m/Y H:i') }}</td>
</tr>