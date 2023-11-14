<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>
<section class="news-page__block news-page__block--slider">
    <h2 class="section-title"> <span>Аналоговые слуховые аппараты</span><a class="btn btn--grey btn--m">Смотреть все</a></h2>
    <div class="swiper swiper-three-news pr30_m">
        <div class="swiper-wrapper">
            <?php foreach ($arResult['ITEMS'] as $arItem): ?>
            <div class="swiper-slide">
                <div class="card"> <a class="card__pic" href=""><img src="<?=$arItem['URL_PICTURE']?>" alt=""></a><a class="card__category" href=""><?=$arItem['DETAIL_TEXT']?></a><a class="card__name" href=""><?=$arItem['NAME']?></a>
                    <div class="card__footer">
                        <div class="card__price card__price--actual">65 300 ₽</div>
                        <div class="card__price card__price--old">81 250 ₽</div>
                    </div>
                </div>
            </div>
            <?endforeach?>
        </div>
    </div>
</section>