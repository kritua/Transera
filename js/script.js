'use strict';

$(document).ready(function() {
	$("header").vegas({
		delay: 10000,
		transition: 'fade',
		transitionDuration: '1000',
		loop: 'true',
		timer: 'false',
		overlay: 'true',
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
});

var buttonBurger = document.querySelector('.header__button-burger');
var buttonClose = document.querySelector('.header__button-close');
var menuBlock = document.querySelector('.header__menu');
var headerBlock = document.querySelector('.header');

window.onload = function() {
	menuBlock.classList.add('header__menu--hidden');
	buttonClose.classList.add('header__button--hidden');
	buttonBurger.classList.remove('header__button--hidden');
	headerBlock.classList.remove('header--menu-opened');
};

function openMenu() {
	menuBlock.classList.remove('header__menu--hidden');
	headerBlock.classList.add('header--menu-opened');
	buttonBurger.classList.add('header__button--hidden');
	buttonClose.classList.remove('header__button--hidden');
}

function closeMenu() {
	menuBlock.classList.add('header__menu--hidden');
	headerBlock.classList.remove('header--menu-opened');
	buttonBurger.classList.remove('header__button--hidden');
	buttonClose.classList.add('header__button--hidden');
}

buttonBurger.addEventListener('click', openMenu);
buttonClose.addEventListener('click', closeMenu);


var Circle = function(sel){
  var circles = document.querySelectorAll(sel);
  [].forEach.call(circles,function(el){
    var value = parseFloat(el.innerHTML);
    var valEl = value*408/100;
    el.innerHTML = '<svg width="160" height="160"><circle transform="rotate(-90)" r="65" cx="-80" cy="80" /><circle transform="rotate(-90)" style="stroke-dasharray:'+valEl+'px 408px;" r="65" cx="-80" cy="80" /><text x="50" y="90" style="font-family: Arial, sans-serif; font-size: 36px">'+ value + '%' +'</text></svg>';
  });
};
Circle('.circle');

