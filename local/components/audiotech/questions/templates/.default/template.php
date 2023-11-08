<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}?>

<?php foreach ($arResult['ITEMS'] as $arItem) {
?>

<div class="accordion__item">
    <div class="accordion__header"> <span><?php echo $arItem['ATT_COUNT_VALUE']?></span><span><?php echo $arItem['NAME']?></span></div>
    <div class="accordion__body">
        <div class="accordion__content">
            <p><?php echo $arItem['DETAIL_TEXT']?></p>
        </div>
    </div>
</div>

<?php } ?>