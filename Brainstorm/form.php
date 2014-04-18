<?php
/*
* Configurações do formulário de Contato
* Altere a variavel $mail_destino para o seu email
* 
*/

if($_SERVER["REQUEST_METHOD"] == "POST") { 
	
	$nome         = $_POST['nome'];
	$email        = $_POST['email'];
	$msg 	  = $_POST['msg'];
	$remetente    = $_POST['email'];
	$assunto = "Contato através do site brainstorm-arte.com";
	
	//Seu email, para onde irao as informações do formulário
	$mail_destino		=  "cesare@brainstorm-arte.com";
	//Mensagem de cabeçalho do email
	$mail_header		= "Novo contato pelo site <b>brainstorm-arte.com</b><br />
						   <b>Nome:</b> $nome<br />
						   <b>E-mail:</b> $email<br />
						   <b>Mensagem:</b> $msg";

					
	if (  mail("$mail_destino","$assunto","$mail_header","From: $remetente\nContent-type: text/html\n"))
		{
		//Imprimindo confirmação de envio
		$header = "Content-Type: text/html; charset=us-ascii";
		//Enviando mensagem de confirmação para o email do internauta
		echo "E-mail enviado com sucesso! Em breve entraremos em contato.";
		
		}	
}		

?>