/**
 * JavaScript for the front page of the website.
 */
;(function ($, window, undefined) {
	"use strict";

	// Unslider
	$('.slider').unslider({
		delay: 5000,
		dots: true
	});

	// Google Maps
	function initGoogleMaps() {
		// Interlake High School
		var center = new google.maps.LatLng(47.629266, -122.123456),
			mapOptions = {
				center: center,
				zoom: 8
			},

			map = new google.maps.Map(document.getElementById("js-google-maps-school"),
				mapOptions);
	}

	$(function() {
		initGoogleMaps();
	});
})(jQuery, this);