$(document).ready(function(){
	$(function() {
	    function validaCampos(){ 
	     var campos="";
	     var conta = 0;
		 
	     if($('#nome').val()!="" && $('#nome').val()!="Nome*") {			      
	      conta++;
	     }else{
	      campos=campos+"- Nome\n";
	     }
	     			     			     
	     if($('#email').val()!="" && $('#email').val()!="E-mail*") {
	      
	      var filtro_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	      
	      if(filtro_email.test($('#email').val())){       
	       conta++;      
	      }else{
	       campos=campos+"- Email Inválido\n";
	      }
	     }else{
	      campos=campos+"- E-mail\n";
	     }
	     	     
	     if($('#tel').val()!="" && $('#tel').val()!="Telefone") {
	      conta++;
	     }else{
	      campos=campos+"- Telefone\n";
	     }
	 
		 if($('#cidade').val()!="" && $('#cidade').val()!="Cidade") {
	      conta++;
	     }else{
	      campos=campos+"- Cidade\n";
	     } 
		 if($('#mensagem').val()!="" && $('#mensagem').val()!="Mensagem*") {
	      conta++;
	     }else{
	      campos=campos+"- Mensagem\n";
	     } 
	                    
	     if(conta==5){      
	      return true;
	     }else{
	      alert('Preencha os campos:\n'+campos+'');
	      return false;
	     }
	    }
	   $('#enviar').click(function (e){
		 e.preventDefault();   
	    if(validaCampos()){
		// var valor_radio = $("input[@name='favlang']:checked").val();
	     $.post(
	       'wp-content/themes/ronaldo-de-freitas/ajax/ajax_mail.php',  
	       {
	        nome:$('#nome').val(),      
	        email:$('#email').val(),
	        telefone:$('#tel').val(),
	        cidade:$('#cidade').val(),
	        mensagem:$('#mensagem').val(),
	       },
	       function(data) {
	        alert(data);
	        location.reload();
	       }
	     );  
	    }  
	    return false;
	   });
	 });
});