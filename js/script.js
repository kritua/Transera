$(document).ready(function () {

  //Mobile menu
  var header = $(".header");
  $(".header__menu").addClass("header__menu--hidden");
  header.removeClass("header--menu-opened");
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
    $(".header").vegas('previous');
  });
  $("#header-next").on('click', function () {
    $(".header").vegas('next');
  });


  //Facts slideshow
  $(".facts__image-block").vegas({
    delay: 5000,
    transition: 'fade',
    transitionDuration: '1000',
    timer: false,
    slides: [
      {src: "../img/work/slide-1.jpg"},
      {src: "../img/work/slide-2.jpg"},
      {src: "../img/work/slide-3.jpg"},
      {src: "../img/work/slide-4.jpg"},
      {src: "../img/work/slide-5.jpg"},
      {src: "../img/work/slide-6.jpg"},
      {src: "../img/work/slide-7.jpg"},
      {src: "../img/work/slide-8.jpg"},
      {src: "../img/work/slide-9.jpg"},
      {src: "../img/work/slide-10.jpg"},
      {src: "../img/work/slide-11.jpg"},
      {src: "../img/work/slide-12.jpg"},
      {src: "../img/work/slide-13.jpg"},
      {src: "../img/work/slide-14.jpg"},
      {src: "../img/work/slide-15.jpg"},
      {src: "../img/work/slide-16.jpg"},
      {src: "../img/work/slide-17.jpg"},
      {src: "../img/work/slide-18.jpg"},
      {src: "../img/work/slide-19.jpg"},
      {src: "../img/work/slide-20.jpg"}
    ]
  });
  $("#facts-previous").on('click', function () {
    $(".facts__image-block").vegas('previous');
  });
  $("#facts-next").on('click', function () {
    $(".facts__image-block").vegas('next');
  });


  //Circle variable
  var el = $('.circle'),
    inited = false;
  el.appear({force_process: true});
  el.on('appear', function () {
    if (!inited) {
      inited = true;
    }
  });

  //Circles 1-4
  $(el).circleProgress({
    startAngle: -Math.PI / 6 * 3,
    value: 0.6,
    fill: {gradient: ['#3571a3', '#3571a3']}
  }).on('circle-animation-progress', function (event, progress) {
    $(this).find('strong').html(parseInt(6565 * progress) + '<br>' + '<i>тонн</i>');
  });
  $(".circle--second").circleProgress({
    value: 0.8
  }).on('circle-animation-progress', function (event, progress) {
    $(this).find('strong').html(parseInt(87880 * progress) + '<br>' + '<i>тонн</i>');
  });
  $(".circle--third").circleProgress({
    value: 0.8
  }).on('circle-animation-progress', function (event, progress) {
    $(this).find('strong').html(parseInt(80 * progress) + '<br>' + '<i>тонн</i>');
  });
  $(".circle--fourth").circleProgress({
    value: 0.8
  }).on('circle-animation-progress', function (event, progress) {
    $(this).find('strong').html(parseInt(7760 * progress) + '<br>' + '<i>тонн</i>');
  });

  //Interactive map
  $('.map__block').vectorMap({map: 'ru_mill'});
});




