/**
 * The actual custom JavaScript for the website.
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

	// Unslider
	$('.slider').unslider({
		delay: 5000,
		dots: true
	});

	// Fade in/out animation for menu bar
	$("#access").find(".menu").find("li a")
		.on("mouseenter", function(event) {
			var that = this,
				timeoutID = setTimeout(function() {
					$(that).animate({
						backgroundColor: "rgba(16, 87, 165, 0.85)"
					}, {
						duration: 200,
						easing: "swing"
					});
				}, 50);

			$(this).data("hover", timeoutID);
		})
		.on("mouseleave", function(event) {
			var timeoutID = $(this).data("hover");
			clearTimeout(timeoutID);

			$(this).animate({
				backgroundColor: "transparent"
			}, {
				duration: 200,
				easing: "swing"
			});
		});
})(jQuery, this);

// Google Analytics
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-20132041-1']);
_gaq.push(['_setDomainName', 'saintsrobotics.com']);
_gaq.push(['_trackPageview']);

(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();