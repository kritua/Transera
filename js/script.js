$(document).ready(function () {
	//Mobile menu
	$(".header__menu").addClass("header__menu--hidden");
	$(".header").removeClass("header--menu-opened");
	$(".header__button-burger").removeClass("header__button--hidden").on("click", function () {
		$(this).addClass("header__button--hidden");
		$(".header__button-close").removeClass("header__button--hidden");
		$(".header").addClass("header--menu-opened");
		$(".header__menu").removeClass("header__menu--hidden");
	});

	$(".header__button-close").addClass("header__button--hidden").on("click", function () {
		$(this).addClass("header__button--hidden");
		$(".header__button-burger").removeClass("header__button--hidden");
		$(".header").removeClass("header--menu-opened");
		$(".header__menu").addClass("header__menu--hidden");
	});


	//Header slideshow
	$(".header--index").vegas({
		delay: 10000,
		transition: 'fade',
		transitionDuration: '1000',
		timer: false,
		overlay: true,
		slides: [
			{src: "./img/bg-full-1.jpg"},
			{src: "./img/bg-full-2.jpg"},
			{src: "./img/bg-full-3.jpg"},
			{src: "./img/bg-full-4.jpg"}
		]
	});
	$("#header-previous").on('click', function () {
		$(".header--index").vegas('previous');
	});
	$("#header-next").on('click', function () {
		$(".header--index").vegas('next');
	});


	//Facts slideshow
	$(".about-us__item--image").vegas({
		delay: 5000,
		transition: 'fade',
		transitionDuration: '1000',
		timer: false,
		slides: [
			{src: "./img/work/slide-1.jpg"},
			{src: "./img/work/slide-2.jpg"},
			{src: "./img/work/slide-3.jpg"},
			{src: "./img/work/slide-4.jpg"},
			{src: "./img/work/slide-5.jpg"},
			{src: "./img/work/slide-6.jpg"},
			{src: "./img/work/slide-7.jpg"},
			{src: "./img/work/slide-8.jpg"},
			{src: "./img/work/slide-9.jpg"},
			{src: "./img/work/slide-10.jpg"},
			{src: "./img/work/slide-11.jpg"},
			{src: "./img/work/slide-12.jpg"},
			{src: "./img/work/slide-13.jpg"},
			{src: "./img/work/slide-14.jpg"},
			{src: "./img/work/slide-15.jpg"},
			{src: "./img/work/slide-16.jpg"},
			{src: "./img/work/slide-17.jpg"},
			{src: "./img/work/slide-18.jpg"},
			{src: "./img/work/slide-19.jpg"},
			{src: "./img/work/slide-20.jpg"}
		]
	});
	$("#about-us-previous").on('click', function () {
		$(".about-us__item--image").vegas('previous');
	});
	$("#about-us-next").on('click', function () {
		$(".about-us__item--image").vegas('next');
	});

	$(".specialist__item--image").vegas({
		delay: 5000,
		transition: 'fade2',
		transitionDuration: '1000',
		timer: false,
		shuffle: true,
		slides: [
			{src: "./img/trawl/slide-1.jpg"},
			{src: "./img/trawl/slide-2.jpg"},
			{src: "./img/trawl/slide-3.jpg"},
			{src: "./img/trawl/slide-4.jpg"},
			{src: "./img/trawl/slide-5.jpg"},
			{src: "./img/trawl/slide-6.jpg"},
			{src: "./img/trawl/slide-7.jpg"},
			{src: "./img/trawl/slide-8.jpg"}
		]
	});
	$("#specialist-previous").on('click', function () {
		$(".specialist__item--image").vegas('previous');
	});
	$("#specialist-next").on('click', function () {
		$(".specialist__item--image").vegas('next');
	});


	//Extends jquery lib to add on scroll events
	$.fn.extend({
		// watching for element's appearance in browser viewport
		appear: function (options) {
			var opts = $.extend({}, defaults, options || {});
			var selector = this.selector || this;
			if (!check_binded) {
				var on_check = function () {
					if (check_lock) {
						return;
					}
					check_lock = true;

					setTimeout(process, opts.interval);
				};

				$(window).scroll(on_check).resize(on_check);
				check_binded = true;
			}

			if (opts.force_process) {
				setTimeout(process, opts.interval);
			}
			add_selector(selector);
			return $(selector);
		}
	});
	$.fn.extend({
		// watching for element's appearance in browser viewport
		appear: function (options) {
			var check_binded = false;
			var selectors = [];
			var check_lock = false;
			var $prior_appeared = [];
			var defaults = {
				interval: 250,
				force_process: false
			};
			var $window = $(window);

			function add_selector(selector) {
				selectors.push(selector);
				$prior_appeared.push();
			}

			function appeared(selector) {
				return $(selector).filter(function () {
					return $(this).is(':appeared');
				});
			}

			function process() {
				check_lock = false;
				for (var index = 0, selectorsLength = selectors.length; index < selectorsLength; index++) {
					var $appeared = appeared(selectors[index]);

					$appeared.trigger('appear', [$appeared]);

					if ($prior_appeared[index]) {
						var $disappeared = $prior_appeared[index].not($appeared);
						$disappeared.trigger('disappear', [$disappeared]);
					}
					$prior_appeared[index] = $appeared;
				}
			}

			$.expr[':'].appeared = function (element) {
				var $element = $(element);
				if (!$element.is(':visible')) {
					return false;
				}

				var window_left = $window.scrollLeft();
				var window_top = $window.scrollTop();
				var offset = $element.offset();
				var left = offset.left;
				var top = offset.top;

				if (top + $element.height() >= window_top &&
					top - ($element.data('appear-top-offset') || 0) <= window_top + $window.height() &&
					left + $element.width() >= window_left &&
					left - ($element.data('appear-left-offset') || 0) <= window_left + $window.width()) {
					return true;
				} else {
					return false;
				}
			};
			var opts = $.extend({}, defaults, options || {});
			var selector = this.selector || this;
			if (!check_binded) {
				var on_check = function () {
					if (check_lock) {
						return;
					}
					check_lock = true;

					setTimeout(process, opts.interval);
				};

				$(window).scroll(on_check).resize(on_check);
				check_binded = true;
			}

			if (opts.force_process) {
				setTimeout(process, opts.interval);
			}
			add_selector(selector);
			return $(selector);
		}
	});


	//Circle variable. Starts animation on visibility
	var el = $('.circle'),
		inited = false;
	el.appear({force_process: true});
	el.on('appear', function () {
		if (!inited) {
			el.circleProgress({});
			inited = true;
		}
	});

	//Circles 1-4
	$(el).circleProgress({
		startAngle: -Math.PI / 6 * 3,
		value: 0.16,
		fill: {gradient: ['#3571a3', '#3571a3']}
	}).on('circle-animation-progress', function (event, progress) {
		$(this).find('strong').html(parseInt(276 * progress) + '<br>' + '<i>тыс. тонн</i>');
	});
	$(".circle--second").circleProgress({
		value: 0.07
	}).on('circle-animation-progress', function (event, progress) {
		$(this).find('strong').html(parseInt(124 * progress) + '<br>' + '<i>тыс. тонн</i>');
	});
	$(".circle--third").circleProgress({
		value: 0.72
	}).on('circle-animation-progress', function (event, progress) {
		$(this).find('strong').html(parseInt(1250 * progress) + '<br>' + '<i>тыс. тонн</i>');
	});
	$(".circle--fourth").circleProgress({
		value: 0.05
	}).on('circle-animation-progress', function (event, progress) {
		$(this).find('strong').html(parseInt(85 * progress) + '<br>' + '<i>тыс. тонн</i>');
	});


	//Circles about page
	$(".circle--about").circleProgress({
		startAngle: -Math.PI / 6 * 3,
		value: 0.66,
		fill: {gradient: ['#3571a3', '#3571a3']}
	}).on('circle-animation-progress', function (event, progress) {
		$(this).find('strong').html(parseInt(1150 * progress) + '<br>' + '<i>тыс. тонн</i>');
	});
	$(".circle--about-second").circleProgress({
		value: 0.29
	}).on('circle-animation-progress', function (event, progress) {
		$(this).find('strong').html(parseInt(500 * progress) + '<br>' + '<i>тыс. тонн</i>');
	});
	$(".circle--about-third").circleProgress({
		value: 0.05
	}).on('circle-animation-progress', function (event, progress) {
		$(this).find('strong').html(parseInt(85 * progress) + '<br>' + '<i>тыс. тонн</i>');
	});


	//Clients slider
	$('.clients__slider').slick({
		infinite: true,
		slidesToShow: 6,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 700,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			}
		]
	});


	//Gallery
	$(document).ready(function () {
		$('.features-slide__item--images.gallery__one').magnificPopup({
			delegate: 'a',
			type: 'image',
			tLoading: 'Loading image #%curr%...',
			mainClass: 'mfp-img-mobile',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
			},
			image: {
				tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
				titleSrc: function (item) {
					return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
				}
			}
		});
	});

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


	//Slow scrolling

});


