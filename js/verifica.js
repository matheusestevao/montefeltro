function enviardados(teste){

	if(document.teste.cliente.value=="")
	{
		alert( "O Nome do Cliente esta em branco!" );
		document.teste.cliente.focus();
		return false;
	}

	if( document.teste.os.value=="")
	{
		alert( "Campo O.S. esta em branco!" );
		document.teste.os.focus();
		return false;
	}

	if(document.teste.item.value=="")
	{
		alert( "O Campo Item esta em branco!" );
		document.teste.item.focus();
	return false;
	}

	if(document.teste.modelo.value=="")
	{
		alert( "Campo Modelo esta em branco!" );
		document.teste.modelo.focus();
	return false;
	}

	if(document.teste.qnt.value=="")
	 {
		alert( "Campo Quantidade esta em branco!" );
		document.teste.qnt.focus();
	return false;
	}

	return true;
	}
				
function mudacor(ref,cor)
{ref.style.backgroundColor=cor;}