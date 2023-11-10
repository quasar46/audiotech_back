<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<section class="offers">
    <div class="_container">
        <div class="offers__wrap">
            <?php foreach ($arResult['ITEMS'] as $arItem) {
                ?>
                <div class="offers__item"><img src="<?php echo $arItem['URL_PICTURE']; ?>" alt="">
                    <div class="offers__name"><?php echo $arItem['NAME']; ?></div>
                    <p class="offers__text"><?php echo $arItem['DETAIL_TEXT']; ?></p>
                    <button class="btn btn--red btn--m"><?php echo $arItem['ATT_BTN_TEXT_VALUE']; ?></button>
                </div>
            <?php } ?>
        </div>
    </div>
</section>