$(document).ready(function(){
	$('.cpfOuCnpj').length > 11 ? $('.cpfOuCnpj').mask('00.000.000/0000-00', options) : $('.cpfOuCnpj').mask('000.000.000-00#', options);
	$('.date').mask('00/00/0000');
	$('.date_time').mask('00/00/0000 00:00:00');
	$('.cep').mask('00000-000');
	$('.telefone').mask('(##) 0000-0000', {reverse: false});
	$('.celular').mask("(##) #0000-0000", {reverse: false});
	$('.cpf').mask('000.000.000-00', {reverse: true});
	$('.rg').mask('99.999.999-9');
	$('.cnpj').mask('00.000.000/0000-00', {reverse: true});
});
var options = {
    onKeyPress: function (cpf, ev, el, op) {
        var masks = ['000.000.000-000', '00.000.000/0000-00'];
        $('.cpfOuCnpj').mask((cpf.length > 14) ? masks[1] : masks[0], op);
    }
}


