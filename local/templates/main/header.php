<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}
?><!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><? $APPLICATION->ShowTitle() ?></title>

		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
		<link href="css/style.css" rel="stylesheet" />

		<?
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery-1.11.3.min.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.form.min.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.maskedinput.min.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.hoverIntent.minified.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery-ui.min.js');
		$APPLICATION->AddHeadScript('https://maps.googleapis.com/maps/api/js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.cycle2.min.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/masonry.pkgd.min.js');

		$APPLICATION->ShowHead();
		$page_url = $APPLICATION->GetCurPage();
		$APPLICATION->ShowPanel();
		?>
	</head>
	<body>
		<div class="page-wrapper <?= '/' != $page_url ? ' page-wrapper--inner' : ''; ?>">
			<div class="main">
			<? if ('/' == $page_url): ?>
				<header class="header">
					<div class="video-wrapper">
						<video poster="" autoplay="autoplay" loop="loop" preload="auto" muted>
							<source src="<?=SITE_TEMPLATE_PATH?>/vid/musory_net.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
							<source src="<?=SITE_TEMPLATE_PATH?>/vid/musory_net.webm" type='video/webm; codecs="vp8, vorbis"'>
							<source src="<?=SITE_TEMPLATE_PATH?>/vid/musory_net.ogv" type='video/ogg; codecs="theora, vorbis"'>
						</video>
					</div>
					<div class="header__content">
						<div class="header__top">
							<div class="header__nav-group js-nav-wrapper">
								<a href="/" class="header__logo-wrapper">
									<div class="header__logo absl-cntr-x"></div>
								</a>
								<nav class="header__nav-wrapper">
									<ul class="header__nav-list">
										<li class="header__nav-item">
											<a href="#" class="header__nav-link js-nav-link">
												Виды деятельности
											</a>
										</li>
										<li class="header__nav-item">
											<a href="#" class="header__nav-link js-nav-link">
												О компании
											</a>
										</li>
										<li class="header__nav-item">
											<a href="#" class="header__nav-link js-nav-link">
												Документы
											</a>
										</li>
										<li class="header__nav-item js-nav-out">
											<a href="#" class="header__nav-link">
												Стоимость услуг
											</a>
										</li>
										<li class="header__nav-item js-nav-out">
											<a href="#" class="header__nav-link">
												Статьи
											</a>
										</li>
									</ul>
								</nav>
								<div class="header-submenu js-nav-submenu">
									<span class="header-submenu__close js-submenu-close"></span>
									<ul class="header-submenu__list">
										<li class="header-submenu__item">
											<a href="/services/sm" class="header-submenu__link">
												Вывоз строительного мусора
											</a>
										</li>
										<li class="header-submenu__item">
											<a href="/services/tbo" class="header-submenu__link">
												Вывоз ТБО и промышленного мусора
											</a>
										</li>
										<li class="header-submenu__item">
											<a href="/services/vkgm" class="header-submenu__link">
												Вывоз крупногабаритного мусора
											</a>
										</li>
										<li class="header-submenu__item">
											<a href="/services/hlam" class="header-submenu__link">
												Вывоз хлама и смешанного мусора
											</a>
										</li>
										<li class="header-submenu__item">
											<a href="/services/soil" class="header-submenu__link">
												Вывоз грунта
											</a>
										</li>
										<li class="header-submenu__item">
											<a href="/services/snow" class="header-submenu__link">
												Вывоз снега
											</a>
										</li>
									</ul>
									<ul class="header-submenu__list">
										<li class="header-submenu__item">
											<a href="/about/history" class="header-submenu__link">
												История компании
											</a>
										</li>
										<li class="header-submenu__item">
											<a href="/about/mission" class="header-submenu__link">
												Миссия и цености
											</a>
										</li>
										<li class="header-submenu__item">
											<a href="/about/park" class="header-submenu__link">
												Парк техники
											</a>
										</li>
										<li class="header-submenu__item">
											<a href="/about/faq" class="header-submenu__link">
												FAQ
											</a>
										</li>
										<li class="header-submenu__item">
											<a href="/about/contacts" class="header-submenu__link">
												Контакты
											</a>
										</li>
										<li class="header-submenu__item">
											<a href="#" class="header-submenu__link">
												Карта сайта
											</a>
										</li>
									</ul>
									<ul class="header-submenu__list">
										<li class="header-submenu__item">
											<a href="/docs/table" class="header-submenu__link">
												Таблица плотности<br>
												твердых материалов
											</a>
										</li>
										<li class="header-submenu__item">
											<a href="/docs/producers" class="header-submenu__link">
												Поставщикам
											</a>
										</li>
										<li class="header-submenu__item">
											<a href="#" class="header-submenu__link header-submenu__link--download">
												Договор на вывоз мусора
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="header__feedback-group">
								<a href="tel:+79859999089" class="header__tel">
									8 985 9999 089
								</a>
								<a href="#" class="header__lang">
									English version:
								</a>
								<a href="#" class="header__mail-link js-popup-open">
									Написать нам:
								</a>
								<div class="header__social-group">
									<div class="header__social-title">
										Компания в деловых соц. сетях:
									</div>
									<div class="header__social-list">
										<a href="#" class="header__social-item header__social-item--in"></a>
										<a href="#" class="header__social-item header__social-item--gg"></a>
										<a href="#" class="header__social-item header__social-item--tw"></a>
										<a href="#" class="header__social-item header__social-item--fb"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="header__main">
							<h1 class="header__title">
								MUSORY-NET помогает бизнесу<br>
								сфокусироваться на главном
							</h1>
							<a href="#" class="header__link-to-form button-fill js-to-step-form">
								Оставить заявку на вывоз
							</a>
							<div class="header__scroll-down">
								<span class="header__scroll-down-mouse"></span><br>
								Прокрутите вниз
							</div>
						</div>
					</div>
					<div class="header-form-wrapper js-header-form-wrapper">
						<span class="header-form-wrapper__close js-popup-close"></span>
						<form action="" class="fancy-form js-form" method="POST">
							<div class="fancy-form__content js-form-content">
								<div class="fancy-form__title">
									Обратная связь
								</div>
								<div class="fancy-form__field js-fancy-field">
									<label class="fancy-form__label" for="header-input"> Введите Имя</label>
									<input class="fancy-form__input" id="header-input" required="required" type="text" autocomplete="off">
								</div>
								<div class="fancy-form__field js-fancy-field">
									<label class="fancy-form__label" for="header-phone"> Введите номер телефона</label>
									<input class="fancy-form__input js-phone" id="header-phone" required="required" type="text" autocomplete="off">
								</div>
								<div class="fancy-form__field js-fancy-field">
									<label class="fancy-form__label" for="header-email"> Электронная почта</label>
									<input class="fancy-form__input" id="header-email" required="required" type="email" autocomplete="off">
								</div>
								<div class="fancy-form__field js-fancy-field">
									<label class="fancy-form__label" for="header-mess"> Ваш комментарий</label>
									<textarea class="fancy-form__input" id="header-mess" required="required" type="text" autocomplete="off"></textarea>
								</div>
								<input type="submit" class="fancy-form__submit button-fill" value="Отправить запрос">
								<div class="fancy-form__info">
									или пишите на<br>
									<a href="mailto:biz@musory-net.ru" class="fancy-form__info-mail">biz@musory-net.ru</a>
								</div>
							</div>
							<div class="fancy-form__success js-form-success">
								<div class="fancy-form__success-text">
									Благодарим Вас за оформление<br>
									заявки в нашей компании!
								</div>
								<div class="fancy-form__success-img"></div>
							</div>
						</form>
					</div>
				</header>
			<? else: ?>
				<header class="inner-header">
                    <div class="inner-header__content clearfix js-nav-wrapper">
                        <a href="/" class="inner-header__logo-wrapper">
                            <span class="inner-header__logo"></span>
                        </a>
                        <div class="inner-header__right-part">
                            <a href="tel:+79859999089" class="inner-header__phone">
                                8 985 9999 089
                            </a>
                            <button class="inner-header__submenu-link c-hamburger c-hamburger--htx js-inner-nav-link">
                                <span>toggle menu</span>
                            </button>
                        </div>
                        <div class="header-submenu header-submenu--inner js-nav-submenu">
                            <div class="header-submenu__list-headings">
                                <div class="header-submenu__list-heading">
                                    Виды деятельности
                                </div>
                                <div class="header-submenu__list-heading">
                                    О компании
                                </div>
                                <div class="header-submenu__list-heading">
                                    Документы
                                </div>
                            </div>
                            <ul class="header-submenu__list">
                                <li class="header-submenu__item">
                                    <a href="/services/sm" class="header-submenu__link">
                                        Вывоз строительного мусора
                                    </a>
                                </li>
                                <li class="header-submenu__item">
                                    <a href="/services/tbo" class="header-submenu__link">
                                        Вывоз ТБО и промышленного мусора
                                    </a>
                                </li>
                                <li class="header-submenu__item">
                                    <a href="/services/vkgm" class="header-submenu__link">
                                        Вывоз крупногабаритного мусора
                                    </a>
                                </li>
                                <li class="header-submenu__item">
                                    <a href="/services/hlam" class="header-submenu__link">
                                        Вывоз хлама и смешанного мусора
                                    </a>
                                </li>
                                <li class="header-submenu__item">
                                    <a href="/services/soil" class="header-submenu__link">
                                        Вывоз грунта
                                    </a>
                                </li>
                                <li class="header-submenu__item">
                                    <a href="/services/snow" class="header-submenu__link">
                                        Вывоз снега
                                    </a>
                                </li>
                            </ul>
                            <ul class="header-submenu__list">
                                <li class="header-submenu__item">
                                    <a href="/about/history" class="header-submenu__link">
                                        История компании
                                    </a>
                                </li>
                                <li class="header-submenu__item">
                                    <a href="/about/mission" class="header-submenu__link">
                                        Миссия и цености
                                    </a>
                                </li>
                                <li class="header-submenu__item">
                                    <a href="/about/park" class="header-submenu__link">
                                        Парк техники
                                    </a>
                                </li>
                                <li class="header-submenu__item">
                                    <a href="/about/faq" class="header-submenu__link">
                                        FAQ
                                    </a>
                                </li>
                                <li class="header-submenu__item">
                                    <a href="/about/contacts" class="header-submenu__link">
                                        Контакты
                                    </a>
                                </li>
                                <li class="header-submenu__item">
                                    <a href="#" class="header-submenu__link">
                                        Карта сайта
                                    </a>
                                </li>
                            </ul>
                            <ul class="header-submenu__list">
                                <li class="header-submenu__item">
                                    <a href="/docs/table" class="header-submenu__link">
                                        Таблица плотности<br>
                                        твердых материалов
                                    </a>
                                </li>
                                <li class="header-submenu__item">
                                    <a href="/docs/producers" class="header-submenu__link">
                                        Поставщикам
                                    </a>
                                </li>
                                <li class="header-submenu__item">
                                    <a href="#" class="header-submenu__link header-submenu__link--download">
                                        Договор на вывоз мусора
                                    </a>
                                </li>
                            </ul>
                            <div class="header-submenu__soc-block">
                                <a href="#" class="header__lang header__lang--inner">
                                    English version:
                                </a><br>
                                <a href="#" class="header__mail-link header__mail-link--inner js-popup-open">
                                    Написать нам:
                                </a>
                                <div class="header__social-group">
                                    <div class="header__social-title header__social-title--inner">
                                        Компания в деловых соц. сетях:
                                    </div>
                                    <div class="footer__social-list">
                                        <a href="#" class="footer__social-item footer__social-item--in"></a>
                                        <a href="#" class="footer__social-item footer__social-item--gg"></a>
                                        <a href="#" class="footer__social-item footer__social-item--tw"></a>
                                        <a href="#" class="footer__social-item footer__social-item--fb"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-form-wrapper js-header-form-wrapper">
                        <span class="header-form-wrapper__close js-popup-close"></span>
                        <form action="" class="fancy-form js-form" method="POST">
                            <div class="fancy-form__content js-form-content">
                                <div class="fancy-form__title">
                                    Обратная связь
                                </div>
                                <div class="fancy-form__field js-fancy-field">
                                    <label class="fancy-form__label" for="header-input"> Введите Имя</label>
                                    <input class="fancy-form__input" id="header-input" required="required" type="text" autocomplete="off">
                                </div>
                                <div class="fancy-form__field js-fancy-field">
                                    <label class="fancy-form__label" for="header-phone"> Введите номер телефона</label>
                                    <input class="fancy-form__input js-phone" id="header-phone" required="required" type="text" autocomplete="off">
                                </div>
                                <div class="fancy-form__field js-fancy-field">
                                    <label class="fancy-form__label" for="header-email"> Электронная почта</label>
                                    <input class="fancy-form__input" id="header-email" required="required" type="email" autocomplete="off">
                                </div>
                                <div class="fancy-form__field js-fancy-field">
                                    <label class="fancy-form__label" for="header-mess"> Ваш комментарий</label>
                                    <textarea class="fancy-form__input" id="header-mess" required="required" type="text" autocomplete="off"></textarea>
                                </div>
                                <input type="submit" class="fancy-form__submit button-fill" value="Отправить запрос">
                                <div class="fancy-form__info">
                                    или пишите на<br>
                                    <a href="mailto:biz@musory-net.ru" class="fancy-form__info-mail">biz@musory-net.ru</a>
                                </div>
                            </div>
                            <div class="fancy-form__success js-form-success">
                                <div class="fancy-form__success-text">
                                    Благодарим Вас за оформление<br>
                                    заявки в нашей компании!
                                </div>
                                <div class="fancy-form__success-img"></div>
                            </div>
                        </form>
                    </div>
                </header>
            <? endif; ?>