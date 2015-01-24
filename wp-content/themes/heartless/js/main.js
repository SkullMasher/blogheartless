jQuery(document).ready(function($) {
	$('.avatar').hover(function() {
		$(this).css('border-color', '#fff');
	}, function() {
		$(this).css('border-color', '#BA3232');
	});
});