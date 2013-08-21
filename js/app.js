/**
 * The actual custom JavaScript for the website,
 * v1.0.
 */
;(function ($, window, undefined) {
	"use strict";

	// Foundation
	var $doc = $(document),
	    Modernizr = window.Modernizr;

	$(function () {
		$.fn.foundationAlerts           ? $doc.foundationAlerts() : null;
		$.fn.foundationButtons          ? $doc.foundationButtons() : null;
		$.fn.foundationAccordion        ? $doc.foundationAccordion() : null;
		$.fn.foundationNavigation       ? $doc.foundationNavigation() : null;
		$.fn.foundationTopBar           ? $doc.foundationTopBar() : null;
		$.fn.foundationCustomForms      ? $doc.foundationCustomForms() : null;
		$.fn.foundationMediaQueryViewer ? $doc.foundationMediaQueryViewer() : null;
		$.fn.foundationTabs             ? $doc.foundationTabs({callback : $.foundation.customForms.appendCustomMarkup}) : null;
		$.fn.foundationTooltips         ? $doc.foundationTooltips() : null;
		$.fn.foundationMagellan         ? $doc.foundationMagellan() : null;
		$.fn.foundationClearing         ? $doc.foundationClearing() : null;

		$.fn.placeholder                ? $("input, textarea").placeholder() : null;
	});

	// UNCOMMENT THE LINE YOU WANT BELOW IF YOU WANT IE8 SUPPORT AND ARE USING .block-grids
	// $('.block-grid.two-up>li:nth-child(2n+1)').css({clear: 'both'});
	// $('.block-grid.three-up>li:nth-child(3n+1)').css({clear: 'both'});
	// $('.block-grid.four-up>li:nth-child(4n+1)').css({clear: 'both'});
	// $('.block-grid.five-up>li:nth-child(5n+1)').css({clear: 'both'});

	// Hide address bar on mobile devices (except if #hash present, so we don't mess up deep linking).
	if (Modernizr.touch && !window.location.hash) {
		$(window).load(function () {
			setTimeout(function () {
				window.scrollTo(0, 1);
			}, 0);
		});
	}

	// Nivo Slider
	$(window).load(function () {
		$(".js-nivo-slider").nivoSlider({
			pauseTime: 4000
		});
	});

	// Fade in/out animation for menu bar
	$("#access").find(".menu li a")
		.mouseenter(function (event) {
			$(this).data("hover", setTimeout(function () {
				$(this).animate({
					backgroundColor: "rgba(16, 87, 165, 0.85)"
				}, {
					duration: 200,
					easing: "swing"
				});
			}, 50));
		})
		.mouseleave(function (event) {
			clearTimeout($(this).data("hover"));

			$(this).animate({
				backgroundColor: "transparent"
			}, {
				duration: 200,
				easing: "swing"
			});
		});
})(jQuery, this);