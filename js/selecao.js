function enviardados(teste){

	if(document.teste.nome.value=="")
	{
		alert( "O campo NOME esta em branco!" );
		document.teste.nome.focus();
		return false;
	}

	if( document.forms[0].email.value=="" 
		|| document.forms[0].email.value.indexOf('@')==-1 
		|| document.forms[0].email.value.indexOf('.')==-1 )
	{
		alert( "Por favor, informe um E-MAIL válido!" );
	return false;
	}

	if(document.teste.assunto.value=="")
	{
		alert( "O campo ASSUNTO esta em branco!" );
		document.teste.assunto.focus();
	return false;
	}

	if(document.teste.texto.value=="")
	{
		alert( "campo MENSAGEM esta em branco!" );
		document.teste.texto.focus();
	return false;
	}


	return true;
	}

function limitaTextarea(valor) {
	quantidade = 300;
	total = valor.length;

	if(total <= quantidade) {
		resto = quantidade- total;
		document.getElementById('contador').innerHTML = resto;
	} else {
		document.getElementById('texto').value = valor.substr(0, quantidade);
	}
}