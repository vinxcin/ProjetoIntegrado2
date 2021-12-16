//máscaras
$('.cpf').mask('000.000.000-00');
$('.cep').mask('00000-000');
$('.uf').mask('SS');
$('.tel').mask('(00) 0000-0000');
$('.cel').mask('(00) 00000-0000');

$(document).on('blur', '#cep', function(){
    const cep = $(this).val();

    $.ajax({
        url: 'https://viacep.com.br/ws/' + cep + '/json/',
        method: 'GET',
        dataType: 'json',
        success: function(data){

            if(data.erro) {
                alert('Este endereço não foi encontrado!');
            }
            
            $('#uf').val(data.uf);
            $('#cidade').val(data.localidade);
            $('#rua').val(data.logradouro);
            $('#bairro').val(data.bairro);
        }
    });
});
