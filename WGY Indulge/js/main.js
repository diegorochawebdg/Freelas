$(document).ready(function() {

	//Prevent Default
	$('a').click(function(event) {
		if($(this).attr('href') == '#'){
			event.preventDefault();
		}
	});

	$('#contact select').chosen();

	//Float Bar click
	$('#float-bar .float-bar-item1, .header-link-bar a[title="Contact"]').click(function(event) {
		$('#contact').addClass('active');
	});
	$('#contact .close-contact').click(function(event) {
		$('#contact').removeClass('active');
	});
	$('#float-bar .float-bar-item3, .header-link-bar a[title="Subscribe"]').click(function(event) {
		$('#subscribe').addClass('active');
	});
	$('#subscribe .close-contact').click(function(event) {
		$('#subscribe').removeClass('active');
	});

});