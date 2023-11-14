<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>
<div class="about">
    <div class="_container">
        <h1 class="title-page">О нас</h1>
    </div>
    <div class="_container _container--mode">
        <div class="tabs__nav">
            <a class="tabs__btn" href="/about/company">Компания</a> <a class="tabs__btn" href="/about/specialists">Специалисты</a>
            <a class="tabs__btn active" href="/about/news">Новости</a> <a class="tabs__btn" href="/about/licenses">Лицензии</a>
        </div>
        <div class="tabs__content">
            <div class="tabs__pane show">
                <div class="tabs__pane-wrap">
                    <div class="chips">
                        <div class="chips__inner">
                            <a class="chips__item">Все</a>
                            <?php foreach ($arResult['SECTION'] as $arSection) : ?>
                            <a class="chips__item" href="<?php echo $arSection['SECTION_PAGE_URL']?>">
                                <?php echo $arSection['NAME'] ?>
                            </a>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <div class="news">
                        <div class="subscribe">
                            <h2 class="aside-block__title">Подписаться на рассылку</h2>
                            <div class="input__overlay">
                                <input class="input-default" type="email" placeholder="Электронная почта">
                            </div>
                            <p class="aside-block__agree">
                                Подписываясь, вы даете согласие на <a href="">обработку персональных данных</a>
                            </p>
                            <button class="btn btn--red btn--l btn--icn" type="submit">
                                Подписаться
                            </button>
                        </div>
                        <div class="news__list">
                            <?php
                            foreach ($arResult['ITEMS'] as $arItem) { ?>
                                <div class="article-preview"><a class="article-preview__pic"
                                                                href="<?php echo $arItem['DETAIL_PAGE_URL'] ?>"><img
                                                src="<?php echo $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt=""></a>
                                    <div class="article-preview__date"><?php echo $arItem['DATE_CREATE'] ?></div>
                                    <a class="article-preview__name"
                                       href="<?php echo $arItem['DETAIL_PAGE_URL'] ?>"><?php echo $arItem['NAME'] ?></a>
                                    <p class="article-preview__text"><?php echo $arItem['DETAIL_TEXT'] ?></p>
                                </div>
                            <?php }
                            ?>
                        </div>
                    </div>
                    <div class="pagination">
                        <div class="pagination__list">
                            <a class="pagination__prev" href=""> </a><a class="pagination__page active" href="">1</a><a
                                    class="pagination__page" href="">2</a><a class="pagination__page" href="">...</a><a
                                    class="pagination__page" href="">19</a><a class="pagination__next" href=""> </a>
                        </div>
                        <button class="btn btn--grey btn--m">Показать ещё &nbsp;<span id="cur-page">15</span>&nbsp;из&nbsp;
                            <span id="total-pages">100</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
