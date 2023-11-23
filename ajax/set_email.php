<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule('iblock');

use Bitrix\Main\Context;

$request = Context::getCurrent()->getRequest();

$el = new CIBlockElement;

$arLoadProductArray = [
    'IBLOCK_ID' => 23,
    'ACTIVE' => 'Y',
    'NAME' => $request['email'],
];

$el->Add($arLoadProductArray);
?>