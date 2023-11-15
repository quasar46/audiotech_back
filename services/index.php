<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Услуги");
?>
<?php $APPLICATION->IncludeComponent(
    'audiotech:offersbanners',
    '',
) ?>
<?php $APPLICATION->IncludeComponent(
    'audiotech:offersblock',
    '',
) ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>