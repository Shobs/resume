$(function() {
	var navigation_links = $('nav a');
	navigation_links.click( function(event) {
		$.scrollTo(
			$(this).attr("href"),
			{
				duration: 1000,
				offset: { 'left':0, 'top':-0.15*$(window).height() }
			}
			);
	});
});

