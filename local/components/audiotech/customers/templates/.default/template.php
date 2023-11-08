<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<?php
    foreach ($arResult['ITEMS'] as $arItem) {?>
        <a class="item" href="<?php echo $arItem['ATT_LINK_VALUE']?>">
            <div class="item__pic">
                <img src="<?php echo $arItem['URL_PICTURE']; ?>">
            </div>
            <h4 class="item__title"><?php echo $arItem['NAME'];?></h4>
            <p><?php echo $arItem['DETAIL_TEXT']; ?></p>
        </a>
    <?php }
?>
