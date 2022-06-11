<script>
    //// USUARIO
    //Nome
    $('#nome_editar').on('click', function(event) {
        permiteEditarNome($('#nome_editar').attr('aria-pressed'));
    });

    function permiteEditarNome(valor) 
    {
        if ( valor === 'false' )
        {
            $('#nome').attr('required', true);
            $('#nome').attr('disabled', false);
        }
        else
        {
            $('#nome').attr('required', false);
            $('#nome').attr('disabled', true);
        }
    }
    //Sobrenome
    $('#sobrenome_editar').on('click', function(event) {
        permiteEditarSobrenome($('#sobrenome_editar').attr('aria-pressed'));
    });

    function permiteEditarSobrenome(valor) 
    {
        if ( valor === 'false' )
        {
            $('#sobrenome').attr('required', true);
            $('#sobrenome').attr('disabled', false);
        }
        else
        {
            $('#sobrenome').attr('required', false);
            $('#sobrenome').attr('disabled', true);
        }
    }
    //Email
    $('#email_editar').on('click', function(event) {
        permiteEditarEmail($('#email_editar').attr('aria-pressed'));
    });

    function permiteEditarEmail(valor) 
    {
        if ( valor === 'false' )
        {
            $('#email').attr('required', true);
            $('#email').attr('disabled', false);
        }
        else
        {
            $('#email').attr('required', false);
            $('#email').attr('disabled', true);
        }
    }
    //Data de Nascimento
    $('#data_nascimento_editar').on('click', function(event) {
        permiteEditarDataNascimento($('#data_nascimento_editar').attr('aria-pressed'));
    });

    function permiteEditarDataNascimento(valor) 
    {
        if ( valor === 'false' )
        {
            $('#data_nascimento').attr('required', true);
            $('#data_nascimento').attr('disabled', false);
        }
        else
        {
            $('#data_nascimento').attr('required', false);
            $('#data_nascimento').attr('disabled', true);
        }
    }


    //// ENDEREÇO
    //CEP
    $('#cep_editar').on('click', function(event) {
        permiteEditarCEP($('#cep_editar').attr('aria-pressed'));
    });

    function permiteEditarCEP(valor) 
    {
        if ( valor === 'false' )
        {
            $('#cep').attr('required', true);
            $('#cep').attr('disabled', false);
        }
        else
        {
            $('#cep').attr('required', false);
            $('#cep').attr('disabled', true);
        }
    }
    //Número
    $('#numero_editar').on('click', function(event) {
        permiteEditarNumero($('#numero_editar').attr('aria-pressed'));
    });

    function permiteEditarNumero(valor) 
    {
        if ( valor === 'false' )
        {
            $('#numero').attr('required', true);
            $('#numero').attr('disabled', false);
        }
        else
        {
            $('#numero').attr('required', false);
            $('#numero').attr('disabled', true);
        }
    }
    //Rua
    $('#rua_editar').on('click', function(event) {
        permiteEditarRua($('#rua_editar').attr('aria-pressed'));
    });

    function permiteEditarRua(valor) 
    {
        if ( valor === 'false' )
        {
            $('#rua').attr('required', true);
            $('#rua').attr('disabled', false);
        }
        else
        {
            $('#rua').attr('required', false);
            $('#rua').attr('disabled', true);
        }
    }
    //Bairro
    $('#bairro_editar').on('click', function(event) {
        permiteEditarBairro($('#bairro_editar').attr('aria-pressed'));
    });

    function permiteEditarBairro(valor) 
    {
        if ( valor === 'false' )
        {
            $('#bairro').attr('required', true);
            $('#bairro').attr('disabled', false);
        }
        else
        {
            $('#bairro').attr('required', false);
            $('#bairro').attr('disabled', true);
        }
    }
    //Cidade
    $('#cidade_editar').on('click', function(event) {
        permiteEditarCidade($('#cidade_editar').attr('aria-pressed'));
    });

    function permiteEditarCidade(valor) 
    {
        if ( valor === 'false' )
        {
            $('#cidade').attr('required', true);
            $('#cidade').attr('disabled', false);
        }
        else
        {
            $('#cidade').attr('required', false);
            $('#cidade').attr('disabled', true);
        }
    }
    //Estado
    $('#estado_editar').on('click', function(event) {
        permiteEditarEstado($('#estado_editar').attr('aria-pressed'));
    });

    function permiteEditarEstado(valor) 
    {
        if ( valor === 'false' )
        {
            $('#estado').attr('required', true);
            $('#estado').attr('disabled', false);
        }
        else
        {
            $('#estado').attr('required', false);
            $('#estado').attr('disabled', true);
        }
    }
    //País
    $('#pais_editar').on('click', function(event) {
        permiteEditarPais($('#pais_editar').attr('aria-pressed'));
    });

    function permiteEditarPais(valor) 
    {
        if ( valor === 'false' )
        {
            $('#pais').attr('required', true);
            $('#pais').attr('disabled', false);
        }
        else
        {
            $('#pais').attr('required', false);
            $('#pais').attr('disabled', true);
        }
    }


    //// CONTATO
    //Celular
    $('#celular_editar').on('click', function(event) {
        permiteEditarCelular($('#celular_editar').attr('aria-pressed'));
    });

    function permiteEditarCelular(valor) 
    {
        if ( valor === 'false' )
        {
            $('#celular').attr('required', true);
            $('#celular').attr('disabled', false);
        }
        else
        {
            $('#celular').attr('required', false);
            $('#celular').attr('disabled', true);
        }
    }
    //Telefone Residencial
    $('#telefone_residencial_editar').on('click', function(event) {
        permiteEditarTelefoneResidencial($('#telefone_residencial_editar').attr('aria-pressed'));
    });

    function permiteEditarTelefoneResidencial(valor) 
    {
        if ( valor === 'false' )
        {
            $('#telefone_residencial').attr('required', true);
            $('#telefone_residencial').attr('disabled', false);
        }
        else
        {
            $('#telefone_residencial').attr('required', false);
            $('#telefone_residencial').attr('disabled', true);
        }
    }
    //Telefone Empresarial
    $('#telefone_empresarial_editar').on('click', function(event) {
        permiteEditarTelefoneEmpresarial($('#telefone_empresarial_editar').attr('aria-pressed'));
    });

    function permiteEditarTelefoneEmpresarial(valor) 
    {
        if ( valor === 'false' )
        {
            $('#telefone_empresarial').attr('required', true);
            $('#telefone_empresarial').attr('disabled', false);
        }
        else
        {
            $('#telefone_empresarial').attr('required', false);
            $('#telefone_empresarial').attr('disabled', true);
        }
    }

</script>