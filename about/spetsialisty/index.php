<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Специалисты");
?>
    <div class="about">
        <div class="_container">
            <h1 class="title-page"><?php $APPLICATION->ShowTitle('false')?></h1>
        </div>
        <div class="_container _container--mode">
            <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "menu.section",
                array(
                    "CHILD_MENU_TYPE" => "horizontal",
                    "MENU_CACHE_TIME" => "3600",
                    "ROOT_MENU_TYPE" => "horizontal",
                    "COMPONENT_TEMPLATE" => "menu.section"
                ),
                false
            ); ?>
            <div class="tabs__content">
                <div class="tabs__pane">
                    <div class="tabs__pane-wrap">
                        <div class="about__doctors doctors">
                            <div class="doctors__item"><img class="doctors__pic"
                                                            src="<?php echo SITE_TEMPLATE_PATH; ?>/img/doc1.jpg"
                                                            alt=""><span
                                        class="doctors__profile">Врач оториноларинголог-сурдолог</span><span
                                        class="doctors__name">Васильева Екатерина Вячеславовна1</span><span
                                        class="doctors__education">Кандидат медицинских наук <br>Стаж 8 лет</span>
                                <div class="doctors__location">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M5.05051 4.04999C6.36333 2.73717 8.14389 1.99963 10.0005 1.99963C11.8571 1.99963 13.6377 2.73717 14.9505 4.04999C16.2633 5.36281 17.0009 7.14338 17.0009 8.99999C17.0009 10.8566 16.2633 12.6372 14.9505 13.95L10.0005 18.9L5.05051 13.95C4.40042 13.3 3.88474 12.5283 3.53291 11.6789C3.18108 10.8296 3 9.9193 3 8.99999C3 8.08068 3.18108 7.17037 3.53291 6.32104C3.88474 5.47172 4.40042 4.70001 5.05051 4.04999ZM10.0005 11C10.5309 11 11.0396 10.7893 11.4147 10.4142C11.7898 10.0391 12.0005 9.53042 12.0005 8.99999C12.0005 8.46956 11.7898 7.96085 11.4147 7.58578C11.0396 7.2107 10.5309 6.99999 10.0005 6.99999C9.47007 6.99999 8.96136 7.2107 8.58629 7.58578C8.21122 7.96085 8.0005 8.46956 8.0005 8.99999C8.0005 9.53042 8.21122 10.0391 8.58629 10.4142C8.96136 10.7893 9.47007 11 10.0005 11Z"
                                              fill="#CCCCCC"/>
                                    </svg>
                                    <span>Центр на Мирославской</span></div>
                                <button class="btn btn--red btn--m doctors__item-btn" data-target="modal-reg">Записаться
                                    на приём
                                </button>
                            </div>
                            <div class="doctors__item"><img class="doctors__pic"
                                                            src="<?php echo SITE_TEMPLATE_PATH; ?>/img/doc1.jpg"
                                                            alt=""><span
                                        class="doctors__profile">Врач оториноларинголог-сурдолог</span><span
                                        class="doctors__name">Васильева Екатерина Вячеславовна2</span><span
                                        class="doctors__education">Кандидат медицинских наук <br>Стаж 8 лет</span>
                                <div class="doctors__location">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M5.05051 4.04999C6.36333 2.73717 8.14389 1.99963 10.0005 1.99963C11.8571 1.99963 13.6377 2.73717 14.9505 4.04999C16.2633 5.36281 17.0009 7.14338 17.0009 8.99999C17.0009 10.8566 16.2633 12.6372 14.9505 13.95L10.0005 18.9L5.05051 13.95C4.40042 13.3 3.88474 12.5283 3.53291 11.6789C3.18108 10.8296 3 9.9193 3 8.99999C3 8.08068 3.18108 7.17037 3.53291 6.32104C3.88474 5.47172 4.40042 4.70001 5.05051 4.04999ZM10.0005 11C10.5309 11 11.0396 10.7893 11.4147 10.4142C11.7898 10.0391 12.0005 9.53042 12.0005 8.99999C12.0005 8.46956 11.7898 7.96085 11.4147 7.58578C11.0396 7.2107 10.5309 6.99999 10.0005 6.99999C9.47007 6.99999 8.96136 7.2107 8.58629 7.58578C8.21122 7.96085 8.0005 8.46956 8.0005 8.99999C8.0005 9.53042 8.21122 10.0391 8.58629 10.4142C8.96136 10.7893 9.47007 11 10.0005 11Z"
                                              fill="#CCCCCC"/>
                                    </svg>
                                    <span>Центр на Мирославской</span></div>
                                <button class="btn btn--red btn--m doctors__item-btn" data-target="modal-reg">Записаться
                                    на приём
                                </button>
                            </div>
                            <div class="doctors__item"><img class="doctors__pic"
                                                            src="<?php echo SITE_TEMPLATE_PATH; ?>/img/doc1.jpg"
                                                            alt=""><span
                                        class="doctors__profile">Врач оториноларинголог-сурдолог</span><span
                                        class="doctors__name">Васильева Екатерина Вячеславовна3</span><span
                                        class="doctors__education">Кандидат медицинских наук <br>Стаж 8 лет</span>
                                <div class="doctors__location">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M5.05051 4.04999C6.36333 2.73717 8.14389 1.99963 10.0005 1.99963C11.8571 1.99963 13.6377 2.73717 14.9505 4.04999C16.2633 5.36281 17.0009 7.14338 17.0009 8.99999C17.0009 10.8566 16.2633 12.6372 14.9505 13.95L10.0005 18.9L5.05051 13.95C4.40042 13.3 3.88474 12.5283 3.53291 11.6789C3.18108 10.8296 3 9.9193 3 8.99999C3 8.08068 3.18108 7.17037 3.53291 6.32104C3.88474 5.47172 4.40042 4.70001 5.05051 4.04999ZM10.0005 11C10.5309 11 11.0396 10.7893 11.4147 10.4142C11.7898 10.0391 12.0005 9.53042 12.0005 8.99999C12.0005 8.46956 11.7898 7.96085 11.4147 7.58578C11.0396 7.2107 10.5309 6.99999 10.0005 6.99999C9.47007 6.99999 8.96136 7.2107 8.58629 7.58578C8.21122 7.96085 8.0005 8.46956 8.0005 8.99999C8.0005 9.53042 8.21122 10.0391 8.58629 10.4142C8.96136 10.7893 9.47007 11 10.0005 11Z"
                                              fill="#CCCCCC"/>
                                    </svg>
                                    <span>Центр на Мирославской</span></div>
                                <button class="btn btn--red btn--m doctors__item-btn" data-target="modal-reg">Записаться
                                    на приём
                                </button>
                            </div>
                            <div class="doctors__item"><img class="doctors__pic"
                                                            src="<?php echo SITE_TEMPLATE_PATH; ?>/img/doc1.jpg"
                                                            alt=""><span
                                        class="doctors__profile">Врач оториноларинголог-сурдолог</span><span
                                        class="doctors__name">Васильева Екатерина Вячеславовна4</span><span
                                        class="doctors__education">Кандидат медицинских наук <br>Стаж 8 лет</span>
                                <div class="doctors__location">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M5.05051 4.04999C6.36333 2.73717 8.14389 1.99963 10.0005 1.99963C11.8571 1.99963 13.6377 2.73717 14.9505 4.04999C16.2633 5.36281 17.0009 7.14338 17.0009 8.99999C17.0009 10.8566 16.2633 12.6372 14.9505 13.95L10.0005 18.9L5.05051 13.95C4.40042 13.3 3.88474 12.5283 3.53291 11.6789C3.18108 10.8296 3 9.9193 3 8.99999C3 8.08068 3.18108 7.17037 3.53291 6.32104C3.88474 5.47172 4.40042 4.70001 5.05051 4.04999ZM10.0005 11C10.5309 11 11.0396 10.7893 11.4147 10.4142C11.7898 10.0391 12.0005 9.53042 12.0005 8.99999C12.0005 8.46956 11.7898 7.96085 11.4147 7.58578C11.0396 7.2107 10.5309 6.99999 10.0005 6.99999C9.47007 6.99999 8.96136 7.2107 8.58629 7.58578C8.21122 7.96085 8.0005 8.46956 8.0005 8.99999C8.0005 9.53042 8.21122 10.0391 8.58629 10.4142C8.96136 10.7893 9.47007 11 10.0005 11Z"
                                              fill="#CCCCCC"/>
                                    </svg>
                                    <span>Центр на Мирославской</span></div>
                                <button class="btn btn--red btn--m doctors__item-btn" data-target="modal-reg">Записаться
                                    на приём
                                </button>
                            </div>
                            <div class="doctors__item"><img class="doctors__pic"
                                                            src="<?php echo SITE_TEMPLATE_PATH; ?>/img/doc1.jpg"
                                                            alt=""><span
                                        class="doctors__profile">Врач оториноларинголог-сурдолог</span><span
                                        class="doctors__name">Васильева Екатерина Вячеславовна5</span><span
                                        class="doctors__education">Кандидат медицинских наук <br>Стаж 8 лет</span>
                                <div class="doctors__location">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M5.05051 4.04999C6.36333 2.73717 8.14389 1.99963 10.0005 1.99963C11.8571 1.99963 13.6377 2.73717 14.9505 4.04999C16.2633 5.36281 17.0009 7.14338 17.0009 8.99999C17.0009 10.8566 16.2633 12.6372 14.9505 13.95L10.0005 18.9L5.05051 13.95C4.40042 13.3 3.88474 12.5283 3.53291 11.6789C3.18108 10.8296 3 9.9193 3 8.99999C3 8.08068 3.18108 7.17037 3.53291 6.32104C3.88474 5.47172 4.40042 4.70001 5.05051 4.04999ZM10.0005 11C10.5309 11 11.0396 10.7893 11.4147 10.4142C11.7898 10.0391 12.0005 9.53042 12.0005 8.99999C12.0005 8.46956 11.7898 7.96085 11.4147 7.58578C11.0396 7.2107 10.5309 6.99999 10.0005 6.99999C9.47007 6.99999 8.96136 7.2107 8.58629 7.58578C8.21122 7.96085 8.0005 8.46956 8.0005 8.99999C8.0005 9.53042 8.21122 10.0391 8.58629 10.4142C8.96136 10.7893 9.47007 11 10.0005 11Z"
                                              fill="#CCCCCC"/>
                                    </svg>
                                    <span>Центр на Мирославской</span></div>
                                <button class="btn btn--red btn--m doctors__item-btn" data-target="modal-reg">Записаться
                                    на приём
                                </button>
                            </div>
                            <div class="doctors__item"><img class="doctors__pic"
                                                            src="<?php echo SITE_TEMPLATE_PATH; ?>/img/doc1.jpg"
                                                            alt=""><span
                                        class="doctors__profile">Врач оториноларинголог-сурдолог</span><span
                                        class="doctors__name">Васильева Екатерина Вячеславовна6</span><span
                                        class="doctors__education">Кандидат медицинских наук <br>Стаж 8 лет</span>
                                <div class="doctors__location">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M5.05051 4.04999C6.36333 2.73717 8.14389 1.99963 10.0005 1.99963C11.8571 1.99963 13.6377 2.73717 14.9505 4.04999C16.2633 5.36281 17.0009 7.14338 17.0009 8.99999C17.0009 10.8566 16.2633 12.6372 14.9505 13.95L10.0005 18.9L5.05051 13.95C4.40042 13.3 3.88474 12.5283 3.53291 11.6789C3.18108 10.8296 3 9.9193 3 8.99999C3 8.08068 3.18108 7.17037 3.53291 6.32104C3.88474 5.47172 4.40042 4.70001 5.05051 4.04999ZM10.0005 11C10.5309 11 11.0396 10.7893 11.4147 10.4142C11.7898 10.0391 12.0005 9.53042 12.0005 8.99999C12.0005 8.46956 11.7898 7.96085 11.4147 7.58578C11.0396 7.2107 10.5309 6.99999 10.0005 6.99999C9.47007 6.99999 8.96136 7.2107 8.58629 7.58578C8.21122 7.96085 8.0005 8.46956 8.0005 8.99999C8.0005 9.53042 8.21122 10.0391 8.58629 10.4142C8.96136 10.7893 9.47007 11 10.0005 11Z"
                                              fill="#CCCCCC"/>
                                    </svg>
                                    <span>Центр на Мирославской</span></div>
                                <button class="btn btn--red btn--m doctors__item-btn" data-target="modal-reg">Записаться
                                    на приём
                                </button>
                            </div>
                            <div class="doctors__item"><img class="doctors__pic"
                                                            src="<?php echo SITE_TEMPLATE_PATH; ?>/img/doc1.jpg"
                                                            alt=""><span
                                        class="doctors__profile">Врач оториноларинголог-сурдолог</span><span
                                        class="doctors__name">Васильева Екатерина Вячеславовна7</span><span
                                        class="doctors__education">Кандидат медицинских наук <br>Стаж 8 лет</span>
                                <div class="doctors__location">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M5.05051 4.04999C6.36333 2.73717 8.14389 1.99963 10.0005 1.99963C11.8571 1.99963 13.6377 2.73717 14.9505 4.04999C16.2633 5.36281 17.0009 7.14338 17.0009 8.99999C17.0009 10.8566 16.2633 12.6372 14.9505 13.95L10.0005 18.9L5.05051 13.95C4.40042 13.3 3.88474 12.5283 3.53291 11.6789C3.18108 10.8296 3 9.9193 3 8.99999C3 8.08068 3.18108 7.17037 3.53291 6.32104C3.88474 5.47172 4.40042 4.70001 5.05051 4.04999ZM10.0005 11C10.5309 11 11.0396 10.7893 11.4147 10.4142C11.7898 10.0391 12.0005 9.53042 12.0005 8.99999C12.0005 8.46956 11.7898 7.96085 11.4147 7.58578C11.0396 7.2107 10.5309 6.99999 10.0005 6.99999C9.47007 6.99999 8.96136 7.2107 8.58629 7.58578C8.21122 7.96085 8.0005 8.46956 8.0005 8.99999C8.0005 9.53042 8.21122 10.0391 8.58629 10.4142C8.96136 10.7893 9.47007 11 10.0005 11Z"
                                              fill="#CCCCCC"/>
                                    </svg>
                                    <span>Центр на Мирославской</span></div>
                                <button class="btn btn--red btn--m doctors__item-btn" data-target="modal-reg">Записаться
                                    на приём
                                </button>
                            </div>
                            <div class="doctors__item"><img class="doctors__pic"
                                                            src="<?php echo SITE_TEMPLATE_PATH; ?>/img/doc1.jpg"
                                                            alt=""><span
                                        class="doctors__profile">Врач оториноларинголог-сурдолог</span><span
                                        class="doctors__name">Васильева Екатерина Вячеславовна8</span><span
                                        class="doctors__education">Кандидат медицинских наук <br>Стаж 8 лет</span>
                                <div class="doctors__location">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M5.05051 4.04999C6.36333 2.73717 8.14389 1.99963 10.0005 1.99963C11.8571 1.99963 13.6377 2.73717 14.9505 4.04999C16.2633 5.36281 17.0009 7.14338 17.0009 8.99999C17.0009 10.8566 16.2633 12.6372 14.9505 13.95L10.0005 18.9L5.05051 13.95C4.40042 13.3 3.88474 12.5283 3.53291 11.6789C3.18108 10.8296 3 9.9193 3 8.99999C3 8.08068 3.18108 7.17037 3.53291 6.32104C3.88474 5.47172 4.40042 4.70001 5.05051 4.04999ZM10.0005 11C10.5309 11 11.0396 10.7893 11.4147 10.4142C11.7898 10.0391 12.0005 9.53042 12.0005 8.99999C12.0005 8.46956 11.7898 7.96085 11.4147 7.58578C11.0396 7.2107 10.5309 6.99999 10.0005 6.99999C9.47007 6.99999 8.96136 7.2107 8.58629 7.58578C8.21122 7.96085 8.0005 8.46956 8.0005 8.99999C8.0005 9.53042 8.21122 10.0391 8.58629 10.4142C8.96136 10.7893 9.47007 11 10.0005 11Z"
                                              fill="#CCCCCC"/>
                                    </svg>
                                    <span>Центр на Мирославской</span></div>
                                <button class="btn btn--red btn--m doctors__item-btn" data-target="modal-reg">Записаться
                                    на приём
                                </button>
                            </div>
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
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>