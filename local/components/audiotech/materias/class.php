<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Application;
use Bitrix\Main\Loader;
use Bitrix\Iblock\Elements\ElementMaterialsTable;

class AudiotechOffers extends CBitrixComponent
{

    public function executeComponent()
    {
        $this->_checkModules();
        if ($this->StartResultCache()) {
            $this->getElements();
        }

        $this->includeComponentTemplate();
    }

    private function _checkModules()
    {
        if (!Loader::includeModule('iblock')) {
            throw new \Exception('Не загружены необходимые модули для работы модуля');
        }
        return true;
    }

    public function getElements()
    {
        $arElements = ElementMaterialsTable::getlist([
            'select' => [
                'NAME',
                'DETAIL_TEXT',
                'ATT_NUMBER_' => 'ATT_NUMBER',
                'ATT_BTN_TEXT_' => 'ATT_BTN_TEXT',
                'ATT_LINK_' => 'ATT_LINK',
            ],
            'filter' => [
                'ACTIVE' => 'Y',
            ],
            'order' => [
                'SORT' => 'ASC'
            ],
        ])->fetchAll();

        $this->arResult['ITEMS'] = $arElements;
    }
}