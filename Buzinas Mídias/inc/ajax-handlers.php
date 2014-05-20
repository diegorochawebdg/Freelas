<?php
if (!is_singular()){
	add_action('init', 'dry_ajax_init');
	function dry_ajax_init() {
		wp_enqueue_script('dry-ajax-request', get_template_directory_uri() . '/js/ajax.js', array('jquery'));
		wp_localize_script('dry-ajax-request', 'DryAJAX', array('ajaxurl' => admin_url('admin-ajax.php'),'ThemePath' => get_template_directory_uri()));
	}
	
	add_action('wp_ajax_nopriv_contact_action', 'contact_callback');
	add_action('wp_ajax_contact_action', 'contact_callback');
	
	function contact_callback() {
		try {
			$name = $_POST["name"];
			$email = $_POST["email"];
			$message = $_POST["message"];
            $newsletter = $_POST['newsletter'];
            if(isset($_POST['newsletter'])) 
            {
                $news = "Sim";
            }
            else
            {
                $news = "Não";
            } 
			$emailTo = get_option('tz_email');
			if (!isset($emailTo) || ($emailTo == '')) {
				$emailTo = get_option('admin_email');
			}
			$subject = '[Message] From ' . $name;
			$body = "Nome: $name \n\nE-mail: $email \n\nMensagem: $message \n\nNewsletter: $news" ;
			$headers = 'From: ' . $name . ' <' . $emailTo . '>' . "\r\n" . 'Reply-To: ' . $email;
			mail($emailTo, $subject, $body, $headers);
			echo "Mensagem enviada com sucesso!";
		} catch (Exception $e) {
			echo "Houve um erro no envio da mensagem";
		}
		die();
	}
}
?>