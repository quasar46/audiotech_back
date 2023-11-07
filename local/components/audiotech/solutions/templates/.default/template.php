<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php foreach ($arResult['ITEMS'] as $arItem) {
    ?>
    <div class="info-block__item"
         style="background-image: url('<?php echo $arItem["URL_PICTURE"]; ?>')">
        <div class="info-block__name"><?php echo $arItem["NAME"]; ?></div>
        <div class="info-block__descr"><?php echo $arItem["DETAIL_TEXT"]; ?></div>
        <a class="btn btn--white btn--m info-block__link" href="<?php echo $arItem['ATT_LINK_VALUE']?>"><?php echo $arItem["ATT_TEXT_BTN_VALUE"]; ?></a>
    </div>
    <?php
} ?>
