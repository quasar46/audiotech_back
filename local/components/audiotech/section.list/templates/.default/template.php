<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<div class="chips">
    <div class="chips__inner">
        <a class="chips__item" href="/about/news/">Все</a>
        <?php foreach ($arResult['ITEMS'] as $arItem) : ?>
            <a class="chips__item" href="">
                <?php echo $arItem['NAME'] ?>
            </a>
        <?php endforeach ?>
    </div>
</div>