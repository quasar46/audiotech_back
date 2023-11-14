<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Компания");
?>
<?php

use Bitrix\Main\Page\Asset;

$obAsset = Asset::getInstance();
$obAsset->addJs('https://api-maps.yandex.ru/2.1/?lang=ru_RU');
$obAsset->addJs(SITE_TEMPLATE_PATH . '/js/balloon_html-about.js');

?>
    <div class="about">
        <div class="_container">
            <h1 class="title-page">О нас</h1>
        </div>
        <div class="_container _container--mode">
            <div class="tabs__nav">
                <a class="tabs__btn active" href="/about/company">Компания</a>
                <a class="tabs__btn" href="/about/specialists">Специалисты</a>
                <a class="tabs__btn" href="/about/news">Новости</a>
                <a class="tabs__btn" href="/about/licenses">Лицензии</a>
            </div>
            <div class="tabs__content">
                <div class="tabs__pane">
                    <div class="tabs__pane-wrap">
                        <h2 class="section-title">Центры слуха Audiotech</h2>
                        <p class="tabs__par tabs__par--container strong">Morbi et fermentum lorem. Praesent iaculis
                            sem eu mauris ultricies dictum. Pellentesque finibus, ante sed tincidunt feugiat, dui
                            sem malesuada sem, nec elementum libero lectus sagittis nunc. Morbi et fermentum lorem.
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                            egestas. </p>
                        <div class="about__text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet volutpat sapien.
                                Sed eu ipsum a diam placerat vulputate. Maecenas laoreet ultrices nisi id sagittis.
                                Sed metus leo, tempor non semper eu, posuere vitae quam. Sed vitae sem lorem.
                                Aliquam vestibulum elementum purus et iaculis. Nunc at maximus magna. </p>
                            <p>Praesent iaculis sem eu mauris ultricies dictum. Pellentesque finibus, ante sed
                                tincidunt feugiat, dui sem malesuada sem, nec elementum libero lectus sagittis nunc.
                                Morbi et fermentum lorem. Pellentesque habitant morbi tristique senectus et netus et
                                malesuada fames ac turpis egestas. Quisque tempor feugiat velit nec elementum.</p>
                        </div>
                        <div class="about-cifrus">
                            <h2 class="section-title section-title--w">Мы в цифрах</h2>
                            <div class="about-cifrus__wrap">
                                <ul class="about-cifrus__list">
                                    <li class="about-cifrus__item"><span class="about-cifrus__number">3</span><span
                                                class="about-cifrus__label">центра слуха </span></li>
                                    <li class="about-cifrus__item"><span class="about-cifrus__number">12</span><span
                                                class="about-cifrus__label">тысяч покупателей ежегодно</span></li>
                                    <li class="about-cifrus__item"><span
                                                class="about-cifrus__number">200</span><span
                                                class="about-cifrus__label">моделей в ассортименте</span></li>
                                    <li class="about-cifrus__item"><span class="about-cifrus__number">15</span><span
                                                class="about-cifrus__label">лет на рынке</span></li>
                                </ul>
                                <div class="about-cifrus__video">
                                    <div class="play-video"><img src="/local/templates/audiotech/img/video-back.jpg"
                                                                 alt="">
                                        <button class="btn-play"></button>
                                    </div>
                                </div>
                                <div class="video-wrap">
                                    <iframe id="video" width="1024" height="768"
                                            src="https://www.youtube.com/embed/LvQossUx7ss?si=pH9KasmmTG0Q50Ew&amp;controls=0"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    <button class="video-wrap__close stop-video"></button>
                                </div>
                            </div>
                        </div>
                        <div class="map">
                            <h2 class="section-title map__title"><span>Представительства компании</span>
                                <div class="select-place">
                                    <select class="mySelect">
                                        <option value="Алма-Ата">Алма-Ата</option>
                                        <option value="Алма-Ата">Алма-Ата</option>
                                        <option value="Алма-Ата">Алма-Ата</option>
                                    </select>
                                </div>
                            </h2>
                            <div class="map-content map-content--about" id="map-about"></div>
                        </div>
                        <div class="offers about__offers">
                            <div class="offers__wrap">
                                <div class="offers__item"><img
                                            src="/local/templates/audiotech/img/offers/icon-headphones.svg" alt="">
                                    <div class="offers__name">Проверка слуха <br> онлайн</div>
                                    <p class="offers__text">Узнайте как хорошо вы слышите с помощью быстрого и
                                        простого онлайн теста</p>
                                    <button class="btn btn--red btn--m">Пройти тест на слух</button>
                                </div>
                                <div class="offers__item"><img
                                            src="/local/templates/audiotech/img/offers/icon-test.svg" alt="">
                                    <div class="offers__name">Бесплатная<br> диагностика слуха</div>
                                    <p class="offers__text">Посетите нашего специалиста в центре слуха и получите
                                        бесплатную консультацию</p><a class="btn btn--red btn--m"
                                                                      data-target="modal-reg">Записаться на
                                        приём</a>
                                </div>
                                <div class="offers__item"><img
                                            src="/local/templates/audiotech/img/offers/icon-phone.svg" alt="">
                                    <div class="offers__name">Дистанционная<br> поддержка</div>
                                    <p class="offers__text">Посетите нашего специалиста в центре слуха и получите
                                        бесплатную консультацию</p><a class="btn btn--red btn--m"
                                                                      data-target="modal-call">Заказать звонок</a>
                                </div>
                                <div class="offers__item"><img
                                            src="/local/templates/audiotech/img/offers/icon-accessories.svg" alt="">
                                    <div class="offers__name">Купить<br> аксессуары</div>
                                    <p class="offers__text">Закажите аксессуары к слуховым аппаратам онлайн в нашем
                                        интернет-магазине</p><a class="btn btn--red btn--m" href="catalog.html">Перейти
                                        в каталог</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>