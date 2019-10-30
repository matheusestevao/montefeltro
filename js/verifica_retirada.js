function enviardados(teste){

	if(document.teste.ret.value=="")
	{
		alert( "Informar quem retirou a mercadoria!" );
		document.teste.cliente.focus();
		return false;
	}

	if(document.teste.data.value=="")
	{
		alert( "Informar a Data!" );
		document.teste.cliente.focus();
		return false;
	}

	return true;
	}
				
function mudacor(ref,cor)
{ref.style.backgroundColor=cor;}