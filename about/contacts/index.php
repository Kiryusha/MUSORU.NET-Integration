<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>

<section class="breadcrumbs">
    <div class="breadcrumbs__content">
        <a href="/" class="breadcrumbs__item">
            Главная страница
        </a>
        <a href="/about/contacts" class="breadcrumbs__item">
            Контакты
        </a>
    </div>
</section>
<section class="page-content page-content--contacts">
    <h1 class="page-content__title">
        Контактная информация
    </h1>
    <p class="page-content__text">
        111402, Москва, ул. Кетчерская, здание<br>
        Автокомбината 40<br>
        Телефон: <a class="page-content__tel" href="tel:+79859999089">8 985 9999 089</a>(справочная)<br>
        Эл. почта: <a href="mailto:biz@musory-net.ru" class="page-content__mail">biz@musory-net.ru</a>
    </p>
    <img src="<?=SITE_TEMPLATE_PATH?>/img/contacts-pic.jpg" alt="" class="page-content__img-wide page-content__img-wide--contacts">
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
