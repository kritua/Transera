$(document).ready(function() {

	var header = $(".header");

	$(".header__menu").addClass("header__menu--hidden");
	header.removeClass("header--menu-opened");

	$(".header__button-burger").removeClass("header__button--hidden").on("click", function() {
		$(this).addClass("header__button--hidden");
		$(".header__button-close").removeClass("header__button--hidden");
		$(".header").addClass("header--menu-opened");
		$(".header__menu").removeClass("header__menu--hidden");
	});

	$(".header__button-close").addClass("header__button--hidden").on("click", function() {
		$(this).addClass("header__button--hidden");
		$(".header__button-burger").removeClass("header__button--hidden");
		$(".header").removeClass("header--menu-opened");
		$(".header__menu").addClass("header__menu--hidden");
	});

	header.vegas({
		delay: 10000,
		transition: 'fade',
		transitionDuration: '1000',
		timer: false,
		overlay: true,
		slides: [
			{src: "../img/bg-full-1.jpg"},
			{src: "../img/bg-full-2.jpg"},
			{src: "../img/bg-full-3.jpg"},
			{src: "../img/bg-full-4.jpg"}
		]
	});
	$("#header-previous").on('click', function () {
		$("header").vegas('previous');
	});
	$("#header-next").on('click', function () {
		$("header").vegas('next');
	});

	var el = $('.circle'),
		inited = false;

	el.appear({ force_process: true });

	el.on('appear', function() {
		if (!inited) {
			el.circleProgress({ value: 0.7 });
			inited = true;
		}
	});

	$(el).circleProgress({
		startAngle: -Math.PI / 6 * 3,
		value: 0.6,
		fill: {gradient: ['#3571a3', '#3571a3']}
	}).on('circle-animation-progress', function(event, progress) {
		$(this).find('strong').html(parseInt(60 * progress) + '<i>%</i>');
	});
	$(".circle--second").circleProgress({
		value: 0.8
	}).on('circle-animation-progress', function(event, progress) {
		$(this).find('strong').html(parseInt(80 * progress) + '<i>%</i>');
	});
	$(".circle--third").circleProgress({
		value: 0.8
	}).on('circle-animation-progress', function(event, progress) {
		$(this).find('strong').html(parseInt(80 * progress) + '<i>%</i>');
	});
	$(".circle--fourth").circleProgress({
		value: 0.8
	}).on('circle-animation-progress', function(event, progress) {
		$(this).find('strong').html(parseInt(800 * progress) + '<i>%</i>');
	});
});



/*var Circle = function(sel){
  var circles = document.querySelectorAll(sel);
  [].forEach.call(circles,function(el){
    var value = parseFloat(el.innerHTML);
    var valEl = value*408/100;
    el.innerHTML = '<svg width="160" height="160"><circle transform="rotate(-90)" r="65" cx="-80" cy="80" /><circle transform="rotate(-90)" style="stroke-dasharray:'+valEl+'px 408px;" r="65" cx="-80" cy="80" /><text x="50" y="90" style="font-family: Arial, sans-serif; font-size: 36px">'+ value + '%' +'</text></svg>';
  });
};
Circle('.circle');*/

