var SendMail = function(){
    var isValid = true;
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if(!emailReg.test(jQuery('div.contact-form #contact-email').val())){
        isValid = false;
        jQuery('#sending-message-status').text('O e-mail informado não é válido');
    }
    if(isValid){
		jQuery('#sending-message-status').text("Enviando...");
        var params = {
            'action'    : 'contact_action',
            'name'      : jQuery('div.contact-form #name').val(),
            'email'     : jQuery('div.contact-form #contact-email').val(),
            'message'   : jQuery('div.contact-form #message').val()
        };
        
        jQuery.post(DryAJAX.ajaxurl, params, function(response) {	        
			jQuery('#sending-message-status').text(response);
            jQuery('#send-message').removeAttr('disabled');  
			resetInput();	
			displayHints();			
        });  
    }
};