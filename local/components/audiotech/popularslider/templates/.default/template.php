<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>



<?php foreach ($arResult['ITEMS'] as $arItem) {
    ?>
    <div class="swiper-slide">
        <div class="card"><a class="card__pic" href=""><img
                        src="<?php echo $arItem['URL_PICTURE']; ?>" alt=""></a><a
                    class="card__category" href=""><?php echo $arItem['DETAIL_PICTURE']; ?></a><a class="card__name" href=""><?php echo $arItem['NAME']; ?></a>
            <div class="card__footer">
                <div class="card__price card__price--actual">65 300 ₽</div>
                <div class="card__price card__price--old">81 250 ₽</div>
            </div>
        </div>
    </div>
<?php } ?>

