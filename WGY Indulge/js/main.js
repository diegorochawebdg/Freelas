$(document).ready(function() {

	$('#contact select').chosen();

	//Float Bar click
	$('#float-bar .float-bar-item1').click(function(event) {
		$('#contact').addClass('active');
	});
	$('#contact .close-contact').click(function(event) {
		$('#contact').removeClass('active');
	});
	$('#float-bar .float-bar-item3').click(function(event) {
		$('#subscribe').addClass('active');
	});
	$('#subscribe .close-contact').click(function(event) {
		$('#subscribe').removeClass('active');
	});

});