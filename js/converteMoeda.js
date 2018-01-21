

function numberParaReal(numero){

	 var formatado = "R$ " + numero.toFixed(2).replace(".", ",");
	return formatado
}

function realParaNumber(texto){

	var compativelFloat = texto.replace("R$ ", "");
	compativelFloat = compativelFloat.replace(",", ".");
	var valor = parseFloat(compativelFloat);
	
	return valor;
}