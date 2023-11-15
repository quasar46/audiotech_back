<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<section class="info-blocks">
    <div class="_container">
        <h1 class="title-page">Услуги</h1>
        <div class="info-blocks__wrap">
            <?php foreach ($arResult['ITEMS'] as $arItem) : ?>
                <div class="info-block__item" style="background-image: url(<?= $arItem['URL_PICTURE'] ?>)">
                    <div class="info-block__name"><?=$arItem['NAME']?></div>
                    <div class="info-block__descr"><?=$arItem['DETAIL_TEXT']?>
                    </div>
                    <a class="btn btn--white btn--m info-block__link" href="<?=$arItem['ATT_LINK_VALUE']?>"><?=$arItem['ATT_BTN_TEXT_VALUE']?></a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>