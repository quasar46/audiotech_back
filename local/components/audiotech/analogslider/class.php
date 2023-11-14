<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Application;
use Bitrix\Main\Loader;
use Bitrix\Iblock\Elements\ElementAnalogSliderTable;

class AudiotechAnalogSlider extends CBitrixComponent
{

    public function executeComponent()
    {
        $this->_checkModules();
        if ($this->StartResultCache()) {
            $this->getSlides();
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

    public function getSlides()
    {
        $arElements = ElementAnalogSliderTable::getlist([
            'select' => [
                'NAME',
                'PREVIEW_PICTURE',
                'DETAIL_TEXT',
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