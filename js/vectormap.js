'use strict';

//Interactive map
$(function () {
	var oils = [
		//ХМАО
		{name: 'Шапшинское месторождение', coords: [60.75, 70.25], status: 'oil'},
		{name: 'Приразломное месторождение', coords: [69.333333, 57.25], status: 'oil'},
		{name: 'Салымское месторождение', coords: [60, 71], status: 'oil'},
		{name: 'Приобское месторождение', coords: [61.166667, 70.166667], status: 'oil'},
		{name: 'Губкинское месторождение', coords: [64.750000, 76.666667], status: 'oil'},
		{name: 'Муравленковское месторождение', coords: [64.083333, 74.75], status: 'oil'},
		{name: 'Самотлорское месторождение', coords: [61.166667, 76.633333], status: 'oil'},
		{name: 'Вынгапуровское месторождение', coords: [63.000000, 76.666667], status: 'oil'},
		{name: 'Малобалыкское месторождение', coords: [0.500000, 72.166667], status: 'oil'},
		{name: 'Киняминское месторождение', coords: [60.500000, 74.250000], status: 'oil'},
		{name: 'Нивагальское месторождение', coords: [62.500000, 75.333333], status: 'oil'},
		{name: 'Покачевское месторождение', coords: [61.733333, 75.300000], status: 'oil'}
		//ЯНАО
	];

	var markersSpot = oils.map(function (h) {
		return {name: h.name, latLng: h.coords}
	});

	var seriesVar = {
		markers: [{
			attribute: 'image',
			scale: {
				oil: './img/oil.png'
			},
			values: oils.reduce(function (p, c, i) {
				p[i] = c.status;
				return p
			}, {})
		}],
		regions: [{
			scale: {
				darkblue: '#2a5980'
			},
			attribute: 'fill',
			values: {
				"RU-SA": 'darkblue',
				"RU-KYA": 'darkblue',
				"RU-TYU": 'darkblue',
				"RU-KHM": 'darkblue',
				"RU-YAN": 'darkblue',
				"RU-SVE": 'darkblue',
				"RU-CHU": 'darkblue',
				"RU-KHA": 'darkblue',
				"RU-AMU": 'darkblue',
				"RU-YEV": 'darkblue',
				"RU-KAM": 'darkblue',
				"RU-MAG": 'darkblue',
				"RU-PRI": 'darkblue',
				"RU-SAK": 'darkblue',
				"RU-TOM": 'darkblue',
				"RU-IRK": 'darkblue'
			}
		}]
	};



	//Map on main page
	$('.map__block--main').vectorMap({
		map: 'ru_mill',
		backgroundColor: 'transparent',
		regionsSelectableOne: !0,
		onRegionClick: function (event, code) {
			window.location.href = "regions.html#" + code

		},
		onMarkerClick: function (event, code) {
			window.location.href = "regions.html#field-" + code
		},
		markers: markersSpot,
		series: seriesVar
	});

	//Map on regions page
	$('.map__block--regions').vectorMap({
		onRegionClick: function (event, code) {
			$('body').animate({
				scrollTop: $('#' + code).offset().top
			}, 500)
		},
		onMarkerClick: function (event, code) {
			$('body').animate({
				scrollTop: $('#' + 'field-' + code).offset().top
			}, 500)
		},
		markers: markersSpot,
		series: seriesVar
	});
});
