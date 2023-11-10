<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Покупака и оплата");
?>
    <section class="payments">
        <div class="_container">
            <h1 class="title-page">Покупка и оплата</h1>
        </div>
        <div class="steps">
            <div class="_container">
                <h2 class="steps__title"> Покупка слухового аппарата</h2>
                <ul class="steps__list">
                    <?php $APPLICATION->IncludeComponent(
                        'audiotech:steps',
                        '',
                    ) ?>
                </ul>
            </div>
        </div>
    </section>
    <section class="buyers">
        <div class="_container">
            <h2 class="section-title">Способы оплаты</h2>
            <div class="buyers__wrap">
                <?php $APPLICATION->IncludeComponent(
                    'audiotech:buyers',
                    '',
                ) ?>
            </div>
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
                <?php $APPLICATION->IncludeComponent(
                    'audiotech:offersblock',
                    '',
                ) ?>
            </div>
        </div>
    </section>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>