<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("");
?>

    <div class="main-slider">
        <div class="parallax-bg"
             style="background-image: url(<?php echo SITE_TEMPLATE_PATH . '/img/' ?>main-slider/slide1-b.jpg)"></div>
        <div class="swiper-wrapper">
            <?php $APPLICATION->IncludeComponent(
                "audiotech:mainslider",
                ""
            ); ?>
        </div>
        <div class="_container _container--abs">
            <div class="swiper-nav">
                <div class="swiper-nav__box">
                    <div class="swiper-button-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 5L4 12M4 12L11 19M4 12H20" stroke="#131313" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="swiper-button-next">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 5L20 12M20 12L13 19M20 12H4" stroke="#131313" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <section class="info-blocks">
        <div class="_container">
            <h2 class="section-title">Подходящее решение для каждого</h2>
            <div class="info-blocks__wrap">
                <?php $APPLICATION->IncludeComponent(
                    "audiotech:solutions",
                    ""
                ) ?>
            </div>
        </div>
    </section>
    <section class="human-block human-block--mode human-block--doc1">
        <div class="human-block__container">
            <div class="_container">
                <div class="human-block__wrap">
                    <h2 class="section-title human-block__title">Запишитесь на приём для бесплатной проверки слуха</h2>
                    <div class="human-block__descr">Осуществляем подбор и настройку цифрового гаджета в полном
                        соответствии с нуждами пациента
                    </div>
                    <a class="btn btn--red btn--icn btn--l" href="" data-target="modal-reg">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M8 2C8.55228 2 9 2.44772 9 3V4H15V3C15 2.44772 15.4477 2 16 2C16.5523 2 17 2.44772 17 3V4H19C19.7957 4 20.5587 4.31607 21.1213 4.87868C21.6839 5.44129 22 6.20435 22 7V19C22 19.7957 21.6839 20.5587 21.1213 21.1213C20.5587 21.6839 19.7957 22 19 22H5C4.20435 22 3.44129 21.6839 2.87868 21.1213C2.31607 20.5587 2 19.7957 2 19V7C2 6.20435 2.31607 5.44129 2.87868 4.87868C3.44129 4.31607 4.20435 4 5 4H7V3C7 2.44772 7.44772 2 8 2ZM7 6H5C4.73478 6 4.48043 6.10536 4.29289 6.29289C4.10536 6.48043 4 6.73478 4 7V19C4 19.2652 4.10536 19.5196 4.29289 19.7071C4.48043 19.8946 4.73478 20 5 20H19C19.2652 20 19.5196 19.8946 19.7071 19.7071C19.8946 19.5196 20 19.2652 20 19V7C20 6.73478 19.8946 6.48043 19.7071 6.29289C19.5196 6.10536 19.2652 6 19 6H17V7C17 7.55228 16.5523 8 16 8C15.4477 8 15 7.55228 15 7V6H9V7C9 7.55228 8.55228 8 8 8C7.44772 8 7 7.55228 7 7V6Z"
                                  fill="white"/>
                            <path d="M9 11C9 11.5523 8.55228 12 8 12C7.44772 12 7 11.5523 7 11C7 10.4477 7.44772 10 8 10C8.55228 10 9 10.4477 9 11Z"
                                  fill="white"/>
                            <path d="M9 15C9 15.5523 8.55228 16 8 16C7.44772 16 7 15.5523 7 15C7 14.4477 7.44772 14 8 14C8.55228 14 9 14.4477 9 15Z"
                                  fill="white"/>
                            <path d="M13 11C13 11.5523 12.5523 12 12 12C11.4477 12 11 11.5523 11 11C11 10.4477 11.4477 10 12 10C12.5523 10 13 10.4477 13 11Z"
                                  fill="white"/>
                            <path d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                  fill="white"/>
                            <path d="M17 11C17 11.5523 16.5523 12 16 12C15.4477 12 15 11.5523 15 11C15 10.4477 15.4477 10 16 10C16.5523 10 17 10.4477 17 11Z"
                                  fill="white"/>
                        </svg>
                        Записаться на приём</a>
                </div>
            </div>
        </div>
    </section>
    <section class="headphone-block">
        <div class="_container">
            <div class="headphone-block__wrap">
                <div class="headphone-block__box">
                    <h2 class="section-title headphone-block__title">Пройдите бесплатную онлайн-проверку слуха!</h2>
                    <div class="headphone-block__descr">Вам понадобятся только наушники и несколько минут вашего
                        времени
                    </div>
                    <button class="btn btn--red btn--icn btn--l">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M11 4C10.7348 4 10.4804 4.10536 10.2929 4.29289C10.1054 4.48043 10 4.73478 10 5C10 5.26522 10.1054 5.51957 10.2929 5.70711C10.4804 5.89464 10.7348 6 11 6H13C13.2652 6 13.5196 5.89464 13.7071 5.70711C13.8946 5.51957 14 5.26522 14 5C14 4.73478 13.8946 4.48043 13.7071 4.29289C13.5196 4.10536 13.2652 4 13 4H11ZM8.87868 2.87868C9.44129 2.31607 10.2044 2 11 2H13C13.7956 2 14.5587 2.31607 15.1213 2.87868C15.4407 3.19808 15.6807 3.5821 15.8284 4H17C17.7956 4 18.5587 4.31607 19.1213 4.87868C19.6839 5.44129 20 6.20435 20 7V19C20 19.7957 19.6839 20.5587 19.1213 21.1213C18.5587 21.6839 17.7957 22 17 22H7C6.20435 22 5.44129 21.6839 4.87868 21.1213C4.31607 20.5587 4 19.7957 4 19V7C4 6.20435 4.31607 5.44129 4.87868 4.87868C5.44129 4.31607 6.20435 4 7 4H8.17157C8.31933 3.5821 8.55928 3.19808 8.87868 2.87868ZM8.17157 6H7C6.73478 6 6.48043 6.10536 6.29289 6.29289C6.10536 6.48043 6 6.73478 6 7V19C6 19.2652 6.10536 19.5196 6.29289 19.7071C6.48043 19.8946 6.73478 20 7 20H17C17.2652 20 17.5196 19.8946 17.7071 19.7071C17.8946 19.5196 18 19.2652 18 19V7C18 6.73478 17.8946 6.48043 17.7071 6.29289C17.5196 6.10536 17.2652 6 17 6H15.8284C15.6807 6.4179 15.4407 6.80192 15.1213 7.12132C14.5587 7.68393 13.7956 8 13 8H11C10.2044 8 9.44129 7.68393 8.87868 7.12132C8.55928 6.80192 8.31933 6.4179 8.17157 6ZM8 12C8 11.4477 8.44772 11 9 11H9.01C9.56228 11 10.01 11.4477 10.01 12C10.01 12.5523 9.56228 13 9.01 13H9C8.44772 13 8 12.5523 8 12ZM11 12C11 11.4477 11.4477 11 12 11H15C15.5523 11 16 11.4477 16 12C16 12.5523 15.5523 13 15 13H12C11.4477 13 11 12.5523 11 12ZM8 16C8 15.4477 8.44772 15 9 15H9.01C9.56228 15 10.01 15.4477 10.01 16C10.01 16.5523 9.56228 17 9.01 17H9C8.44772 17 8 16.5523 8 16ZM11 16C11 15.4477 11.4477 15 12 15H15C15.5523 15 16 15.4477 16 16C16 16.5523 15.5523 17 15 17H12C11.4477 17 11 16.5523 11 16Z"
                                  fill="white"/>
                        </svg>
                        Пройти тест
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="slider-block">
        <div class="_container">
            <h2 class="section-title"><span>Популярные слуховые аппараты</span>
                <button class="btn btn--grey btn--m">Смотреть все</button>
            </h2>
            <div class="slider-block__wrap swiper popular-slider pr30">
                <div class="swiper-wrapper">
                    <?php
                    $APPLICATION->IncludeComponent(
                        "audiotech:popularslider",
                        "",
                    )
                    ?>
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
        </div>
    </section>
    <section class="brends">
        <div class="_container">
            <h2 class="section-title brends__title">Надёжные устройства <br>от ведущих мировых брендов </h2>
            <div class="brends__wrap">
                <?php
                $APPLICATION->IncludeComponent(
                    "audiotech:brends",
                    "",
                )
                ?>
            </div>
        </div>
    </section>
    <section class="slider-block">
        <div class="_container">
            <h2 class="section-title"><span>Аксессуары</span>
                <button class="btn btn--grey btn--m">Смотреть все</button>
            </h2>
            <div class="slider-block__wrap swiper actual-slider pr30">
                <div class="swiper-wrapper">
                    <? $APPLICATION->IncludeComponent(
                        "audiotech:slideracsessuars",
                        "",
                    ) ?>
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
        </div>
    </section>
    <section class="find-centers">
        <div class="_container">
            <div class="find-centers__wrap">
                <div class="find-centers__box">
                    <div class="find-centers__item"><span class="find-centers__number">12</span><span
                                class="find-centers__descr">тысяч покупателей<br> ежегодно</span></div>
                    <div class="find-centers__item"><span class="find-centers__number">3</span><span
                                class="find-centers__descr">центра слуха </span></div>
                    <div class="find-centers__item"><span class="find-centers__number">200</span><span
                                class="find-centers__descr">моделей<br> в ассортименте</span></div>
                    <div class="find-centers__item"><span class="find-centers__number">15</span><span
                                class="find-centers__descr">лет на рынке</span></div>
                </div>
                <div class="find-centers__box">
                    <h2 class="section-title find-centers__title">Центры слуха Audiotech</h2>
                    <p class="find-centers__text">Комплексный подход к решению проблем людей с нарушенной функцией
                        слуха, уникальный опыт в области создания технических средств реабилитации позволяет предложить
                        нашим клиентам лучшие услуги на рынке</p>
                    <button class="btn btn--red btn--l btn--icn">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M10.5 4C8.9087 4 7.38258 4.63214 6.25736 5.75736C5.13214 6.88258 4.5 8.4087 4.5 10C4.5 10.7879 4.65519 11.5681 4.95672 12.2961C5.25825 13.0241 5.70021 13.6855 6.25736 14.2426C6.81451 14.7998 7.47595 15.2417 8.2039 15.5433C8.93185 15.8448 9.71207 16 10.5 16C11.2879 16 12.0681 15.8448 12.7961 15.5433C13.5241 15.2417 14.1855 14.7998 14.7426 14.2426C15.2998 13.6855 15.7417 13.0241 16.0433 12.2961C16.3448 11.5681 16.5 10.7879 16.5 10C16.5 8.4087 15.8679 6.88258 14.7426 5.75736C13.6174 4.63214 12.0913 4 10.5 4ZM4.84315 4.34315C6.34344 2.84285 8.37827 2 10.5 2C12.6217 2 14.6566 2.84285 16.1569 4.34315C17.6571 5.84344 18.5 7.87827 18.5 10C18.5 11.0506 18.2931 12.0909 17.891 13.0615C17.6172 13.7226 17.2565 14.3425 16.8196 14.9054L22.2071 20.2929C22.5976 20.6834 22.5976 21.3166 22.2071 21.7071C21.8166 22.0976 21.1834 22.0976 20.7929 21.7071L15.4054 16.3196C14.8425 16.7565 14.2226 17.1172 13.5615 17.391C12.5909 17.7931 11.5506 18 10.5 18C9.44943 18 8.40914 17.7931 7.43853 17.391C6.46793 16.989 5.58601 16.3997 4.84315 15.6569C4.10028 14.914 3.511 14.0321 3.10896 13.0615C2.70693 12.0909 2.5 11.0506 2.5 10C2.5 7.87827 3.34285 5.84344 4.84315 4.34315Z"
                                  fill="white"/>
                        </svg>
                        Найти центр
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="offers">
        <div class="_container">
            <div class="offers__wrap">
                <!--                --><?php //$APPLICATION->IncludeComponent(
                //                    "audiotech:offers",
                //                    "",
                //                ) ?>
            </div>
        </div>
    </section>
    <section class="slider-block">
        <div class="_container">
            <h2 class="section-title"><span>Блог</span>
                <button class="btn btn--grey btn--m">Всё о слухе</button>
            </h2>
            <div class="slider-block__wrap swiper blog-slider pb0">
                <div class="swiper-wrapper">
                    <?php $APPLICATION->IncludeComponent(
                        "audiotech:blogslider",
                        "",
                    ) ?>
                </div>
            </div>
        </div>
    </section>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>