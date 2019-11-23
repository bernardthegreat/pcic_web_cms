
/**
 * owlCarousel
 */
$('.carousel__element').each(function() {
	var self = $(this),
		optData = eval('(' + self.attr('data-options') + ')'),
		optDefault = {
			items: 1,
			nav: true,
			dot: true,
			loop: true
		},
		options = $.extend(optDefault, optData);

self.owlCarousel(options);
});


