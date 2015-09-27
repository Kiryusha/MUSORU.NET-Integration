<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>

<section class="breadcrumbs">
    <div class="breadcrumbs__content">
        <a href="/" class="breadcrumbs__item">
            Главная страница
        </a>
        <a href="/services/vkgm" class="breadcrumbs__item">
            Вывоз крупногабаритного мусора
        </a>
    </div>
</section>
<section class="page-content">
    <h1 class="page-content__title">
        Вывоз крупногабаритного мусора
    </h1>
    <p class="page-content__text">
        Для начала рассмотрим какой же мусор относится к этому типу. Министерство природных ресурсов (приказ от 15.06.2001 года № 511) относит КГМ к 5-ому классу опасности. Это значит, что крупногабаритные отходы оказывают минимальное воздействие на природную окружающую среду. Они практические не нарушаю равновесие экосистемы.<br>
        Тем не менее вывоз и неправильная утилизация КГМ, в специально отведенных для этого местах, является обязательной в Российской Федерации. Штрафные санкции налагаются на физических и юридических лиц, которые накапливают неумеренное количество КГМ без его утилизации.<br>
        К такому типу мусора относятся картонные конструкции, металлические изделия большого размера, дерево (пни, стволы), бумажные изделия внушительного размера.
    </p>
    <img src="<?=SITE_TEMPLATE_PATH?>/img/kgm-pic.jpg" alt="" class="page-content__img-wide">
    <p class="page-content__text">
        Более полный список отходов принадлежащих к категории КГМ приведен ниже:
    </p>
    <ul class="page-content__ul-list">
        <li class="page-content__ul-item">
            сантехническое оборудование, которое подлежит утилизации;
        </li>
        <li class="page-content__ul-item">
            крупная мебель (фурнитура), которая не может быть разобрана;
        </li>
        <li class="page-content__ul-item">
            бетонные фигуры, которые имеют большой вес и неудобную форму для перемещения в пространстве;
        </li>
        <li class="page-content__ul-item">
            крупные куски стен, которые образовались в результате сноса сооружений;
        </li>
        <li class="page-content__ul-item">
            крупный строительный хлам;
        </li>
        <li class="page-content__ul-item">
            булыжники и фрагменты дорожного полотна.
        </li>
    </ul>
    <p class="page-content__text">
         Если перед Вами встала задача вывоза громоздкой мебели или стенных перегородок из квартиры (будь то ремонт или просто обновление интерьера), то самостоятельные инициативы по погрузке и транспортировке КГМ могут обернуться неудачей или вообще вылиться в травмы. Мудрым решением этого вопроса будет обратиться с этой задачей к нашей компании. Наши специалисты произведут погрузку, транспортировку и утилизацию КГМ быстро, профессионально и без вреда вашему здоровью и окружающей среде. В компании “Musory-NET” задействованы только эксперты, которые имеют опыт работы в погрузочных работах более 5 лет. Благодаря непрерывной физической программе подготовки наших экспертов по погрузке они вынесут все из квартиры, здания или сооружения, не оставив не единой царапины на полу, стене или потолке. При произведении погрузочным работ наши эксперты соблюдают все нормативы по технике безопасности.
    </p>
</section>
<section class="inner-form-section">
    <div class="inner-form-section__content">
        <article class="form-accordion accordion">
            <section id="acc1">
                <div class="form-accordion__title">
                    <a href="#acc1">
                        Заказать вывоз КГМ
                    </a>
                </div>
                <div class="form-section js-form">
                    <h2 class="clients-section__title section-title">
                        Заказать вывоз КГМ
                    </h2>
                    <form class="form-section__form fancy-form" action="" method="POST">
                        <div class="fancy-form__content js-form-content">
                            <div class="fancy-form__field js-fancy-field">
                                <label class="fancy-form__label" for="step-form-input"> Введите Имя</label>
                                <input class="fancy-form__input" id="step-form-input" required="required" type="text" autocomplete="off">
                            </div>
                            <div class="fancy-form__field js-fancy-field">
                                <label class="fancy-form__label" for="step-form-phone"> Введите номер телефона</label>
                                <input class="fancy-form__input js-phone" id="step-form-phone" required="required" type="text" autocomplete="off">
                            </div>
                            <div class="fancy-form__field js-fancy-field">
                                <label class="fancy-form__label" for="step-form-email"> Электронная почта</label>
                                <input class="fancy-form__input" id="step-form-email" required="required" type="email" autocomplete="off">
                            </div>
                            <div class="fancy-form__field js-fancy-field">
                                <label class="fancy-form__label" for="step-form-mess"> Ваш комментарий</label>
                                <textarea class="fancy-form__input" id="header-mess" required="required" type="text" autocomplete="off"></textarea>
                            </div>
                            <input type="submit" class="fancy-form__submit button-fill" value="Отправить заявку">
                        </div>
                        <div class="fancy-form__success fancy-form__success--inner js-form-success">
                            <div class="fancy-form__success-text fancy-form__success-text--step fancy-form__success-text--inner">
                                Благодарим Вас за оформление<br>
                                заявки в нашей компании!
                            </div>
                            <div class="fancy-form__success-img fancy-form__success-img--step">
                        </div>
                    </form>
                </div>
            </section>
        </article>
    </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
