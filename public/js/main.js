$(function() {
	var sections = $('section');
	var navigation_links = $('nav a');
	sections.waypoint({
		handler: function(event, direction) {
			var active_section;
			active_section = $(this);
			if (direction === "up") active_section = active_section.prev();
			var active_link = $('nav a[href="#' + active_section.attr("id") + '"]');
			navigation_links.removeClass("selected");
			active_link.addClass("selected");
		},
		offset: '15%'
	});
	navigation_links.click( function(event) {
		$.scrollTo(
			$(this).attr("href"),
			{
				duration: 300,
				offset: { 'left':0, 'top':-0.15*$(window).height() }
			}
			);
	});
});

