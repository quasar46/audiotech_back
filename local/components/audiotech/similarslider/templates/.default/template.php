<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>
<section class="slider-block">
    <h2 class="section-title">Похожие статьи</h2>
    <div class="slider-block__wrap swiper articles-slider pb0">
        <div class="swiper-wrapper">
            <?php foreach ($arResult['ITEMS'] as $arItem): ?>
                <div class="swiper-slide">
                    <div class="article-preview"><a class="article-preview__pic" href=""><img
                                    src="<?=$arItem['URL_PICTURE']?>" alt=""></a>
                        <div class="article-preview__date">25 фев 2023</div>
                        <a class="article-preview__name" href=""><?=$arItem['NAME']?></a>
                        <p class="article-preview__text"><?=$arItem['DETAIL_TEXT']?></p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>