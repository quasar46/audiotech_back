<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новости");
?>
    <div class="about">
        <div class="_container">
            <h1 class="title-page">О нас</h1>
        </div>
        <div class="_container _container--mode">
            <div class="tabs__nav">
                <a class="tabs__btn" href="/about/company">Компания</a>
                <a class="tabs__btn" href="/about/specialists">Специалисты</a>
                <a class="tabs__btn active" href="/about/news">Новости</a>
                <a class="tabs__btn" href="/about/licenses">Лицензии</a>
            </div>
            <div class="tabs__content">
                <div class="tabs__pane show">
                    <div class="tabs__pane-wrap">
                        <div class="chips">
                            <div class="chips__inner">
                                <button class="chips__item">Все</button>
                                <button class="chips__item">Забота о слухе и диагностика</button>
                                <button class="chips__item">Акции и скидки</button>
                            </div>
                        </div>
                        <div class="news">
                            <div class="subscribe">
                                <h2 class="aside-block__title">Подписаться на рассылку</h2>
                                <div class="input__overlay">
                                    <input class="input-default" type="email" placeholder="Электронная почта">
                                </div>
                                <p class="aside-block__agree">Подписываясь, вы даете согласие на <a href="">обработку
                                        персональных данных</a></p>
                                <button class="btn btn--red btn--l btn--icn" type="submit">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 8L10.89 13.26C11.2187 13.4793 11.6049 13.5963 12 13.5963C12.3951 13.5963 12.7813 13.4793 13.11 13.26L21 8M5 19H19C19.5304 19 20.0391 18.7893 20.4142 18.4142C20.7893 18.0391 21 17.5304 21 17V7C21 6.46957 20.7893 5.96086 20.4142 5.58579C20.0391 5.21071 19.5304 5 19 5H5C4.46957 5 3.96086 5.21071 3.58579 5.58579C3.21071 5.96086 3 6.46957 3 7V17C3 17.5304 3.21071 18.0391 3.58579 18.4142C3.96086 18.7893 4.46957 19 5 19Z"
                                              stroke="white" stroke-width="2" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>
                                    <span>Подписаться</span></button>
                            </div>
                            <?php $APPLICATION->IncludeComponent(
                                "bitrix:news",
                                "news",
                                array(
                                    "ADD_ELEMENT_CHAIN" => "N",
                                    "ADD_SECTIONS_CHAIN" => "Y",
                                    "AJAX_MODE" => "N",
                                    "AJAX_OPTION_ADDITIONAL" => "",
                                    "AJAX_OPTION_HISTORY" => "N",
                                    "AJAX_OPTION_JUMP" => "N",
                                    "AJAX_OPTION_STYLE" => "N",
                                    "BROWSER_TITLE" => "-",
                                    "CACHE_FILTER" => "N",
                                    "CACHE_GROUPS" => "N",
                                    "CACHE_TIME" => "36000000",
                                    "CACHE_TYPE" => "A",
                                    "CHECK_DATES" => "Y",
                                    "DETAIL_ACTIVE_DATE_FORMAT" => "j M Y",
                                    "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
                                    "DETAIL_DISPLAY_TOP_PAGER" => "N",
                                    "DETAIL_FIELD_CODE" => array(
                                        0 => "",
                                        1 => "",
                                    ),
                                    "DETAIL_PAGER_SHOW_ALL" => "N",
                                    "DETAIL_PAGER_TEMPLATE" => "",
                                    "DETAIL_PAGER_TITLE" => "Страница",
                                    "DETAIL_PROPERTY_CODE" => array(
                                        0 => "",
                                        1 => "",
                                    ),
                                    "DETAIL_SET_CANONICAL_URL" => "N",
                                    "DISPLAY_BOTTOM_PAGER" => "N",
                                    "DISPLAY_DATE" => "Y",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "Y",
                                    "DISPLAY_PREVIEW_TEXT" => "Y",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => "17",
                                    "IBLOCK_TYPE" => "content",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                                    "LIST_ACTIVE_DATE_FORMAT" => "j M Y",
                                    "LIST_FIELD_CODE" => array(
                                        0 => "",
                                        1 => "",
                                    ),
                                    "LIST_PROPERTY_CODE" => array(
                                        0 => "",
                                        1 => "",
                                    ),
                                    "MESSAGE_404" => "",
                                    "META_DESCRIPTION" => "-",
                                    "META_KEYWORDS" => "-",
                                    "NEWS_COUNT" => "12",
                                    "PAGER_BASE_LINK_ENABLE" => "N",
                                    "PAGER_DESC_NUMBERING" => "N",
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                    "PAGER_SHOW_ALL" => "N",
                                    "PAGER_SHOW_ALWAYS" => "N",
                                    "PAGER_TEMPLATE" => ".default",
                                    "PAGER_TITLE" => "Новости",
                                    "PREVIEW_TRUNCATE_LEN" => "",
                                    "SEF_FOLDER" => "/about/news/",
                                    "SEF_MODE" => "Y",
                                    "SET_LAST_MODIFIED" => "N",
                                    "SET_STATUS_404" => "Y",
                                    "SET_TITLE" => "Y",
                                    "SHOW_404" => "N",
                                    "SORT_BY1" => "ACTIVE_FROM",
                                    "SORT_BY2" => "SORT",
                                    "SORT_ORDER1" => "DESC",
                                    "SORT_ORDER2" => "ASC",
                                    "STRICT_SECTION_CHECK" => "N",
                                    "USE_CATEGORIES" => "N",
                                    "USE_FILTER" => "N",
                                    "USE_PERMISSIONS" => "N",
                                    "USE_RATING" => "N",
                                    "USE_REVIEW" => "N",
                                    "USE_RSS" => "N",
                                    "USE_SEARCH" => "N",
                                    "USE_SHARE" => "N",
                                    "COMPONENT_TEMPLATE" => "news",
                                    "SEF_URL_TEMPLATES" => array(
                                        "news" => "/about/news/",
                                        "section" => "/about/news/#ELEMENT_CODE#/",
                                        "detail" => "#ELEMENT_CODE#/",
                                    )
                                ),
                                false
                            ); ?>

                        </div>
                        <div class="pagination">
                            <div class="pagination__list"><a class="pagination__prev" href="">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 5L4 12M4 12L11 19M4 12H20" stroke="#131313" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a><a class="pagination__page active" href="">1</a><a class="pagination__page"
                                                                                       href="">2</a><a
                                        class="pagination__page" href="">...</a><a class="pagination__page"
                                                                                   href="">19</a><a
                                        class="pagination__next" href="">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 5L20 12M20 12L13 19M20 12H4" stroke="#131313" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a></div>
                            <button class="btn btn--grey btn--m">Показать ещё &nbsp;<span id="cur-page">15</span>&nbsp;из&nbsp;
                                <span id="total-pages">100</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>