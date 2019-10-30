function enviardados(teste){

	if(document.teste.senha.value=="")
	{
		alert( "O campo senha não pode ficar em branco!" );
		document.teste.senha.focus();
		return false;
	}

	if(document.teste.senha.value=="montefeltro")
	{
		alert( "A senha tem que ser diferente da enviado por E-mail!" );
		document.teste.senha.focus();
		return false;
	}

	return true;
	}
				
function mudacor(ref,cor)
{ref.style.backgroundColor=cor;}