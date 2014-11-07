$(document).ready(function($) {

	var $container = $('#the-posts ul'); 
	$container.imagesLoaded( function() {
	  $container.masonry({
		itemSelector: 	'li',
		columnWidth: 		0,
		gutter: 			0
	  });
	});
});