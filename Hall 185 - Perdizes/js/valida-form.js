///////////[ VALIDA FORM ]////////////
	function valida_campos(){
		
		
	if(document.getElementById("nome").value == '' || document.getElementById("nome").value == 'NOME:'){
		alert("Campo ( Nome ) é obrigatório!!");
		document.getElementById("nome").focus();
		return false;
	}

	if(document.getElementById("email").value == ''){
		alert("Campo ( E-MAIL ) é obrigatório!!");
		document.getElementById("email").focus();			
		return false;
	}else{
	
		if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById("email").value))){ 
			alert("Favor informar um E-MAIL válido.");
			document.getElementById("email").focus();
			var erro = "sim";				
			return false;
	}
	
	}
}
	