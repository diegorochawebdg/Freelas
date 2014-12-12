$(document).ready(function() {

	//Prevent Default
	$('a').click(function(event) {
		if($(this).attr('href') == '#'){
			event.preventDefault();
		}
	});

	$('#contact select').chosen();

	//Float Bar click
	$(document).keyup(function (e) {
        if (e.keyCode == 27) $('.close-contact').trigger('click');
    });
	var offsetY = window.pageYOffset;
	$('#float-bar .float-bar-item1, .header-link-bar a[title="Contact"]').click(function(event) {
		offsetY = window.pageYOffset;
        $('body').css({
            'position': 'fixed',
            'top': -offsetY + 'px',
            'width': '100%'
        });
		$('#contact').addClass('active');
	});
	$('#contact .close-contact').click(function(event) {
		$('body').css({
            'position': 'static'
        });
        $(window).scrollTop(offsetY);
		$('#contact').removeClass('active');
	});
	$('#float-bar .float-bar-item3, .header-link-bar a[title="Subscribe"]').click(function(event) {
		$('#subscribe').addClass('active');
	});
	$('#subscribe .close-contact').click(function(event) {
		$('#subscribe').removeClass('active');
	});

});