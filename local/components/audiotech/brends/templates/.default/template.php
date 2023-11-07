<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php foreach ($arResult['ITEMS'] as $arItem) {
    ?>
    <div class="brends__item"><img src="<?php echo $arItem['URL_PICTURE']; ?>" alt=""></div>
    <?php
} ?>
