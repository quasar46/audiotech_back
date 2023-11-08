<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<h2 class="section-title"><span>Аксессуары</span>
    <button class="btn btn--grey btn--m">Смотреть все</button>
</h2>
<div class="slider-block__wrap swiper actual-slider pr30">
    <div class="swiper-wrapper">

        <?php foreach ($arResult['ITEMS'] as $arItem) {
            ?>
            <div class="swiper-slide">
                <div class="card"><a class="card__pic" href=""><img
                                src="<?php echo $arItem['URL_PICTURE']; ?>" alt=""></a><a
                            class="card__category" href=""><?php echo $arItems['DETAIL_TEXT']; ?></a><a
                            class="card__name" href=""><?php echo $arItems['NAME']; ?></a>
                    <div class="card__footer">
                        <div class="card__price card__price--actual">36 000 ₽</div>
                        <div class="card__price card__price--old">43 500 ₽</div>
                    </div>
                    <button class="btn btn--red btn--icn btn--m">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 9V8C17 5.2385 14.7615 3 12 3C9.2385 3 7 5.2385 7 8V9H4C3.44772 9 3 9.44772 3 10V18C3 19.6575 4.3425 21 6 21H18C19.6575 21 21 19.6575 21 18V10C21 9.44772 20.5523 9 20 9H17ZM9 8C9 6.34325 10.3433 5 12 5C13.6567 5 15 6.34325 15 8V9H9V8ZM19 18C19 18.5525 18.5525 19 18 19H6C5.4475 19 5 18.5525 5 18V11H19V18Z"
                                  fill="white"/>
                        </svg>
                        В корзину
                    </button>
                </div>
            </div>
        <?php } ?>

    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 5L4 12M4 12L11 19M4 12H20" stroke="#131313" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round"/>
        </svg>
    </div>
    <div class="swiper-button-next">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13 5L20 12M20 12L13 19M20 12H4" stroke="#131313" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </div>
</div>