<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<?php

$minut = 60;
$hour = $minut * 60;
$day = $hour * 24;
$week = $day * 7;
echo ( "в часе $minut секунд, в сутках $day секунд, в неделе $week секунд");

foreach ($arResult['ITEMS'] as $key => $arItem) {
    $dateCreate = CIBlockFormatProperties::DateFormat(
        'j F Y',
        MakeTimeStamp(
            $arItem["DATE_CREATE"],
            CSite::GetDateFormat()
        )
    );
    $arResult[$key]['ITEMS']['DATE_CREATE_MODE'] = $dateCreate;
    var_dump($arResult[$key]['ITEMS']['DATE_CREATE_MODE']);
}
?>

