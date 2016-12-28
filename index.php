<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<title>Компания СпецТрансСервис</title>
	<link href="css/style.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/png">
</head>
<body>
<header class="header header--index header--background header--menu-opened">
	<button class="slider slider--previous" type="button" id="header-previous"></button>
	<button class="slider slider--next" type="button" id="header-next"></button>
	<div class="header__navbar">
		<div class="header__logo">
			<div class="header__logo-img">
				<picture>
					<source media="(min-width: 700px)" srcset="./img/logo.svg">
					<img src="./img/logo.svg" alt="Logo">
				</picture>
			</div>
			<div class="header__button-menu">
				<button class="header__button header__button-burger header__button--hidden" type="button" id="menu-open">
					<img src="./img/icons/icon-menu-burger.svg" width="50" height="24">
				</button>
				<button class="header__button header__button-close" type="button" id="menu-close">
					<img src="./img/icons/icon-menu-cross.svg" width="24" height="24">
				</button>
			</div>
		</div>
		<nav class="header__menu">
			<ul class="header__menu-list">
				<li class="header__menu-item header__menu-item--active"><a href="#">Главная</a></li>
				<li class="header__menu-item"><a href="about.html">О компании</a></li>
				<li class="header__menu-item"><a href="features.html">Преимущества</a></li>
				<li class="header__menu-item"><a href="services.html">Услуги</a></li>
				<li class="header__menu-item"><a href="experience.html">Наш опыт</a></li>
				<li class="header__menu-item"><a href="docs.html">Документация</a></li>
				<li class="header__menu-item"><a href="regions.html">Регионы</a></li>
				<li class="header__menu-item"><a href="contacts.html">Контакты</a></li>
				<li class="header__menu-item"></li>
			</ul>
		</nav>
		<div class="header__button-order">
			<a href="#" class="standart-button standart-button--header modal-window__click">Заказать звонок</a>
		</div>
	</div>
	<section class="page-headers">
		<div class="main-container">
			<h1 class="page-headers__h1">Перевозим<br> <span>негабаритные</span><br>грузы</h1>
			<h2 class="page-headers__h2">&nbsp;<!-- В любую погоду, по асфальту и бездорожью, быстро и надёжно --></h2>
			<p class="page-headers__text"></p>
			<a href="#" class="standart-button">Отправить заявку</a>
		</div>
	</section>
</header>
<main>
	<section class="transport-types">
		<div class="main-container">
			<div class="section-headers section-headers--hidden">
				<h2 class="section-headers__h2">Что мы возим</h2>
				<h4 class="section-headers__h4">Типы перевозимых грузов</h4>
			</div>
			<div class="transport-types__wrapper">
				<div class="transport-types__item">
					<div class="transport-types__image-block">
						<img class="transport-types__image" src="./img/types/oil.svg" width="120" height="120">
					</div>
					<div class="transport-types__header-block">
						<h3 class="transport-types__header-text">Нефтяная<br> отрасль</h3>
					</div>
					<div class="transport-types__text-block">
						<p class="transport-types__text">Мы осуществляем транспортировку любого типа грузов для нефтяной отрасли -
							вышки, буровые установки, насосы - перевезём всё!</p>
					</div>
					<div class="transport-types__button transport-types__button--hidden">
						<a href="#" class="feature-block__link feature-block__link--hidden">Подробнее</a>

					</div>
				</div>
				<div class="transport-types__item">
					<div class="transport-types__image-block">
						<img class="transport-types__image" src="./img/types/gas.svg" width="120" height="120">
					</div>
					<div class="transport-types__header-block">
						<h3 class="transport-types__header-text">Газовая<br> отрасль</h3>
					</div>
					<div class="transport-types__text-block">
						<p class="transport-types__text">Перевозим все необходимые компоненты, устройства и агрегаты для добычи,
							хранения и перемещения продукции газовой отрасли</p>
					</div>
					<div class="transport-types__button transport-types__button--hidden">
						<a href="#" class="feature-block__link feature-block__link--hidden">Подробнее</a>
					</div>
				</div>
				<div class="transport-types__item">
					<div class="transport-types__image-block">
						<img class="transport-types__image" src="./img/types/electric.svg" width="120" height="120">
					</div>
					<div class="transport-types__header-block">
						<h3 class="transport-types__header-text">Энергетическая<br> отрасль</h3>
					</div>
					<div class="transport-types__text-block">
						<p class="transport-types__text">Наш автопарк включает в себя всю необходимую технику для транспортировки
							изделий для энергетической отрасли</p>
					</div>
					<div class="transport-types__button transport-types__button--hidden">
						<a href="#" class="feature-block__link feature-block__link--hidden">Подробнее</a>
					</div>
				</div>
				<div class="transport-types__item">
					<div class="transport-types__image-block">
						<img class="transport-types__image" src="./img/types/coal.svg" width="120" height="120">
					</div>
					<div class="transport-types__header-block">
						<h3 class="transport-types__header-text">Угольная<br> отрасль</h3>
					</div>
					<div class="transport-types__text-block">
						<p class="transport-types__text">Мы можем перевезти технические средства для добычи и транспортировки
							продукции горнодобывающей и угольной отрасли</p>
					</div>
					<div class="transport-types__button transport-types__button--hidden">
						<a href="#" class="feature-block__link feature-block__link--hidden">Подробнее</a>
					</div>
				</div>
				<div class="transport-types__item">
					<div class="transport-types__image-block">
						<img class="transport-types__image" src="./img/types/goz.svg" width="120" height="120">
					</div>
					<div class="transport-types__header-block">
						<h3 class="transport-types__header-text">Государственный<br> оборонзаказ</h3>
					</div>
					<div class="transport-types__text-block">
						<p class="transport-types__text">Перевозим компоненты, технику и цельные изделия военного назначения в целях выполнения Гособоронзаказа</p>
					</div>
					<div class="transport-types__button transport-types__button--hidden">
						<a href="#" class="feature-block__link feature-block__link--hidden">Подробнее</a>

					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="about-us">
		<div class="main-container">
			<div class="section-headers">
				<h2 class="section-headers__h2">О компании</h2>
				<h4 class="section-headers__h4">Наши преимущества</h4>
			</div>
			<div class="about-us__wrapper">
				<div class="about-us__item about-us__item--text">
					<div class="about-us__info-block">
						<div class="about-us__text-block">
							<p class="about-us__text">
								Компания ООО «СпецТрансСервис» специализируется на транспортировке тяжеловесных,
								негабаритных и наливных грузов. Так же предоставляем погрузочно-разгрузочную технику любой
								грузоподъемности, вместе с бригадой стропальщиков. По согласованию с заказчиком погрузочно-
								разгрузочные работы могут осуществляться такелажным способом, с предоставлением бригады
								такелажников и необходимым оборудованием.
							</p>
							<p class="about-us__text">
								Все работы выполняются с высоким качеством и производительностью, в соответствии с
								требованиями стандартов, норм и правил, в полном взаимодействии с Заказчиками и
								Партнерами.
							</p>
							<p class="about-us__text about-us__text--bold about-us__text--hidden">
								Подвижной состав компании и партнеров состоит из:
							</p>
						</div>
						<div class="about-us__list-block about-us__list-block--hidden">
							<ul class="about-us__list">
								<li class="about-us__list-item">Тягачи на базе шоссейных и полноприводных автомобилей</li>
								<li class="about-us__list-item">Полуприцепы открытые площадки</li>
								<li class="about-us__list-item">Полуприцепы тралы грузоподъемностью от 20 до 100 тн</li>
								<li class="about-us__list-item">Модульные тралы грузоподъемностью от 100 до 800 тн</li>
								<li class="features-slide__list-item">Полуприцепы тралы телескопические, погрузочной длиной от 15 и более метров</li>
								<li class="about-us__list-item">Полуприцепы тент/борт</li>
								<li class="about-us__list-item">Автоцистерны (для транспортировки наливных грузов)</li>
								<li class="about-us__list-item">Автокрановая техника на базе шоссейных и полноприводных автомобилей
									грузоподъемностью от 15 до 220 тн
								</li>
							</ul>
						</div>
						<div class="about-us__link-block">
							<a href="about.html" class="about-us__link">Читать дальше</a>
						</div>
					</div>
				</div>
				<div class="about-us__item about-us__item--image">
					<button class="slider slider--previous" type="button" id="about-us-previous"></button>
					<button class="slider slider--next" type="button" id="about-us-next"></button>
				</div>
			</div>
		</div>
	</section>
	<section class="features-slide">
		<div class="features-slide__items-wrapper">
			<div class="features-slide__item">
				<h3 class="features-slide__h3">Вам нужна<br> <span>перевозка</span><br> негабаритного <br> <span>груза?</span>
				</h3>
				<a href="#" class="standart-button standart-button--features">Оставить заявку</a>
			</div>
			<div class="features-slide__item features-slide__item--double-width">
				<h3 class="features-slide__h3 features-slide__h3--custom">Простое<br> <span>Решение</span><br> сложных задач
				</h3>
				<h4 class="features-slide__h4">Индивидуальный подход к каждому клиенту</h4>
				<p class="features-slide__text">Наши специалисты - профессионалы своего дела, знающие специфику труднодоступных
					регионов. Любые ваши требования и пожелания будут выполнены в чётком соответствии с техническим заданием. Наша
					компания с 2008 года осуществляет транспортировку любых негабаритных грузов в самые отдалённые места нашей
					страны - преимущетсвенно, это регионы Ямало-Ненецкого и Ханты-Мансийского Автономных Округов, Дальний Восток,
					Республика Саха (Якутия), Красноярский край, а также Свердловская и Тюменская области. Практически полное
					отсутствие
					дорожного покрытия - не помеха. Мы привезём ваш груз в любую местность </p>
			</div>
		</div>
	</section>
	<section class="feature-block">
		<div class="main-container">
			<div class="section-headers">
				<h2 class="section-headers__h2">Особенности</h2>
				<h4 class="section-headers__h4">Чем мы лучше</h4>
			</div>
			<div class="feature-block__items-wrapper">
				<div class="feature-block__item">
					<svg class="feature-block__image" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 100" width="120"
					     height="100">
						<g class="st0">
							<path
								d="M118.2,46.6L107,27.2c-1.3-2.2-3.7-3.6-6.3-3.6h-9.3C82.7,10.1,67.6,1.3,50.3,1.3c-27.1,0-49,21.9-49,49 s21.9,49,49,49c17.2,0,32.4-8.9,41.1-22.3h9.3c2.6,0,5-1.4,6.3-3.6l11.2-19.4C119.5,51.6,119.5,48.9,118.2,46.6z M50.3,87.1	c-20.3,0-36.8-16.5-36.8-36.8S30,13.5,50.3,13.5s36.8,16.5,36.8,36.8S70.7,87.1,50.3,87.1z"/>
						</g>
						<g class="st1">
							<path
								d="M67.9,32.5l-6.3-1c-7.4-1.1-15-1.1-22.4,0l-6.3,1c-0.3,0.1-0.6,0.3-0.6,0.7v4.9c0,14,6.6,27.5,17.7,36 c0.1,0.1,0.3,0.2,0.4,0.2c0,0,0.1,0,0.1,0c0.1,0,0.2-0.1,0.3-0.1c11.1-8.6,17.7-22,17.7-36v-4.9C68.5,32.9,68.2,32.6,67.9,32.5z M67.1,38.1c0,13.4-6.3,26.3-16.8,34.6c-10.5-8.3-16.8-21.2-16.8-34.6v-4.3l5.8-0.9c7.3-1.1,14.7-1.1,22,0l5.8,0.9V38.1z"/>
							<path
								d="M51,64.9c-0.3,0.3-0.2,0.7,0,1c0.1,0.1,0.3,0.2,0.5,0.2c0.2,0,0.4-0.1,0.5-0.2c11.4-12,10.7-27.1,10.7-27.3 c0-0.4-0.4-0.7-0.7-0.6c-0.4,0-0.7,0.3-0.6,0.7C61.3,38.8,62,53.4,51,64.9z"/>
						</g>
					</svg>
					<div class="feature-block__text-block">
						<h4 class="feature-block__h4">Гарантия доставки</h4>
						<p class="feature-block__text">Мы несём ответственность за взятые на себя обязательства</p>
						<a href="features.html" target="_blank" class="feature-block__link feature-block__link--hidden">Подробнее</a>
					</div>
				</div>
				<div class="feature-block__item">
					<svg class="feature-block__image" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 100" width="120"
					     height="100">
						<path class="st0"
						      d="M118.2,46.6L107,27.2c-1.3-2.2-3.7-3.6-6.3-3.6h-9.3C82.7,10.1,67.6,1.3,50.3,1.3c-27.1,0-49,21.9-49,49 s21.9,49,49,49c17.2,0,32.4-8.9,41.1-22.3h9.3c2.6,0,5-1.4,6.3-3.6l11.2-19.4C119.5,51.6,119.5,48.9,118.2,46.6z M50.3,87.1	c-20.3,0-36.8-16.5-36.8-36.8S30,13.5,50.3,13.5s36.8,16.5,36.8,36.8S70.7,87.1,50.3,87.1z"/>
						<g class="st1">
							<path
								d="M71.9,48.8c0-0.1,0-0.1,0-0.2c0,0,0,0,0,0c0-11.6-9.2-21.1-20.8-21.6v-1.8c0-0.5-0.4-0.9-0.9-0.9c-0.5,0-0.9,0.4-0.9,0.9 v1.8c-11.5,0.5-20.8,10-20.8,21.6c0,0,0,0,0,0c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.1c0,0,0.1,0.1,0.1,0.1c0,0.1,0.1,0.1,0.1,0.1 c0,0,0,0,0,0c0,0,0.1,0,0.1,0.1c0.1,0,0.1,0.1,0.2,0.1c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1,0c0,0,0,0,0,0c0.1,0,0.1,0,0.2,0	c0,0,0.1,0,0.1,0c0,0,0.1-0.1,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0,0,0,0c1.2-1.5,2.8-2.3,4.5-2.3s3.3,0.8,4.5,2.3c0,0,0,0,0.1,0	c0,0,0,0,0.1,0.1c0,0,0.1,0,0.1,0.1c0,0,0.1,0.1,0.1,0.1c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1,0c0,0,0,0,0,0c0,0,0.1,0,0.1,0	c0.1,0,0.1,0,0.2-0.1c0,0,0.1,0,0.1-0.1c0,0,0.1,0,0.1-0.1c0,0,0,0,0-0.1c0,0,0,0,0.1-0.1c1.2-1.5,2.8-2.3,4.5-2.3	c1.6,0,3.1,0.7,4.3,2.1v23c0,1.4-1.2,2.6-2.6,2.6c-1.4,0-2.6-1.2-2.6-2.6c0-0.5-0.4-0.9-0.9-0.9c-0.5,0-0.9,0.4-0.9,0.9	c0,2.4,1.9,4.3,4.3,4.3c2.4,0,4.3-1.9,4.3-4.3v-23c1.2-1.3,2.7-2.1,4.3-2.1c1.7,0,3.3,0.8,4.5,2.3c0,0,0,0,0.1,0c0,0,0,0,0.1,0.1	c0,0,0.1,0,0.1,0.1c0,0,0.1,0.1,0.1,0.1c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1,0c0,0,0,0,0,0c0,0,0.1,0,0.1,0c0.1,0,0.1,0,0.2-0.1	c0,0,0.1,0,0.1-0.1c0,0,0.1,0,0.1,0c0,0,0,0,0-0.1c0,0,0,0,0.1-0.1c1.2-1.5,2.8-2.3,4.5-2.3s3.3,0.8,4.5,2.3c0,0,0,0,0,0	c0.1,0.1,0.1,0.1,0.2,0.2c0,0,0,0,0.1,0.1c0.1,0,0.2,0.1,0.3,0.1l0,0l0,0c0.1,0,0.2,0,0.3-0.1c0,0,0.1,0,0.1-0.1c0,0,0.1,0,0.1-0.1	c0,0,0,0,0,0c0,0,0.1-0.1,0.1-0.1c0,0,0.1-0.1,0.1-0.1C71.9,48.9,71.9,48.8,71.9,48.8z M65.9,45.1c-1.9,0-3.7,0.8-5.2,2.2	c-1.5-1.4-3.3-2.2-5.2-2.2s-3.7,0.8-5.2,2.2c-1.5-1.4-3.3-2.2-5.2-2.2c-1.9,0-3.7,0.8-5.2,2.2c-1.5-1.4-3.3-2.2-5.2-2.2	c-1.5,0-3,0.5-4.2,1.4c1-10,9.5-17.8,19.8-17.8s18.7,7.8,19.8,17.8C68.9,45.6,67.4,45.1,65.9,45.1z"/>
						</g>
					</svg>
					<div class="feature-block__text-block">
						<h4 class="feature-block__h4">В сложных условиях</h4>
						<p class="feature-block__text">Осуществляем доставку в отдаленные и труднодоступные места</p>
						<a href="features.html" target="_blank" class="feature-block__link feature-block__link--hidden">Подробнее</a>
					</div>
				</div>
				<div class="feature-block__item">
					<svg class="feature-block__image" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 100" width="120"
					     height="100">
						<path class="st0"
						      d="M118.2,46.6L107,27.2c-1.3-2.2-3.7-3.6-6.3-3.6h-9.3C82.7,10.1,67.6,1.3,50.3,1.3c-27.1,0-49,21.9-49,49 s21.9,49,49,49c17.2,0,32.4-8.9,41.1-22.3h9.3c2.6,0,5-1.4,6.3-3.6l11.2-19.4C119.5,51.6,119.5,48.9,118.2,46.6z M50.3,87.1	c-20.3,0-36.8-16.5-36.8-36.8S30,13.5,50.3,13.5s36.8,16.5,36.8,36.8S70.7,87.1,50.3,87.1z"/>
						<g class="st1">
							<path
								d="M35.3,69.6c-0.1,0-0.2,0-0.3-0.1c-0.3-0.1-0.5-0.5-0.5-0.8v-6.2h-2.7c-1.5,0-2.7-1.2-2.7-2.7V37c0-1.5,1.2-2.7,2.7-2.7 h37.1c1.5,0,2.7,1.2,2.7,2.7v23c0,1.5-1.2,2.7-2.7,2.7H42.8l-6.8,6.8C35.8,69.6,35.5,69.6,35.3,69.6z M31.8,36.1 c-0.5,0-0.9,0.4-0.9,0.9v23c0,0.5,0.4,0.9,0.9,0.9h3.5c0.5,0,0.9,0.4,0.9,0.9v4.9l5.6-5.6c0.2-0.2,0.4-0.3,0.6-0.3h26.5	c0.5,0,0.9-0.4,0.9-0.9V37c0-0.5-0.4-0.9-0.9-0.9L31.8,36.1L31.8,36.1z"/>
							<path
								d="M44.2,50.2c-1,0-1.8-0.8-1.8-1.8c0-1,0.8-1.8,1.8-1.8c1,0,1.8,0.8,1.8,1.8C45.9,49.4,45.1,50.2,44.2,50.2z"/>
							<path
								d="M58.3,50.2c-1,0-1.8-0.8-1.8-1.8c0-1,0.8-1.8,1.8-1.8s1.8,0.8,1.8,1.8C60.1,49.4,59.3,50.2,58.3,50.2z"/>
							<path
								d="M51.2,50.2c-1,0-1.8-0.8-1.8-1.8c0-1,0.8-1.8,1.8-1.8c1,0,1.8,0.8,1.8,1.8C53,49.4,52.2,50.2,51.2,50.2z"/>
						</g>
					</svg>
					<div class="feature-block__text-block">
						<h4 class="feature-block__h4">Всегда на связи</h4>
						<p class="feature-block__text">Производим контроль движения грузов по всему маршруту</p>
						<a href="features.html" target="_blank" class="feature-block__link feature-block__link--hidden">Подробнее</a>
					</div>
				</div>
				<div class="feature-block__item">
					<svg class="feature-block__image" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 100" width="120"
					     height="100">
						<path class="st0"
						      d="M118.2,46.6L107,27.2c-1.3-2.2-3.7-3.6-6.3-3.6h-9.3C82.7,10.1,67.6,1.3,50.3,1.3c-27.1,0-49,21.9-49,49 s21.9,49,49,49c17.2,0,32.4-8.9,41.1-22.3h9.3c2.6,0,5-1.4,6.3-3.6l11.2-19.4C119.5,51.6,119.5,48.9,118.2,46.6z M50.3,87.1	c-20.3,0-36.8-16.5-36.8-36.8S30,13.5,50.3,13.5s36.8,16.5,36.8,36.8S70.7,87.1,50.3,87.1z"/>
						<g class="st1">
							<path
								d="M50.9,54.3c0.7-0.1,1.4-0.4,1.9-1l6.7-9.3c0.2-0.3,0.2-0.7-0.1-0.9c-0.2-0.2-0.6-0.3-0.9-0.1l-9.3,6.7 c-0.6,0.4-1,1.1-1,1.9c-0.1,0.7,0.2,1.5,0.7,2c0.5,0.5,1.1,0.7,1.8,0.7C50.7,54.3,50.8,54.3,50.9,54.3z M49.5,51.7 c0-0.3,0.2-0.6,0.5-0.8l5.7-4.1l-4.1,5.7c-0.2,0.3-0.5,0.4-0.8,0.5c-0.3,0-0.6-0.1-0.9-0.3C49.6,52.3,49.5,52,49.5,51.7z"/>
							<path
								d="M66.9,41.1C66.9,41.1,66.9,41.1,66.9,41.1C66.9,41,66.9,41,66.9,41.1c-0.8-1.3-1.6-2.5-2.6-3.5l1.5-1.5l1,1l3-3l-3-3l-3,3 l1,1l-1.5,1.5c-1-1-2.2-1.8-3.4-2.6c0,0,0,0,0,0c0,0,0,0,0,0c-2.2-1.3-4.7-2.1-7.4-2.4v-0.9h1.1c1,0,1.8-0.8,1.8-1.8	s-0.8-1.8-1.8-1.8H47c-1,0-1.8,0.8-1.8,1.8s0.8,1.8,1.8,1.8h1.1v0.8c-0.8,0.1-1.5,0.2-2.3,0.4c-0.4,0.1-0.6,0.5-0.5,0.9	c0.1,0.4,0.5,0.6,0.9,0.5c0.7-0.2,1.3-0.3,2-0.3l0.8-0.1c0.2,0,0.5,0,0.7,0v1.4c0,0.4,0.3,0.7,0.7,0.7s0.7-0.3,0.7-0.7v-1.4	c2.7,0.1,5.2,0.8,7.5,2l-0.7,1.2c-0.2,0.3-0.1,0.8,0.3,1c0.1,0.1,0.2,0.1,0.4,0.1c0.2,0,0.5-0.1,0.6-0.4l0.7-1.2 c2.2,1.4,4.1,3.3,5.6,5.6l-1.2,0.7c-0.3,0.2-0.5,0.6-0.3,1c0.1,0.2,0.4,0.4,0.6,0.4c0.1,0,0.2,0,0.4-0.1l1.2-0.7	c1.2,2.3,1.9,4.9,2,7.6h-1.4c-0.4,0-0.7,0.3-0.7,0.7s0.3,0.7,0.7,0.7H68c-0.1,2.7-0.8,5.3-2,7.6l-1.2-0.7c-0.3-0.2-0.8-0.1-1,0.3	c-0.2,0.3-0.1,0.8,0.3,1l1.2,0.7c-1.4,2.2-3.3,4.1-5.6,5.6L59,64.6c-0.2-0.3-0.6-0.5-1-0.3c-0.3,0.2-0.5,0.6-0.3,1l0.7,1.2	c-2.3,1.2-4.8,1.9-7.5,2v-1.4c0-0.4-0.3-0.7-0.7-0.7s-0.7,0.3-0.7,0.7v1.4c-1.1,0-2.3-0.2-3.4-0.4c-0.4-0.1-0.8,0.2-0.9,0.5	c-0.1,0.4,0.2,0.8,0.5,0.9c1.4,0.3,2.9,0.5,4.3,0.5c0,0,0.1,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0,0c3.4,0,6.7-1,9.5-2.6c0,0,0,0,0.1,0	c0,0,0,0,0,0c2.9-1.7,5.3-4.1,7-7c0,0,0,0,0-0.1c0,0,0,0,0,0c1.6-2.8,2.6-6.1,2.6-9.6C69.5,47.2,68.6,43.9,66.9,41.1z M66.9,33l1,1	l-1,1l-1-1L66.9,33z M49.5,31.4v-2.2H47c-0.2,0-0.4-0.2-0.4-0.4c0-0.2,0.2-0.4,0.4-0.4h6.4c0.2,0,0.4,0.2,0.4,0.4	c0,0.2-0.2,0.4-0.4,0.4H51v2.2c-0.2,0-0.5,0-0.7,0c0,0,0,0-0.1,0c0,0,0,0-0.1,0c-0.1,0-0.2,0-0.4,0C49.7,31.4,49.6,31.4,49.5,31.4z"/>
							<path
								d="M43.8,37.1h-3.6c-0.4,0-0.7,0.3-0.7,0.7s0.3,0.7,0.7,0.7h3.6c0.4,0,0.7-0.3,0.7-0.7S44.2,37.1,43.8,37.1z"/>
							<path
								d="M43.8,42.1h-7.2c-0.4,0-0.7,0.3-0.7,0.7s0.3,0.7,0.7,0.7h7.2c0.4,0,0.7-0.3,0.7-0.7S44.2,42.1,43.8,42.1z"/>
							<path
								d="M43.8,47.1H33.1c-0.4,0-0.7,0.3-0.7,0.7s0.3,0.7,0.7,0.7h10.8c0.4,0,0.7-0.3,0.7-0.7S44.2,47.1,43.8,47.1z"/>
							<path
								d="M43.8,52.2H30.2c-0.4,0-0.7,0.3-0.7,0.7c0,0.4,0.3,0.7,0.7,0.7h13.6c0.4,0,0.7-0.3,0.7-0.7C44.5,52.5,44.2,52.2,43.8,52.2z"/>
							<path
								d="M43.8,57.2h-9.3c-0.4,0-0.7,0.3-0.7,0.7c0,0.4,0.3,0.7,0.7,0.7h9.3c0.4,0,0.7-0.3,0.7-0.7C44.5,57.5,44.2,57.2,43.8,57.2z"/>
							<path
								d="M43.8,62.2h-5c-0.4,0-0.7,0.3-0.7,0.7c0,0.4,0.3,0.7,0.7,0.7h5c0.4,0,0.7-0.3,0.7-0.7C44.5,62.5,44.2,62.2,43.8,62.2z"/>
						</g>
					</svg>
					<div class="feature-block__text-block">
						<h4 class="feature-block__h4">Пунктуальность</h4>
						<p class="feature-block__text">Соответствие установленным срокам, согласно договорным обязательствам</p>
						<a href="features.html" target="_blank" class="feature-block__link feature-block__link--hidden">Подробнее</a>
					</div>
				</div>
				<div class="feature-block__item">
					<svg class="feature-block__image" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 100" width="120"
					     height="100">
						<path class="st0"
						      d="M118.2,46.6L107,27.2c-1.3-2.2-3.7-3.6-6.3-3.6h-9.3C82.7,10.1,67.6,1.3,50.3,1.3c-27.1,0-49,21.9-49,49 s21.9,49,49,49c17.2,0,32.4-8.9,41.1-22.3h9.3c2.6,0,5-1.4,6.3-3.6l11.2-19.4C119.5,51.6,119.5,48.9,118.2,46.6z M50.3,87.1	c-20.3,0-36.8-16.5-36.8-36.8S30,13.5,50.3,13.5s36.8,16.5,36.8,36.8S70.7,87.1,50.3,87.1z"/>
						<g class="st1">
							<path
								d="M72.2,43.6l-6.4-7c-0.5-0.5-1.2-0.8-1.8-0.8h-7.3v-1.5c0-1.6-1.2-2.9-2.8-2.9H31.6c-1.6,0-2.9,1.2-2.9,2.9v17.7v1.5v6.2 c0,1.4,1.2,2.6,2.6,2.6h1.2c0.4,2.5,2.5,4.4,5.1,4.4c2.6,0,4.7-1.9,5.1-4.4h12.5h1.5h2.3c0.4,2.5,2.5,4.4,5.1,4.4	c2.6,0,4.7-1.9,5.1-4.4h3.7h0.1V45.3C72.8,44.7,72.6,44.1,72.2,43.6z M71,44.6c0.2,0.1,0.3,0.4,0.3,0.7v2.3h-11v-7.3H67L71,44.6z M30.2,46.8h10.3c0.4,0,0.7-0.3,0.7-0.7c0-0.4-0.3-0.7-0.7-0.7H30.2v-2.2h7.3c0.4,0,0.7-0.3,0.7-0.7s-0.3-0.7-0.7-0.7h-7.3v-7.4	c0-0.8,0.6-1.4,1.4-1.4h22.2c0.8,0,1.4,0.7,1.4,1.4v1.5v16.2h-25V46.8z M37.5,65.2c-2.1,0-3.7-1.6-3.7-3.7c0-2.1,1.6-3.7,3.7-3.7	c2.1,0,3.7,1.6,3.7,3.7C41.2,63.5,39.6,65.2,37.5,65.2z M55.1,60.7H42.6c-0.3-2.4-2.2-4.2-4.6-4.4c0,0,0,0-0.1,0	c-0.1,0-0.1,0-0.2,0c-0.1,0-0.2,0-0.2,0s-0.2,0-0.2,0c-0.1,0-0.1,0-0.2,0c0,0,0,0-0.1,0c-2.4,0.2-4.3,2-4.6,4.4h-1.2	c-0.6,0-1.1-0.5-1.1-1.1v-6.2h25V60.7z M64,65.2c-2.1,0-3.7-1.6-3.7-3.7c0-2.1,1.6-3.7,3.7-3.7c2.1,0,3.7,1.6,3.7,3.7	C67.6,63.5,66,65.2,64,65.2z M69,60.7c-0.3-2.4-2.2-4.2-4.6-4.4c0,0,0,0-0.1,0c-0.1,0-0.1,0-0.2,0c-0.1,0-0.2,0-0.2,0	c-0.1,0-0.2,0-0.2,0c-0.1,0-0.1,0-0.2,0c0,0,0,0-0.1,0c-2.4,0.2-4.3,2-4.6,4.4h-2.3v-7.3v-1.5V37.3H64c0.2,0,0.5,0.1,0.7,0.3	l1.1,1.2h-5.7c-0.7,0-1.2,0.6-1.2,1.2v7.8c0,0.7,0.6,1.2,1.2,1.2h11.2v3.7h-3.7c-0.4,0-0.7,0.3-0.7,0.7s0.3,0.7,0.7,0.7h3.7v6.6	L69,60.7L69,60.7z"/>
							<path d="M37.5,60c-0.8,0-1.5,0.7-1.5,1.5c0,0.8,0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5C39,60.7,38.3,60,37.5,60z"/>
							<path
								d="M64,60c-0.8,0-1.5,0.7-1.5,1.5c0,0.8,0.7,1.5,1.5,1.5c0.8,0,1.5-0.7,1.5-1.5C65.4,60.7,64.8,60,64,60z"/>
						</g>
					</svg>
					<div class="feature-block__text-block">
						<h4 class="feature-block__h4">Технические ресурсы</h4>
						<p class="feature-block__text">В нашем распоряжении большой автопарк различной техники для перевозки</p>
						<a href="features.html" target="_blank" class="feature-block__link feature-block__link--hidden">Подробнее</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="quote">
		<div class="main-container">
			<div class="section-headers section-headers--quote">
				<h2 class="section-headers__h2">Форма заявки</h2>
				<h4 class="section-headers__h4">Расчёт цены и сроков</h4>
			</div>
			<form>
				<div class="quote__form">
					<fieldset class="quote__item-wrapper">
						<div class="quote__item">
							<input class="quote__text-input" type="tel" name="Name" id="Name" required>
							<label class="quote__label" for="Name">Ваше имя</label>
						</div>
						<div class="quote__item">
							<input class="quote__text-input" type="tel" name="Phone" id="Phone" required>
							<label class="quote__label" for="Phone">Номер телефона</label>
						</div>
						<div class="quote__item">
							<input class="quote__text-input" type="email" name="Mail" id="Mail" required>
							<label class="quote__label" for="Mail">Электронная почта</label>
						</div>
					</fieldset>
					<fieldset class="quote__item-wrapper">
						<div class="quote__item">
							<input class="quote__text-input" type="text" name="From" id="From" required>
							<label class="quote__label" for="From">Откуда забрать груз</label>
						</div>
						<div class="quote__item">
							<input class="quote__text-input" type="text" name="To" id="To" required>
							<label class="quote__label" for="To">Куда отвезти груз</label>
						</div>
						<div class="quote__item">
							<textarea class="quote__text-input" name="Message" id="Message" rows="1" required></textarea>
							<label class="quote__label" for="Message">Комментарии</label>
						</div>
					</fieldset>
				</div>
				<button type="submit" class="standart-button">Оставить заявку</button>
			</form>
		</div>
	</section>
	<section class="facts">
		<div class="main-container">
			<div class="section-headers">
				<h2 class="section-headers__h2">Возможности</h2>
				<h4 class="section-headers__h4">Что мы предлагаем</h4>
			</div>
			<div class="facts__text-block">
				<div class="facts__item facts__item--full">
					<h4 class="facts__item-header">Перевезём ваш груз в любую точку России</h4>
					<p class="facts__item-text">Для нас нет ограничений по территориям и районам, по типам местности или
						погодным условиям. В любых, даже самых сложных, случаях мы эффективно и в оговоренные сроки доставляем
						ваши отправления. Грязь, слякость, колея или даже полное отсутствие дороги - не имеет значения. Есть
						транспорт. Есть груз. Есть задача перевезти - мы перевезём</p>
				</div>
				<div class="facts__item">
					<div class="circle"><strong><i></i></strong></div>
					<div class="facts__text-wrapper">
						<h4 class="facts__item-header">Крупнотоннажные<br> перевозки</h4>
						<p class="facts__item-text">Перевозка больших по массе, но компактных по габаритам грузов</p>
					</div>
				</div>
				<div class="facts__item">
					<div class="circle circle--second"><strong><i></i></strong></div>
					<div class="facts__text-wrapper">
						<h4 class="facts__item-header">Негабаритные<br> перевозки</h4>
						<p class="facts__item-text">Транспортировка тяжелых и больших по габаритам изделий и техники</p>
					</div>
				</div>
				<div class="facts__item">
					<div class="circle circle--third"><strong><i></i></strong></div>
					<div class="facts__text-wrapper">
						<h4 class="facts__item-header">Проектные<br> перевозки</h4>
						<p class="facts__item-text">Перевозка оборудования и оснащения предприятий в рамках проекта</p>
					</div>
				</div>
				<div class="facts__item">
					<div class="circle circle--fourth"><strong><i></i></strong></div>
					<div class="facts__text-wrapper">
						<h4 class="facts__item-header">Мультимодальные<br> перевозки</h4>
						<p class="facts__item-text">Смешанный тип перевозки с применением оптимальных видов транспорта</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="map">
		<div class="main-container">
			<div class="section-headers">
				<h2 class="section-headers__h2">Регионы</h2>
				<h4 class="section-headers__h4">Где мы работаем</h4>
			</div>
		</div>
		<div class="map__block map__block--main"></div>
	</section>
	<section class="clients">
		<div class="main-container">
			<div class="section-headers">
				<h2 class="section-headers__h2">Партнёры</h2>
				<h4 class="section-headers__h4">Нам доверяют компании</h4>
			</div>
			<div class="clients__slider">
				<img src="img/company/bke.png">
				<img src="img/company/cck.png">
				<img src="img/company/gzp-bur.png">
				<img src="img/company/igs.png">
				<img src="img/company/ng.png">
				<img src="img/company/gzp-n.png">
				<img src="img/company/nobel.png">
				<img src="img/company/gzp-snab.png">
				<img src="img/company/sgk.png">
				<img src="img/company/sn.png">
				<img src="img/company/suek.png">
				<img src="img/company/gzp-rem.png">
			</div>
		</div>
	</section>
	<section class="address">
		<div class="main-container">
			<div class="address__item-wrapper">
				<div class="address__item">
					<h3 class="address__item-header">Главный<br> офис</h3>
					<div class="address__text-block">
						<p class="address__text">г. Москва, ул. Советская, д. 24</p>
						<a href="tel:88008008000" class="address__text address__text--contact address__text--phone">8 (800)
							800-80-00</a>
						<a href="mailto:mainoffice@transera.com" class="address__text address__text--contact">mainoffice@transera.com</a>
					</div>
				</div>
				<div class="address__item">
					<h3 class="address__item-header">Дополнительный<br> офис</h3>
					<div class="address__text-block">
						<p class="address__text">г. Москва, ул. Советская, д. 24</p>
						<a href="tel:88008008000" class="address__text address__text--contact address__text--phone">8 (800)
							800-80-00</a>
						<a href="mailto:mainoffice@transera.com" class="address__text address__text--contact">mainoffice@transera.com</a>
					</div>
				</div>
				<div class="address__item">
					<h3 class="address__item-header">Дополнительный<br> офис</h3>
					<div class="address__text-block">
						<p class="address__text">г. Москва, ул. Советская, д. 24</p>
						<a href="tel:88008008000" class="address__text address__text--contact address__text--phone">8 (800)
							800-80-00</a>
						<a href="mailto:mainoffice@transera.com" class="address__text address__text--contact">mainoffice@transera.com</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<footer class="footer">
	<div class="main-container">
		<div class="footer__wrapper">
			<div class="footer__item">
				<picture>
					<source media="(min-width: 700px)" srcset="./img/logo.svg">
					<img src="./img/logo.svg" alt="Pink" width="100" height="50">
				</picture>
			</div>
			<div class="footer__item">
				<p class="footer__designed-by">&copy; S.Terki Inc.</p>
			</div>
			<div class="footer__item footer__item--social">
				<a class="footer__social" href="#">
					<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 455.7 455.7"
					     style="enable-background:new 0 0 455.7 455.7;" width="30" height="30">
						<path class="st0"
						      d="M310.3,227.5h-53.2v194.8h-80.6V227.5h-38.3V159h38.3v-44.3c0-31.7,15.1-81.3,81.3-81.3l59.7,0.2v66.5h-43.3 c-7.1,0-17.1,3.5-17.1,18.7v40.3h60.2L310.3,227.5z"/>
					</svg>
				</a>
				<a class="footer__social" href="#">
					<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 455.7 455.7"
					     style="enable-background:new 0 0 455.7 455.7;" width="30" height="30">
						<path class="st0"
						      d="M325.2,31.4H130.5c-54.7,0-99.2,44.5-99.2,99.2v194.7c0,54.7,44.5,99.2,99.2,99.2h194.7 c54.7,0,99.2-44.5,99.2-99.2V130.5C424.4,75.8,379.9,31.4,325.2,31.4z M381.7,325.1c0,31.1-25.3,56.3-56.3,56.3H130.6	c-31.1,0-56.3-25.3-56.3-56.3V130.4c0-31.1,25.3-56.3,56.3-56.3h194.7c31.1,0,56.3,25.3,56.3,56.3V325.1z"/>
						<path class="st0"
						      d="M329.2,150.6c-13.2,0-24-10.7-24-24s10.7-24,24-24c13.3,0,24,10.7,24,24S342.3,150.6,329.2,150.6z"/>
						<path class="st0"
						      d="M228,126.6c-55.8,0-101.2,45.4-101.2,101.2S172.1,329.1,228,329.1c55.7,0,101.2-45.5,101.2-101.2	C329.2,171.9,283.8,126.6,228,126.6z M228,286.1c-32.2,0-58.4-26.2-58.4-58.4s26.2-58.4,58.4-58.4s58.4,26.2,58.4,58.4	C286.4,260.1,260.2,286.1,228,286.1z"/>
					</svg>
				</a>
				<a class="footer__social" href="#">
					<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 455.7 455.7"
					     style="enable-background:new 0 0 455.7 455.7;" width="30" height="30">
						<path class="st0"
						      d="M227.9,110.2c19.7,0,35.8,16.1,35.8,35.8s-16.1,35.8-35.8,35.8s-35.8-16.1-35.8-35.8 C192.1,126.2,208.1,110.2,227.9,110.2z M227.9,232.4c47.7,0,86.4-38.8,86.4-86.4c0-47.7-38.8-86.4-86.4-86.4	c-47.7,0-86.4,38.8-86.4,86.4C141.4,193.6,180.2,232.4,227.9,232.4"/>
						<path class="st0"
						      d="M262.8,304.6c17.6-4,34.6-11,50.2-20.8c11.8-7.5,15.4-23.1,7.9-34.9c-7.4-11.8-23.1-15.4-34.9-8		c-35.4,22.3-81,22.2-116.4,0c-11.8-7.5-27.5-3.9-34.9,8c-7.5,11.8-3.9,27.5,7.9,34.9c15.6,9.8,32.6,16.8,50.2,20.8L144.6,353	c-9.9,9.9-9.9,25.9,0,35.8c4.9,4.9,11.4,7.4,17.9,7.4s13-2.5,17.9-7.4l47.5-47.5l47.5,47.5c9.9,9.9,25.9,9.9,35.8,0	s9.9-25.9,0-35.8L262.8,304.6"/>
					</svg>
				</a>
				<a class="footer__social" href="#">
					<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 455.7 455.7"
					     style="enable-background:new 0 0 455.7 455.7;" width="30" height="30">
						<path class="st0"
						      d="M102.1,125.8c12.5,30.9,28.4,60.1,49.3,86.2c2.8,3.4,6.3,6.5,10,9.1c5.4,3.7,10.4,2.4,12.6-3.8 c2.3-6.4,4.5-19.5,4.6-26.4c0.3-17.7,0-29.3-1-47c-0.6-11.3-4.7-21.3-21.3-24.3c-5.2-0.9-5.6-5.2-2.3-9.4	c6.9-8.8,16.5-10.2,26.8-10.8c16.9-0.9,33.8-0.1,50.7,0c6.9,0.1,13.8,0.6,20.5,2.1c8.8,1.9,13.5,8.1,15,16.7	c0.8,4.5,1.1,9.1,1,13.5c-0.5,19.4-1.4,38.6-1.6,58c-0.1,7.6,0.5,15.4,2.1,22.7c2.3,10.3,9.3,12.8,16.4,5.4	c9.1-9.4,17.1-20.1,24.6-30.8c13.6-19.6,23.8-41.2,32.7-63.4c4.6-11.5,8-14,20.4-14c23.2,0,46.3-0.1,69.6,0c4.1,0,8.4,0.5,12.3,1.6	c6.3,2.1,8.8,7.1,7.3,13.6c-3.4,15.2-11.7,28.2-20.5,40.7c-14.2,20.1-29,39.5-43.6,59.4c-1.8,2.5-3.4,5.2-5,7.9	c-5.4,9.9-5,15.4,2.9,23.5c12.6,13,26.1,25.2,38.3,38.5c8.8,9.7,17.1,20.3,24.1,31.4c8.9,14,3.4,27.3-13.2,29.6	c-10.4,1.5-61.4,0-64.1,0c-13.8-0.1-25.8-4.8-35.4-14.1c-10.8-10.4-20.5-21.8-30.9-32.6c-3.1-3.2-6.4-6.4-10.1-9.2	c-8.5-6.4-16.7-5-20.7,4.9c-3.3,8.5-6.3,30.9-6.4,32.9c-0.7,10-7.1,16.4-18.3,17c-32.3,1.7-63.7-1.8-93-17.5	c-24.8-13.3-44.6-32-61.7-53.9c-27.2-34.7-48.7-72.9-68.3-112.2c-1-2.1-20.9-44.4-21.4-46.3c-1.7-6.6-0.1-13.1,5.5-15.2	c3.6-1.4,69,0,70.2,0C90.5,110.5,97.6,114.9,102.1,125.8z"/>
					</svg>
				</a>
			</div>
		</div>
	</div>
</footer>

<!-- modal window call back -->
<div class="modal-window">
  <form>
    <div class="modal-window__close-form">&#735;</div>
    <h4 class="modal-window__header">Введите свой телефон и мы перезвоним вам в течение 5 минут</h4>
    <input type="hidden" name="utm_source" value="<?= $_GET['utm_source'] ?>">
    <input type="hidden" name="utm_medium" value="<?= $_GET['utm_medium'] ?>">
    <input type="hidden" name="utm_term" value="<?= $_GET['utm_term'] ?>">
    <input type="hidden" name="utm_campaign" value="<?= $_GET['utm_campaign'] ?>">
    <input type="hidden" name="source" value="<?= $_SERVER['HTTP_HOST'] ?>">
    <div class="quote__form">
      <fieldset class="quote__item-wrapper">
        <div class="quote__item">
          <input class="quote__text-input" type="tel" name="Phone" required>
          <label class="quote__label" for="Phone">Номер телефона</label>
        </div>
      </fieldset>
    </div>
    <div class="message"></div>
    <button id="submit-order" type="submit" class="standart-button standart-button--submit">Оставить заявку</button>
  </form>
</div>

<script src="js/jquery.js"></script>
<script src="js/vegas.js"></script>
<script src="js/circle-progress.js"></script>
<script src="js/jquery-jvectormap-2.0.3.min.js"></script>
<script src="js/map.js"></script>
<script src="js/slick.js"></script>
<script src="js/magnific-gallery.js"></script>
<script src="js/vectormap.js"></script>
<script src="js/script.js"></script>
</body>
</html>