<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<h2 class="section-title"><span>Популярные слуховые аппараты</span>
    <button class="btn btn--grey btn--m">Смотреть все</button>
</h2>
<div class="slider-block__wrap swiper popular-slider pr30">
    <div class="swiper-wrapper">

        <?php foreach ($arResult['ITEMS'] as $arItem) {
            ?>
            <div class="swiper-slide">
                <div class="card"><a class="card__pic" href=""><img
                                src="<?php echo $arItem['URL_PICTURE']; ?>" alt=""></a><a
                            class="card__category" href=""><?php echo $arItem['DETAIL_PICTURE']; ?></a><a
                            class="card__name" href=""><?php echo $arItem['NAME']; ?></a>
                    <div class="card__footer">
                        <div class="card__price card__price--actual">65 300 ₽</div>
                        <div class="card__price card__price--old">81 250 ₽</div>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-navigation">
        <div class="swiper-button-prev">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 5L4 12M4 12L11 19M4 12H20" stroke="#131313" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <div class="swiper-button-next">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 5L20 12M20 12L13 19M20 12H4" stroke="#131313" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </div>
</div>