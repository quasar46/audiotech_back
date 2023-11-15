<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Application;
use Bitrix\Main\Loader;

class AudiotechSectionList extends CBitrixComponent
{

    public function executeComponent()
    {
        $this->_checkModules();
        if ($this->StartResultCache()) {
            $this->getSections();
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

    public function getSections()
    {
        $rsSection = \Bitrix\Iblock\SectionTable::getList(array(
            'filter' => [
                'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
            ],
            'select' => [
                'ID',
                'CODE',
                'NAME'
            ],
        ));

        while ($arSection = $rsSection->fetch()) {
            $this->arResult['ITEMS'][] = $arSection;
        }
    }
}