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
		var interlakeLatLng = new google.maps.LatLng(47.629266, -122.123456),
			mapOptions = {
				center: interlakeLatLng,
				zoom: 14
			},

			map = new google.maps.Map(document.getElementById("js-google-maps-school"),
				mapOptions),

			marker = new google.maps.Marker({
				position: interlakeLatLng,
				map: map,
				title: "Interlake High School"
			});
	}

	$(function() {
		initGoogleMaps();
	});
})(jQuery, this);