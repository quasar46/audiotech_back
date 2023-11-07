<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>


<?php foreach ($arResult['SLIDES'] as $arItem) { ?>
    <div class="swiper-slide">
        <div class="article-preview"><a class="article-preview__pic" href="<?php echo $arItem['ATT_LINK_VALUE'] ?>"><img
                        src="<?php echo $arItem['URL_PICTURE'] ?>" alt=""></a>
            <div class="article-preview__date">25 фев 2023</div>
            <a class="article-preview__name" href=""><?php echo $arItem['NAME'] ?></a>
            <p class="article-preview__text"><?php echo $arItem['DETAIL_TEXT'] ?></p>
        </div>
    </div>
<?php }
?>

