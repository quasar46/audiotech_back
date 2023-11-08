<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

?>
<h2 class="section-title brends__title">Надёжные устройства <br>от ведущих мировых брендов </h2>
<div class="brends__wrap">
    <?php foreach ($arResult['ITEMS'] as $arItem) {
        ?>
        <div class="brends__item"><img src="<?php echo $arItem['URL_PICTURE']; ?>" alt=""></div>
        <?php
    } ?>
</div>