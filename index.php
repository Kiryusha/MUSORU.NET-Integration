<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("MUSORY-NET.RU");
?>

<section class="step-form-wrapper">
    <form action="" class="step-form js-step-form js-form" method="POST">
        <div class="step-form-progress-wrapper">
            <div class="step-form-progress js-step-progress"></div>
        </div>
        <div class="step-form__inner">
            <h2 class="step-form__title section-title">
                Онлайн-заявка на вывоз
            </h2>
            <div class="step-form-nav js-step-form-nav clearfix">
                <div class="step-form-nav__step js-step-nav step-form-nav__step--active">
                    <span class="step-form-nav__step-number">
                        1
                    </span>
                    <span class="step-form-nav__step-text">
                        Выбор типа
                    </span>
                </div>
                <div class="step-form-nav__step js-step-nav">
                    <span class="step-form-nav__step-number">
                        2
                    </span>
                    <span class="step-form-nav__step-text">
                        Выбор места
                    </span>
                </div>
                <div class="step-form-nav__step js-step-nav">
                    <span class="step-form-nav__step-number">
                        3
                    </span>
                    <span class="step-form-nav__step-text">
                        Расчет кол-ва необходимых<br>
                        контейнеров
                    </span>
                </div>
                <div class="step-form-nav__step js-step-nav">
                    <span class="step-form-nav__step-number">
                        4
                    </span>
                    <span class="step-form-nav__step-text">
                        Завершение оформления
                    </span>
                </div>
            </div>
            <div class="step-form__steps">

                <div class="step-form-step js-single-step">

                    <div class="step-form-step__title">
                        Пожалуйста, выберите тип мусора, который необходимо вывезти
                    </div>
                    <div class="step-form-step__content">
                        <div class="step-form-step__trash-type-block">
                            <div class="trash-type-item js-trash-item">
                                <div class="trash-type-item__img trash-type-item__img--type-1"></div>
                                <div class="trash-type-item__title">
                                    Строительный мусор
                                </div>
                                <div class="trash-type-item__success js-trash-success">
                                    <div class="trash-type-item__success-img absl-cntr"></div>
                                    <div class="trash-type-item__success-close js-trash-close"></div>
                                </div>
                                <input type="hidden" class="trash-type-item__input js-trash-value" value="Строительный мусор">
                            </div>
                            <div class="trash-type-item js-trash-item">
                                <div class="trash-type-item__img trash-type-item__img--type-2"></div>
                                <div class="trash-type-item__title">
                                    ТБО и промышленный<br>
                                    мусор
                                </div>
                                <div class="trash-type-item__success js-trash-success">
                                    <div class="trash-type-item__success-img absl-cntr"></div>
                                    <div class="trash-type-item__success-close js-trash-close"></div>
                                </div>
                                <input type="hidden" class="trash-type-item__input js-trash-value" value="ТБО и промышленный мусор">
                            </div>
                            <div class="trash-type-item js-trash-item">
                                <div class="trash-type-item__img trash-type-item__img--type-3"></div>
                                <div class="trash-type-item__title">
                                    Грунт
                                </div>
                                <div class="trash-type-item__success js-trash-success">
                                    <div class="trash-type-item__success-img absl-cntr"></div>
                                    <div class="trash-type-item__success-close js-trash-close"></div>
                                </div>
                                <input type="hidden" class="trash-type-item__input js-trash-value" value="Грунт">
                            </div>
                            <div class="trash-type-item js-trash-item">
                                <div class="trash-type-item__img trash-type-item__img--type-4"></div>
                                <div class="trash-type-item__title">
                                    Смешанный мусор
                                </div>
                                <div class="trash-type-item__success js-trash-success">
                                    <div class="trash-type-item__success-img absl-cntr"></div>
                                    <div class="trash-type-item__success-close js-trash-close"></div>
                                </div>
                                <input type="hidden" class="trash-type-item__input js-trash-value" value="Смешанный мусор">
                            </div>
                            <div class="trash-type-item js-trash-item">
                                <div class="trash-type-item__img trash-type-item__img--type-5"></div>
                                <div class="trash-type-item__title">
                                    Крупногабаритный<br>
                                    мусор
                                </div>
                                <div class="trash-type-item__success js-trash-success">
                                    <div class="trash-type-item__success-img absl-cntr"></div>
                                    <div class="trash-type-item__success-close js-trash-close"></div>
                                </div>
                                <input type="hidden" class="trash-type-item__input js-trash-value" value="Крупногабаритный мусор">
                            </div>
                            <div class="trash-type-item js-trash-item">
                                <div class="trash-type-item__img trash-type-item__img--type-6"></div>
                                <div class="trash-type-item__title">
                                    Снег
                                </div>
                                <div class="trash-type-item__success js-trash-success">
                                    <div class="trash-type-item__success-img absl-cntr"></div>
                                    <div class="trash-type-item__success-close js-trash-close"></div>
                                </div>
                                <input type="hidden" class="trash-type-item__input js-trash-value" value="Снег">
                            </div>
                        </div>
                        <span class="step-form-step__next button-fill js-next-step button-disabled">
                            Следующий шаг
                        </span>
                    </div>

                </div>

                <div class="step-form-step js-single-step">

                    <div class="step-form-step__title">
                        Откуда необходимо вывезти мусор
                    </div>
                    <div class="step-form-step__content">
                        <div class="step-form-step__district-names-container">
                            <span class="district-name district-name--zao js-district-name" data-path="ЗАО">ЗАО</span>
                            <span class="district-name district-name--szao js-district-name" data-path="СЗАО">СЗАО</span>
                            <span class="district-name district-name--sao js-district-name" data-path="САО">САО</span>
                            <span class="district-name district-name--svao js-district-name" data-path="СВАО">СВАО</span>
                            <span class="district-name district-name--vao js-district-name" data-path="ВАО">ВАО</span>
                            <span class="district-name district-name--uvao js-district-name" data-path="ЮВАО">ЮВАО</span>
                            <span class="district-name district-name--uao js-district-name" data-path="ЮАО">ЮАО</span>
                            <span class="district-name district-name--uzao js-district-name" data-path="ЮЗАО">ЮЗАО</span>
                            <span class="district-name district-name--kor js-district-name" data-path="Королев">Королев</span>
                            <span class="district-name district-name--sch js-district-name" data-path="Щёлково">Щёлково</span>
                            <span class="district-name district-name--mit js-district-name" data-path="Мытищи">Мытищи</span>
                            <span class="district-name district-name--reu js-district-name" data-path="Реутов">Реутов</span>
                            <span class="district-name district-name--lub js-district-name" data-path="Люберцы">Люберцы</span>
                            <span class="district-name district-name--bal js-district-name" data-path="Балашиха">Балашиха</span>
                            <span class="district-name district-name--kot js-district-name" data-path="Котельники">Котельники</span>
                            <span class="district-name district-name--dze js-district-name" data-path="Дзержинский">Дзержинский</span>
                            <span class="district-name district-name--lit js-district-name" data-path="Лыткарино">Лыткарино</span>
                            <span class="district-name district-name--okt js-district-name" data-path="Октябрьский">Октябрьский</span>
                            <span class="district-name district-name--him js-district-name" data-path="Химки">Химки</span>
                            <span class="district-name district-name--but js-district-name" data-path="Бутово">Бутово</span>
                            <span class="district-name district-name--vid js-district-name" data-path="Видное">Видное</span>
                            <span class="district-name district-name--dol js-district-name" data-path="Долгопрудный">Долгопрудный</span>
                            <span class="district-name district-name--kra js-district-name" data-path="Красногорск">Красногорск</span>
                            <span class="district-name district-name--jez js-district-name" data-path="Железнодорожный">Железнодорожный</span>
                            <span class="district-name district-name--cao js-district-name" data-path="ЦАО">ЦАО</span>
                        </div>
                        <div class="step-form-step__map" id="map"></div>
                        <script src="/local/templates/main/js/raphael-min.js"></script>
                        <script src="/local/templates/main/js/map2.js"></script>
                        <div class="step-district">
                            <div class="step-district__title">
                                Выбранные районы:
                            </div>
                            <div class="step-district__list js-district-list"></div>
                            <div class="add-dist-block js-add-dist-block">
                                <div class="add-dist-block__title">
                                    Если Вы не нашли на карте Ваш район - впишите его самостоятельно:
                                </div>
                                <input type="text" class="add-dist-block__input" placeholder="Впишите название района" val="" name="ST_DIST[]">
                            </div>
                        </div>
                        <span class="step-form-step__prev button-fill js-prev-step">
                            Назад
                        </span>
                        <span class="step-form-step__next button-fill js-next-step button-disabled">
                            Следующий шаг
                        </span>
                    </div>

                </div>

                <div class="step-form-step js-single-step">

                    <div class="step-form-step__title">
                        Выберите необходимое кол-во контейнеров
                    </div>
                    <div class="step-form-step__content">

                        <div class="step-cont-type-block">
                            <div class="step-cont-type js-cont-type">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/cont8m.png" alt="" class="step-cont-type__img">
                                <div class="step-cont-type__title">
                                    8м<sup>3</sup>
                                </div>
                                <div class="step-cont-type__success js-trash-success">
                                    <div class="step-cont-type__success-img absl-cntr"></div>
                                </div>
                            </div>
                            <div class="step-cont-type js-cont-type">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/cont20m.png" alt="" class="step-cont-type__img">
                                <div class="step-cont-type__title">
                                    20м<sup>3</sup>
                                </div>
                                <div class="step-cont-type__success js-trash-success">
                                    <div class="step-cont-type__success-img absl-cntr"></div>
                                </div>
                            </div>
                            <div class="step-cont-type js-cont-type">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/cont27m.png" alt="" class="step-cont-type__img">
                                <div class="step-cont-type__title">
                                    27м<sup>3</sup>
                                </div>
                                <div class="step-cont-type__success js-trash-success">
                                    <div class="step-cont-type__success-img absl-cntr"></div>
                                </div>
                            </div>
                        </div>

                        <div class="cont-type-slider">
                            <div class="cont-type-slider__item js-cont-slide">
                                <div class="cont-type-slider__img-wrapper">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/cont8m.png" alt="" class="cont-type-slider__img">
                                </div>
                                <div class="cont-type-slider__text-block">
                                    <div class="cont-type-slider__text">
                                        Контейнер объемом 8 м3 используется для любого типа мусора при погрузке не превышающего 10 тонн (в расчете на один контейнер). Зачастую, контейнер данного объема используется для небольших территорий с ограниченным въездом или ограничивающими дорожными знаками. Крайне удобен при ручной погрузке мусора.
                                    </div>
                                    <div class="cont-type-slider__input-wrapper">
                                        <div class="cont-type-slider__input-wrapper-text">
                                            Количество контейнеров:
                                        </div>
                                        <input type="hidden" class="cont-type-slider__hidden-input hidden js-hidden-cont-type" name="" value="8 кубометров">
                                        <input type="text" class="cont-type-slider__input js-cont-amount">
                                    </div>
                                </div>
                            </div>
                            <div class="cont-type-slider__item hidden js-cont-slide">
                                <div class="cont-type-slider__img-wrapper">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/cont20m.png" alt="" class="cont-type-slider__img">
                                </div>
                                <div class="cont-type-slider__text-block">
                                    <div class="cont-type-slider__text">
                                        Контейнер объемом 20 м3 используется для разных типов мусора при погрузке не превышающего 10 тонн (в расчете на один контейнер). Контейнер используется как для ручной погрузки, так и для погрузки техникой. Мини-техника же может свободно въезжать через задние створки контейнера. Контейнер такого типа удобно размещать под рукавом для сброса строительного мусора.
                                    </div>
                                    <div class="cont-type-slider__input-wrapper">
                                        <div class="cont-type-slider__input-wrapper-text">
                                            Количество контейнеров:
                                        </div>
                                        <input type="hidden" class="cont-type-slider__hidden-input hidden js-hidden-cont-type" name="" value="20 кубометров">
                                        <input type="text" class="cont-type-slider__input js-cont-amount">
                                    </div>
                                </div>
                            </div>
                            <div class="cont-type-slider__item hidden js-cont-slide">
                                <div class="cont-type-slider__img-wrapper">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/cont27m.png" alt="" class="cont-type-slider__img">
                                </div>
                                <div class="cont-type-slider__text-block">
                                    <div class="cont-type-slider__text">
                                        Контейнер объемом 27 м3 используется для объемного и легкого мусора, такого как КГМ доски, спил деревьев. Идеально подходит для вывоза снега (в особенности для легкого и чистого снега).  Для более точной оценки заказа (выбора нужного контейнера) просим Вам ознакомиться с таблицей плотности материалов.
                                    </div>
                                    <div class="cont-type-slider__input-wrapper">
                                        <div class="cont-type-slider__input-wrapper-text">
                                            Количество контейнеров:
                                        </div>
                                        <input type="hidden" class="cont-type-slider__hidden-input hidden js-hidden-cont-type" name="" value="27 кубометров">
                                        <input type="text" class="cont-type-slider__input js-cont-amount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="step-form-step__prev button-fill js-prev-step">
                            Назад
                        </span>
                        <span class="step-form-step__next button-fill js-next-step button-disabled">
                            Следующий шаг
                        </span>
                    </div>

                </div>

                <div class="step-form-step js-single-step">

                    <div class="step-form-step__title">
                        Контактные данные для связи
                    </div>
                    <div class="step-form-step__content">

                        <div class="step-form-step__form-wrapper fancy-form">
                            <div class="fancy-form__content js-form-content">
                                <div class="fancy-form__subtitle">
                                    Для того, чтобы мы могли с Вами связаться, пожалуйста, оставьте нам Ваш номер телефона или адрес электронной почты.
                                </div>
                                <div class="fancy-form__field js-fancy-field">
                                    <label class="fancy-form__label" for="step-form-input"> Введите Имя</label>
                                    <input class="fancy-form__input" id="step-form-input" required="required" type="text" autocomplete="off" name="ST_NAME">
                                </div>
                                <div class="fancy-form__field js-fancy-field">
                                    <label class="fancy-form__label" for="step-form-phone"> Введите номер телефона</label>
                                    <input class="fancy-form__input js-phone" id="step-form-phone" required="required" type="text" autocomplete="off" name="ST_PHONE">
                                </div>
                                <div class="fancy-form__field js-fancy-field">
                                    <label class="fancy-form__label" for="step-form-email"> Электронная почта</label>
                                    <input class="fancy-form__input" id="step-form-email" required="required" type="email" autocomplete="off" name="ST_EMAIL">
                                </div>
                                <div class="fancy-form__field js-fancy-field">
                                    <label class="fancy-form__label" for="step-form-mess"> Ваш комментарий</label>
                                    <textarea class="fancy-form__input" id="header-mess" required="required" type="text" autocomplete="off" name="ST_COMM"></textarea>
                                </div>
                                <input type="submit" class="fancy-form__submit button-fill" value="Отправить заявку">
                                <div class="fancy-form__info">
                                    или пишите на<br>
                                    <a href="mailto:biz@musory-net.ru" class="fancy-form__info-mail">biz@musory-net.ru</a>
                                </div>
                            </div>
                        </div>
                        <div class="fancy-form__success js-form-success">
                            <div class="fancy-form__success-text fancy-form__success-text--step">
                                Благодарим Вас за оформление<br>
                                заявки в нашей компании!
                            </div>
                            <div class="fancy-form__success-img fancy-form__success-img--step">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
</section>

<section class="buisness-conditions-wrapper">
    <div class="buisness-conditions">
        <h2 class="buisness-conditions__title section-title">
            Гибкие условия для Вашего бизнеса
        </h2>
        <div class="buisness-conditions__item-container">
            <div class="buis-cond-item">
                <div class="buis-cond-item__img-wrapper">
                    <div class="buis-cond-item__img buis-cond-item__img--calendar"></div>
                </div>
                <div class="buis-cond-item__title">
                    Долгосрочное планирование
                </div>
                <div class="buis-cond-item__text">
                    Вы можете заранее спланировать вывоз мусора в полном объеме
                </div>
            </div>
            <div class="buis-cond-item">
                <div class="buis-cond-item__img-wrapper">
                    <div class="buis-cond-item__img buis-cond-item__img--auto"></div>
                </div>
                <div class="buis-cond-item__title">
                    Любые объемы вывоза
                </div>
                <div class="buis-cond-item__text">
                    Вы можете поручить нам вывоз любых объемов мусора
                </div>
            </div>
            <div class="buis-cond-item">
                <div class="buis-cond-item__img-wrapper">
                    <div class="buis-cond-item__img buis-cond-item__img--24"></div>
                </div>
                <div class="buis-cond-item__title">
                    Вывоз без простоев
                </div>
                <div class="buis-cond-item__text">
                    Круглосуточный вывоз мусора, включая выходные  и праздничные дни
                </div>
            </div>
            <div class="buis-cond-item">
                <div class="buis-cond-item__img-wrapper">
                    <div class="buis-cond-item__img buis-cond-item__img--clock"></div>
                </div>
                <div class="buis-cond-item__title">
                    Точное время подачи
                </div>
                <div class="buis-cond-item__text">
                    Назначение даты и точного времени подачи машин для вывоза мусора
                </div>
            </div>

            <div class="buis-cond-item">
                <div class="buis-cond-item__img-wrapper">
                    <div class="buis-cond-item__img buis-cond-item__img--sale"></div>
                </div>
                <div class="buis-cond-item__title">
                    Скидочная система
                </div>
                <div class="buis-cond-item__text">
                    Размер скидки зависит от объема вывозимого мусора
                </div>
            </div>
            <div class="buis-cond-item">
                <div class="buis-cond-item__img-wrapper">
                    <div class="buis-cond-item__img buis-cond-item__img--serv"></div>
                </div>
                <div class="buis-cond-item__title">
                    Клиентский сервис
                </div>
                <div class="buis-cond-item__text">
                    Бесплатная предварительная консультация и калькуляция стоимости заказа, учитывая входные данные от клиента
                </div>
            </div>
            <div class="buis-cond-item">
                <div class="buis-cond-item__img-wrapper">
                    <div class="buis-cond-item__img buis-cond-item__img--jur"></div>
                </div>
                <div class="buis-cond-item__title">
                    Прозрачность сделок
                </div>
                <div class="buis-cond-item__text">
                    Предоставляем Вам  отчеты о проделанной работе и квитанции об оплате услуг
                </div>
            </div>
            <div class="buis-cond-item">
                <div class="buis-cond-item__img-wrapper">
                    <div class="buis-cond-item__img buis-cond-item__img--snow"></div>
                </div>
                <div class="buis-cond-item__title">
                    Предзаказ на вывоз снега
                </div>
                <div class="buis-cond-item__text">
                    Вы можете заранее заключить с нами договор о вывозе снега с фиксированной ценой
                </div>
            </div>
        </div>
    </div>
</section>

<section class="clients-section-wrapper">
    <div class="clients-section">
        <h2 class="clients-section__title section-title">
            Нам доверяют
        </h2>
        <div class="client-wrapper">
            <div class="client-wrapper__container clearfix">
                <a target="_blank" class="client-item" href="http://rzd.ru/" title="">
                    <span class="center-helper"></span>
                    <img class="client-img" src="<?=SITE_TEMPLATE_PATH?>/img/rjd-logo.png" alt="">
                </a>
                <a target="_blank" class="client-item" href="http://www.mospromstroy.com/" title="">
                    <span class="center-helper"></span>
                    <img class="client-img" src="<?=SITE_TEMPLATE_PATH?>/img/mosp-logo.png" alt="">
                </a>
                <a target="_blank" class="client-item" href="http://www.atitoka.ru/ru/" title="">
                    <span class="center-helper"></span>
                    <img class="client-img" src="<?=SITE_TEMPLATE_PATH?>/img/ati-logo.png" alt="">
                </a>
                <a target="_blank" class="client-item" href="http://www.kitos-i.ru/" title="">
                    <span class="center-helper"></span>
                    <img class="client-img" src="<?=SITE_TEMPLATE_PATH?>/img/kit-logo.png" alt="">
                </a>
                <a target="_blank" class="client-item" href="http://www.ru.strabag.com/" title="">
                    <span class="center-helper"></span>
                    <img class="client-img" src="<?=SITE_TEMPLATE_PATH?>/img/stra-logo.png" alt="">
                </a>
                <a target="_blank" class="client-item" href="http://krost-concern.ru/" title="">
                    <span class="center-helper"></span>
                    <img class="client-img" src="<?=SITE_TEMPLATE_PATH?>/img/krost-logo.png" alt="">
                </a>
                <a target="_blank" class="client-item" href="http://www.mon-arch.ru/" title="">
                    <span class="center-helper"></span>
                    <img class="client-img" src="<?=SITE_TEMPLATE_PATH?>/img/mon-logo.png" alt="">
                </a>
                <a target="_blank" class="client-item" href="http://texnodigger.ru/" title="">
                    <span class="center-helper"></span>
                    <img class="client-img" src="<?=SITE_TEMPLATE_PATH?>/img/td-logo.png" alt="">
                </a>
            </div>
        </div>
    </div>
</section>

<section class="articles-section-wrapper">
    <div class="articles-section">
        <h2 class="articles-section__title section-title">
            Профессиональные статьи
        </h2>
        <?$APPLICATION->IncludeComponent(
            "bitrix:news",
            "news",
            array(
                "COMPONENT_TEMPLATE" => "news",
                "IBLOCK_TYPE" => "main",
                "IBLOCK_ID" => "2",
                "NEWS_COUNT" => "6",
                "USE_SEARCH" => "N",
                "USE_RSS" => "N",
                "USE_RATING" => "N",
                "USE_CATEGORIES" => "N",
                "USE_FILTER" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_ORDER1" => "ASC",
                "SORT_BY2" => "SORT",
                "SORT_ORDER2" => "ASC",
                "CHECK_DATES" => "Y",
                "SEF_MODE" => "Y",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "N",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "36000000",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "SET_LAST_MODIFIED" => "N",
                "SET_TITLE" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                "ADD_SECTIONS_CHAIN" => "Y",
                "ADD_ELEMENT_CHAIN" => "N",
                "USE_PERMISSIONS" => "N",
                "DISPLAY_DATE" => "N",
                "DISPLAY_PICTURE" => "N",
                "DISPLAY_PREVIEW_TEXT" => "N",
                "USE_SHARE" => "N",
                "PREVIEW_TRUNCATE_LEN" => "",
                "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                "LIST_FIELD_CODE" => array(
                    0 => "NAME",
                    1 => "PREVIEW_TEXT",
                    2 => "",
                ),
                "LIST_PROPERTY_CODE" => array(
                    0 => "NEWS_DAY",
                    1 => "NEWS_MONTH",
                    2 => "",
                ),
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "DISPLAY_NAME" => "Y",
                "META_KEYWORDS" => "-",
                "META_DESCRIPTION" => "-",
                "BROWSER_TITLE" => "NAME",
                "DETAIL_SET_CANONICAL_URL" => "N",
                "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
                "DETAIL_FIELD_CODE" => array(
                    0 => "NAME",
                    1 => "DETAIL_TEXT",
                    2 => "",
                ),
                "DETAIL_PROPERTY_CODE" => array(
                    0 => "NEWS_DAY",
                    1 => "NEWS_MONTH",
                    2 => "",
                ),
                "DETAIL_DISPLAY_TOP_PAGER" => "N",
                "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
                "DETAIL_PAGER_TITLE" => "Страница",
                "DETAIL_PAGER_TEMPLATE" => "",
                "DETAIL_PAGER_SHOW_ALL" => "Y",
                "PAGER_TEMPLATE" => ".default",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "PAGER_TITLE" => "Новости",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "SET_STATUS_404" => "N",
                "SHOW_404" => "N",
                "MESSAGE_404" => "",
                "SEF_FOLDER" => "/news/",
                "SEF_URL_TEMPLATES" => array(
                    "news" => "",
                    "section" => "",
                    "detail" => "#ELEMENT_CODE#/",
                )
            ),
            false
        );?>
    </div>
</section>

<section class="form-section-wrapper">
    <div class="form-section">
        <h2 class="clients-section__title section-title">
            Обратная связь
        </h2>
        <form class="form-section__form fancy-form js-form" action="" method="POST">
            <div class="fancy-form__content js-form-content">
                <div class="fancy-form__subtitle">
                    Свяжитесь с нами и получите бесплатную оценку стоимости вывоза и утилизации мусора
                </div>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/local/include/form.php"
                    )
                );?>
                <div class="fancy-form__info">
                    или пишите на<br>
                    <a href="mailto:biz@musory-net.ru" class="fancy-form__info-mail">biz@musory-net.ru</a>
                </div>
            </div>
            <div class="fancy-form__success js-form-success fancy-form__success--inner">
                <div class="fancy-form__success-text fancy-form__success-text--step fancy-form__success-text--inner">
                    Благодарим Вас за заявку.<br>
                    В самое ближайшее время мы свяжемся с Вами для уточнения деталей вашего вопроса.
                </div>
                <div class="fancy-form__success-img fancy-form__success-img--step">
            </div>
        </form>
    </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
