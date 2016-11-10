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
			{src: "./img/bg-full.jpg"},
			{src: "./img/bg-full-1.jpg"},
			{src: "./img/bg-full-2.jpg"},
			{src: "./img/bg-full-3.jpg"}
		]
	});
	$(".slider--previous").on('click', function () {
		$(".header--index").vegas('previous');
	});
	$(".slider--next").on('click', function () {
		$(".header--index").vegas('next');
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
		value: 1,
		emptyFill: 'rgba(255, 255, 255, 0.3)',
		fill: {gradient: ['#d22856', '#d22856']}
	}).on('circle-animation-progress', function (event, progress) {
		$(this).find('strong').html(parseInt(8 * progress) + '<br>' + '<i>лет</i>');
	});
	$(".circle--second").circleProgress({
		value: 0.8
	}).on('circle-animation-progress', function (event, progress) {
		$(this).find('strong').html(parseInt(35 * progress) + '<br>' + '<i>единиц</i>');
	});
	$(".circle--third").circleProgress({
		value: 0.72
	}).on('circle-animation-progress', function (event, progress) {
		$(this).find('strong').html(parseInt(107 * progress) + '<br>' + '<i>тыс. тонн</i>');
	});
	$(".circle--fourth").circleProgress({
		value: 0.8
	}).on('circle-animation-progress', function (event, progress) {
		$(this).find('strong').html(parseInt(1500 * progress) + '<br>' + '<i>городов</i>');
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

	//Slow scrolling
	$('a[href*="#"]').on('click', function (event) {
		event.preventDefault();
		$('body, html').animate({
			scrollTop: $($.attr(this, 'href')).offset().top
		}, 'ease');
	});
});





