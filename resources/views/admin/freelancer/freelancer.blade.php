<tr>
    <td>{{ $freelancer->id }}</td>
    <td>{{ $freelancer->user_id }}</td>
    <td>{{ $freelancer->data_registro }}</td>
    <td>{{ $freelancer->localizacao }}</td>
    <td>{{ $freelancer->descricao }}</td>
    <td>{{ $freelancer->trofeu }}</td>
    <td>{{ Carbon\Carbon::parse($freelancer->created_at)->format('d/m/Y H:i') }}</td>
    <td class="text-center">
        <a title="Editar Freelancer" class="btn btn-info ${user_logado}" href="{{ url('admin/freelancers/' . $freelancer->id . '/editfreelancer') }}" ><i class="fa fa-edit fa-fw"></i></a>
    </td>
</tr>