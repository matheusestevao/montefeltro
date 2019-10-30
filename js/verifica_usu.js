function enviardados(teste){

	if(document.teste.usuario.value=="")
	{
		alert( "O Nome do Usuário Esta em branco!" );
		document.teste.usuario.focus();
		return false;
	}

	if( document.forms[0].email.value=="" 
		|| document.forms[0].email.value.indexOf('@')==-1 
		|| document.forms[0].email.value.indexOf('.')==-1 )
	{
		alert( "Por favor, informe um E-MAIL válido!" );
	return false;
	}

	if(document.teste.nivel.value=="")
	{
		alert( "O Campo Nivel esta¡ em branco!" );
		document.teste.nivel.focus();
	return false;
	}

	if(document.teste.login.value=="")
	{
		alert( "Campo login esta¡ em branco!" );
		document.teste.login.focus();
	return false;
	}

	if(document.teste.senha.value=="")
	 {
		alert( "Campo Senha esta em branco!" );
		document.teste.senha.focus();
	return false;
	}

	return true;
	}
				
function mudacor(ref,cor)
{ref.style.backgroundColor=cor;}