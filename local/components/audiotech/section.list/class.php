<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Application;
use Bitrix\Main\Loader;

class AudiotechSimilarSlider extends CBitrixComponent
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
        $rsSection = \Bitrix\Iblock\SectionTable::getList(array(
            'filter' => array(
                'IBLOCK_ID' => 17,
                'DEPTH_LEVEL' => 1,
            ),
            'select' => array('ID', 'CODE', 'NAME'),
        ));

        while ($arSection = $rsSection->fetch()) {
            $this->arResult['ITEMS'][] = $arSection;
        }
    }
}