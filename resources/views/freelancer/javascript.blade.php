<script>
    //// USUARIO
    //Nome
    $('#descricao_editar').on('click', function(event) {
        permiteEditarDescricao($('#descricao_editar').attr('aria-pressed'));
    });

    function permiteEditarDescricao(valor) 
    {
        if ( valor === 'false' )
        {
            $('#descricao').attr('required', true);
            $('#descricao').attr('disabled', false);
        }
        else
        {
            $('#descricao').attr('required', false);
            $('#descricao').attr('disabled', true);
        }
    }
</script>