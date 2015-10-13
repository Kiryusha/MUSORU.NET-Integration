<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section class="breadcrumbs">
    <div class="breadcrumbs__content">
        <a href="/" class="breadcrumbs__item">
            Главная страница
        </a>
        <a href="/news/" class="breadcrumbs__item">
            Профессиональные статьи
        </a>
        <a href="#" class="breadcrumbs__item">
            <?=$arResult["NAME"]?>
        </a>
    </div>
</section>

<section class="detail-section-wrapper">
    <div class="detail-section">
        <div class="detail-section__content">
            <h1 class="page-content__title page-content__title--small-red">
                <?=$arResult["NAME"]?>
            </h1>
            <?=$arResult["DETAIL_TEXT"]?>
        </div>

