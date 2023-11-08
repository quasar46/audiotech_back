<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}?>

<?php foreach($arResult['ITEMS'] as $arItem) { ?>
    <li class="steps__item"><span class="steps__number"><?php echo $arItem['ATT_COUNT_VALUE'];?></span><span class="steps__name"><?php echo $arItem['NAME']?></span>
        <p class="steps__text"><?php echo $arItem['DETAIL_TEXT']?></p>
    </li>
<?php }?>
