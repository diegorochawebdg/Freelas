$(document).ready(function(){
	$(function() {
	    function validaCampos(){ 
	     var campos="";
	     var conta = 0;
		 
	     if($('#txt_nome').val()!="") {			      
	      conta++;
	     }else{
	      campos=campos+"- Nome\n";
	     }
	     			     			     
	     if($('#txt_email').val()!="") {
	      
	      var filtro_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	      
	      if(filtro_email.test($('#txt_email').val())){       
	       conta++;      
	      }else{
	       campos=campos+"- Email Inválido\n";
	      }
	     }else{
	      campos=campos+"- E-mail\n";
	     }
	     
		 if($('#txt_msg').val()!="") {
	      conta++;
	     }else{
	      campos=campos+"- Mensagem\n";
	     } 
	                    
	     if(conta==3){      
	      return true;
	     }else{
	      alert('Preencha os campos:\n'+campos+'');
	      return false;
	     }
	    }
		 $('#enviar').click(function (){
	    if(validaCampos()){
	     $.post(
	       'http://www.brainstorm-arte.com/form.php',  
	       {
	        nome:$('#txt_nome').val(),      
	        email:$('#txt_email').val(),
	        msg:$('#txt_msg').val(),
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