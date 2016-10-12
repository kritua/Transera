'use strict';

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
