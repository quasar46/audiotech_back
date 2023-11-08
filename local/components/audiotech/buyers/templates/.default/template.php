<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<?php
    foreach ($arResult['ITEMS'] as $arItem) {?>
        <div class="item">
            <div class="item__pic">
                <img src="<?php echo $arItem['URL_PICTURE']?>" alt="">
            </div>
            <h4 class="item__titlle"><?php echo $arItem['NAME']?></h4>
            <p><?php echo $arItem['DETAIL_TEXT']?></p>
        </div>
    <?php }
?>
