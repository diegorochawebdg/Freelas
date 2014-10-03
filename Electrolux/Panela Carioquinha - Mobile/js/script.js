$(document).ready(function($) {
	$('#foo4').carouFredSel({
		responsive: true,
		prev: '#prev2',
		next: '#next2',
		width: '100%',
		scroll: 1,
		items: {
			width: 100,
			height: '65%',
			visible: {
				min: 1,
				max: 1
			}
		}
	});	
});