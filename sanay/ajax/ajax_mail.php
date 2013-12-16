<?php
	header("Content-Type: text/html; charset=ISO-8859-1",true);
	
	require_once("../phpmailer/class.phpmailer.php");

	$nome  = utf8_decode($_POST['nome']);
	$email  = utf8_decode($_POST['email']);
	$tel = utf8_decode($_POST[ 'tel']);
	$cel = utf8_decode($_POST[ 'cel']);
	$mensagem = utf8_decode($_POST['msg']);
	$email_destino = '';
	if($_POST['departamento']=='Financeiro'){
	 	$email_destino = 'sanay@sanay.com.br';
	} else{
		$email_destino = 'sanay@sanay.com.br';
	}						

	// Inicia a classe PHPMailer
	$mail = new PHPMailer();
	// Define os dados do servidor e tipo de conex„o

	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

	$mail->IsHTML(true);
	$mail->IsSMTP(); // Define que a mensagem ser· SMTP
	$mail->Host = "srv68.prodns.com.br"; // EndereÁo do servidor SMTP
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";
	$mail->SMTPAuth = true; // Usa autenticaÁ„o SMTP? (opcional)
	$mail->Username = 'sanaycom'; // Usu·rio do servidor SMTP
	$mail->Password = '18P@(C^P4sW_'; // Senha do servidor SMTP
	
	
	// Define o remetente
	
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	
	$mail->From = "sanay@sanay.com.br"; // Seu e-mail
	$mail->FromName = utf8_decode("Sanay - Desenvolvimento Imobili·rio"); // Seu nome
	 
	
	// Define os destinat·rio(s)
	
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	
	
	$mail->AddAddress($email_destino, ' Sanay');
	//$mail->AddAddress( 'operacional@mattar.com.br', 'Operacional - Mattar');
	//$mail->AddAddress($email, $nome);
	
	//$mail->AddAddress('ciclano@site.net');
	
	//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
	
	//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // CÛpia Oculta
	
	// Define os dados tÈcnicos da Mensagem
	
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	
	$mail->IsHTML(true); // Define que o e-mail ser· enviado como HTML
	
	$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
	
	// Define a mensagem (Texto e Assunto)
	
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	
	$mail->Subject  = "Fale conosco - Sanay Desenvolvimento Imobili·rio"; // Assunto da mensagem
	
	$mail->Body = "Contato atravÈs do site www.sanay.com.br: <br />";
	
	$mail->Body .= "Nome: ".$nome."<br>";
	$mail->Body .= "E-mail: ".$email."<br>";
	$mail->Body .= "Telefone: ".$tel."<br>";
	$mail->Body .= "Celular: ".$cel."<br>";
	$mail->Body .= "Mensagem: ".$mensagem."<br><br><br>";
	$mail->Body .= "<img src='http://www.sanay.com.br/wp-content/themes/sanay/images/sanay-logo.png' alt='Sanay - Desenvolvimento Imobili·rio' /><br><br><br>";
	
	//$mail->AltBody = "Este È o corpo da mensagem de teste, em Texto Plano! \r\n <img src='http://blog.thiagobelem.net/wp-includes/images/smilies/icon_smile.gif' alt=':)' class='wp-smiley'>";
	 
	
	// Define os anexos (opcional)
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	
	//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
	
	 
	
	// Envia o e-mail
	
	$mail->IsHTML(true);
	$mail->IsSMTP(); // Define que a mensagem ser· SMTP
	$mail->Host = "srv68.prodns.com.br"; // EndereÁo do servidor SMTP
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";
	$mail->SMTPAuth = true; // Usa autenticaÁ„o SMTP? (opcional)
	$mail->Username = 'sanaycom'; // Usu·rio do servidor SMTP
	$mail->Password = '18P@(C^P4sW_'; // Senha do servidor SMTP
?>				