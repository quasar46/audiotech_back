<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

?>
<section class="info-blocks">
    <div class="_container">
        <h2 class="section-title">Подходящее решение для каждого</h2>
        <div class="info-blocks__wrap">
            <?php foreach ($arResult['ITEMS'] as $arItem) {
                ?>
                <div class="info-block__item"
                     style="background-image: url('<?php echo $arItem["URL_PICTURE"]; ?>')">
                    <div class="info-block__name"><?php echo $arItem["NAME"]; ?></div>
                    <div class="info-block__descr"><?php echo $arItem["DETAIL_TEXT"]; ?></div>
                    <a class="btn btn--white btn--m info-block__link"
                       href="<?php echo $arItem['ATT_LINK_VALUE'] ?>"><?php echo $arItem["ATT_TEXT_BTN_VALUE"]; ?></a>
                </div>
                <?php
            } ?>
        </div>
    </div>
</section>