<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<div class="news__list">
    <?php foreach ($arResult['ITEMS'] as $arItem) { ?>
        <div class="article-preview">
            <a class="article-preview__pic" href="<?php echo $arItem['DETAIL_PAGE_URL'] ?>">
                <img src="<?php echo $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="">
            </a>
            <div class="article-preview__date"><?php echo $arItem['DATE_CREATE'] ?></div>
            <a class="article-preview__name"
               href="<?php echo $arItem['DETAIL_PAGE_URL'] ?>"><?php echo $arItem['NAME'] ?>
            </a>
            <p class="article-preview__text"><?php echo $arItem['DETAIL_TEXT'] ?></p>
        </div>
    <?php } ?>
</div>
<?php $APPLICATION->IncludeComponent(
    'audiotech:subscribe',
    '',
    []
) ?>
<?= $arResult['NAV_STRING'] ?>
