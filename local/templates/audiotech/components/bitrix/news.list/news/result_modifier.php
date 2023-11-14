<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

// TODO получить все разделы инфоблока

use Bitrix\Iblock\SectionTable;

$arPlumbingSections = SectionTable::getList([
    'select' => [
        'ID',
    ],
    'filter' => [
        'IBLOCK_ID' => $this->iBlockID,
    ],
]);
