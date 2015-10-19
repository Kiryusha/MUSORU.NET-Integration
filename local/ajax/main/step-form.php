<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */

if (!CModule::IncludeModule("iblock")) {
    ShowError(GetMessage("IBLOCK_MODULE_NOT_INSTALLED"));
    return;
}

$el = new CIBlockElement;

$_POST['stepMain'] = array(
    'name' => $_POST['ST_NAME'],
    'mobile' => $_POST['ST_PHONE'],
    'email' => $_POST['ST_EMAIL'],
    'comm' => $_POST['ST_COMM'],
    'ttype' => $_POST['ST_TTYPE'],
    'district' => implode(', ', $_POST['ST_DIST']),
    'ctype' => $_POST['ST_CTYPE'],
    'contAmount' => $_POST['ST_CNUM']
);

$arDictionary = array(
    'name' => 'Имя',
    'mobile' => 'Мобильный телефон',
    'email' => 'Почтовый ящик',
    'comm' => 'Комментарий',
    'ttype' => 'Тип мусора',
    'district' => 'Выбранный район(ы)',
    'ctype' => 'Тип контейнеров',
    'contAmount' => 'Количество контейнеров'
);

function catalogize($incArr, $dictArr) {
    foreach($incArr as $vacParams=>$vacVal)
    {
        $resArr[] = $dictArr[$vacParams] . ': ' . $vacVal;
    };
    $resArr = implode("\n", $resArr);
    return $resArr;
}

$stepMain = catalogize($_POST['stepMain'], $arDictionary);

$PROP = array(
        'STEP_NAME' => $_POST['ST_NAME'],

        'STEP_PHONE' => $_POST['ST_PHONE'],

        'STEP_EMAIL' => $_POST['ST_EMAIL'],

        'STEP_TTYPE' => $_POST['ST_TTYPE'],

        'STEP_DIST' => Array("VALUE" => Array (
            "TEXT" =>   implode(', ', $_POST['ST_DIST']),
            "TYPE" =>   'text'
            )
        ),

        'STEP_CTYPE' => $_POST['ST_CTYPE'],

        'STEP_CNUM' => $_POST['ST_CNUM'],

        'STEP_COMM' => Array("VALUE" => Array (
            "TEXT" =>   $_POST['ST_COMM'],
            "TYPE" =>   'text'
            )
        )

    );

$arLoadProductArray = Array(
  "MODIFIED_BY"    => $USER->GetID(), // элемент изменен текущим пользователем
  "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
  "IBLOCK_ID"      => 1,
  "NAME"           => $_POST['ST_NAME'],
  "PROPERTY_VALUES"=> $PROP,
  "ACTIVE"         => "Y",            // активен
  "PREVIEW_TEXT"   => $stepMain,
  "DETAIL_TEXT"    => "",
  "DETAIL_PICTURE" => ""
  );

if($PRODUCT_ID = $el->Add($arLoadProductArray)) {
    echo "New ID: " . $PRODUCT_ID;
} else {
    echo "Ошибка: " . $el->LAST_ERROR;
    exit();
}

$mailParams = array(
    'PRODUCT_ID' => $PRODUCT_ID,
    'NAME' => $_POST['ST_NAME'],
    'PROPS' => $stepMain,
    'EMAIL' => 'borhoff@gmail.com, biz@musory-net.ru'
);

CEvent::Send('FORM_CREATED', SITE_ID, $mailParams, 'N', 8);

?>
