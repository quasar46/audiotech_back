<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Доставка");
?>
    <section class="map">
        <div class="_container">
            <h2 class="title-page map__title">Доставка</h2>
        </div>
        <div class="chips">
            <div class="_container">
                <div class="chips__inner">
                    <button class="chips__item" href="">Казпочта</button>
                    <button class="chips__item" href="">СДЭК</button>
                    <button class="chips__item" href="">Boxberry</button>
                    <button class="chips__item" href="">Склад самовывоза</button>
                </div>
            </div>
        </div>
        <div class="_container">
            <div class="map-content" id="map-delivery"></div>
        </div>
    </section>
    <section class="questions">
        <div class="_container">
            <h2 class="section-title"><span>Вопросы по оплате</span>
                <button class="btn btn--grey btn--m">Вопросы и ответы</button>
            </h2>
            <div class="accordion accordion--mode" id="accordion">
                <?php $APPLICATION->IncludeComponent(
                    'audiotech:questions',
                    '',
                ) ?>
            </div>
        </div>
    </section>
    <section class="offers">
        <div class="_container">
            <div class="offers__wrap">
                <?php
                $APPLICATION->IncludeComponent(
                    'audiotech:offers',
                    '',
                )
                ?>
            </div>
        </div>
    </section>
    </main>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>