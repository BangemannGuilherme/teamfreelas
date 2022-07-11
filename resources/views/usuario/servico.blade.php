<tr>
    <td class="project-status">
        <span class="label label-primary">Ativo</span>
    </td>
    <td class="project-title">
        <a href="{{ route('servico.show', ['id' => $servico->id]) }}">{{ $servico->titulo }}</a>
        <br/>
        <small>Data Criação: {{ Carbon\Carbon::parse($servico->created_at)->format('d/m/Y') }} <br> Data Estimada: {{ Carbon\Carbon::parse($servico->data_estimada)->format('d/m/Y') }}</small>
    </td>
    {{-- <td class="project-completion">
            <small>Completion with: 48%</small>
            <div class="progress progress-mini">
                <div style="width: 48%;" class="progress-bar"></div>
            </div>
    </td> --}}
    <td class="project-people">
        <button type="button" class="btn btn-warning btn-xs" id="servico_{{ $servico->id }}" onclick="retornaSolicitacoes({{ $servico->id }})">
            Solicitações Pendentes
            <span class="fa-stack">
                <i class="fa-regular fa-bell fa-stack-2x fa-inverse"></i>
                <i class="fa-solid fa-exclamation fa-stack-1x"></i>
            </span>    
        </button>
    </td>
    <td class="project-actions">
        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
    </td>
</tr>

<script>
    function retornaSolicitacoes(id)
    {
        $.ajax({
            url: '{{ route('solicitacao') }}',
            method: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                "servico_id": id
            },
            success: function(data) {
                console.log(data.data);
                let servico_id = 0;
                let freelancer_id = 0;
                let status_id = 0;
                let mensagem = '';

                let table_header = '<table class="table table-sm table-condensed table-hover"><thead><tr><th>Freelancer</th><th>Status</th><th>Mensagem</th></tr></thead><tbody>';
                let table_body = '';

                $.each(data.data, function(i, item) {
                    servico_id = data.data[i].servico_id;
                    freelancer_id = data.data[i].freelancer_id;
                    status_id = data.data[i].status_id;
                    mensagem = data.data[i].mensagem;

                    table_body = '<tr><td>'+freelancer_id+'</td><td>'+status_id+'</td><td>'+mensagem+'</td></tr>'

                });
                
                table = table_header + table_body + '</tbody></table>';

                $('#servico_'+id).parent().parent().after().append(table);
                // $('#myModalSignatureBody').html(data);
                // $('#myModalSignature').modal('show');
            }
        });
    }
</script>

@include('usuario.modal_solicitacoes')