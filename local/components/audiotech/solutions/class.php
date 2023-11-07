<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Application;
use Bitrix\Main\Loader;
use Bitrix\Iblock\Elements\ElementSolutionsTable;

class AudiotechSolutions extends CBitrixComponent
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
            throw new \Exceprion('Не загружены необходимые модули для работы модуля');
        }
        return true;
    }

    public function getElements()
    {
        $arElements = ElementSolutionsTable::getlist([
            'select' => [
                'NAME',
                'PREVIEW_PICTURE',
                'DETAIL_TEXT',
                'ATT_TEXT_BTN_' => 'ATT_TEXT_BTN',
                'ATT_LINK_' => 'ATT_LINK',
            ],
            'filter' => [
                'ACTIVE' => 'Y',
            ],
            'order' => [
                'SORT' => 'ASC'
            ],
        ])->fetchAll();

        foreach ($arElements as $key => $arItem) {
            $arElements[$key]['URL_PICTURE'] = \CFile::GetPath($arItem['PREVIEW_PICTURE']);
        }

        $this->arResult['ITEMS'] = $arElements;
    }
}