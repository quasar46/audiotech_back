<?php
/*
 * Файл local/templates/.default/components/bitrix/system.pagenavigation/pager/template.php
 */
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$this->setFrameMode(true);

// ссылка на первую страницу
$firstPageUrl = $arResult['sUrlPath'];
if (!empty($arResult['NavQueryString'])) {
    $firstPageUrl = $firstPageUrl . '?' . $arResult['NavQueryString'];
}
// ссылка на последнюю страницу
$lastPageUrl = $arResult['sUrlPath'];
if (!empty($arResult['NavQueryString'])) {
    $lastPageUrl = $lastPageUrl . '?' . $arResult['NavQueryString']
        . '&amp;PAGEN_' . $arResult['NavNum'] . '=' . $arResult['NavPageCount'];
} else {
    $lastPageUrl = $lastPageUrl . '?PAGEN_' . $arResult['NavNum'] . '=' . $arResult['NavPageCount'];
}
?>
<div class="pagination">
    <div class="pagination__list">
        <a href="<?= $firstPageUrl ?>" class="pagination__page" title="Первая">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 5L4 12M4 12L11 19M4 12H20" stroke="#131313" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round"></path>
            </svg>
        </a>
        <?php for ($i = $arResult['nStartPage']; $i <= $arResult['nEndPage']; $i++): ?>
            <?php
            // ссылка на очередную страницу
            $pageUrl = $arResult['sUrlPath'];
            if (!empty($arResult['NavQueryString'])) {
                $pageUrl = $pageUrl . '?' . $arResult['NavQueryString'] . '&amp;PAGEN_' . $arResult['NavNum'] . '=' . $i;
            } else {
                $pageUrl = $pageUrl . '?PAGEN_' . $arResult['NavNum'] . '=' . $i;
            }
            ?>
            <?php if ($arResult['NavPageNomer'] == $i): /* если это текущая страница */ ?>
                <span><?= $i; ?></span>
            <?php else: ?>
                <a class="pagination__page" href="<?= $pageUrl; ?>"><?= $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>
        <a class="pagination__page" href="<?= $lastPageUrl; ?>" title="Последняя">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 5L20 12M20 12L13 19M20 12H4" stroke="#131313" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round"></path>
            </svg>
        </a>
    </div>
    <? if ($arResult["NavPageCount"] > 1): ?>

        <? if ($arResult["NavPageNomer"] + 1 <= $arResult["nEndPage"]): ?>
            <?
            $plus = $arResult["NavPageNomer"] + 1;
            $url = $arResult["sUrlPathParams"] . "PAGEN_" . $arResult["NavNum"] . "=" . $plus;
            ?>

            <div class="load-more-items btn btn--grey btn--m" data-url="<?= $url ?>">Показать еще</div>

        <? endif ?>

    <? endif ?>
</div>

