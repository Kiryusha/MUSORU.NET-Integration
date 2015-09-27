<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>


<section class="breadcrumbs">
    <div class="breadcrumbs__content">
        <a href="/" class="breadcrumbs__item">
            Главная страница
        </a>
        <a href="/services/soil" class="breadcrumbs__item">
            Вывоз грунта
        </a>
    </div>
</section>
<section class="page-content">
    <h1 class="page-content__title">
        Вывоз грунта
    </h1>
    <p class="page-content__text">
        Любые инициативы связанные со строительством зданий, строительством подземных парковок, бассейнов, инфраструктурными работами (трубы, коммуникации) неразрывно сопряжены с экскавацией внушительных объемов грунта. Объемы строительства в Москве и области увеличиваются из года в год и нужна в вывозе грунта возрастает прямо пропорционально. Внушительные массы грунта находящиеся на территории проведения строительных работ параллельно со всем строительным хламом и техникой создает множество недочетов таких как неэффективное использование территории, антисанитария и загрязненный воздух из-за ветра, который разносит частицы грунта по всей территории работ. Вторым нюансом может стать прямая помеха проведения работ техникой из-за земляных завалов. Согласно технологическим регламентам, перед началом проведения дальнейших работ необходимо вычистить территорию от земли.<br>
        Очень часто вывоз грунта необходим при строительстве участков улиц и крупных дорожных развязок, но как правило у строительных подрядчиков не хватает постоянных активов (собственной техники в парке) для того, чтобы обеспечить оперативный вывоз грунта с территории.
    </p>
    <img src="<?=SITE_TEMPLATE_PATH?>/img/grunt-pic.jpg" alt="" class="page-content__img-wide">
    <p class="page-content__text">
        Наша компания занимается вывозом грунта круглогодично, понимая что в зимний период строительный работы идут полным ходом. Мы имеем все необходимые лицензии на вывоз и утилизацию грунта на специальном полигоне.<br>
        Вы можете заключить договор о вывозе с нашей компанией заблаговременно для того, чтобы грунт вывозился по заранее установленному расписанию и его нагромождения не препятствовали ходу строительных работ.<br>
        Мы работаем с любыми объемами вывоза поэтому, вывозим грунт в бункерах на специальные территории с дальнейшей его утилизацией (захоронением). Поскольку грунт - это плодородная почва, то он может быть применен для иных целей, таких как использование для посадки деревьев или завоз его в места, в которых содержание почвы недостаточно для полноценной посадки растений.
    </p>
    <p class="page-content__text">
         Достаточно сложно рассчитать стоимость вывоза грунта без предварительной экспертизы. Поскольку мы используем технику с высокой грузоподъемностью, то это позволяет нам вывозить больше грунта чем при использовании техники с низкой грузоподъемностью. Наши эксперты оценивают масштаб работ, включая в него количество требуемых машин, количества и расстояние рейсов техники на точку строительства, класс грунта, объем вывозимого грунта, примерное время загрузки грунта в кузов, дополнительная рабочая сила, которая необходима для погрузочных работ.<br>
         После составления детальной сметы, где будет отражена вся декомпозиция задач и затрат, Вы сможете принять решение о сотрудничестве с нашей компанией.
    </p>
</section>
<section class="inner-form-section">
    <div class="inner-form-section__content">
        <article class="form-accordion accordion">
            <section id="acc1">
                <div class="form-accordion__title">
                    <a href="#acc1">
                        Заказать вывоз грунта
                    </a>
                </div>
                <div class="form-section js-form">
                    <h2 class="clients-section__title section-title">
                        Заказать вывоз грунта
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