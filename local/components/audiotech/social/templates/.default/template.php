<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<div class="share">
    <h4>Поделиться</h4>
    <div class="share__social">
        <?php foreach ($arResult['ITEMS'] as $arItem) : ?>
            <a class="share__item" href="">
                <?= $arItem['DETAIL_TEXT'] ?>
                <span><?= $arItem['NAME'] ?></span>
            </a>
        <?php endforeach; ?>
    </div>
</div>