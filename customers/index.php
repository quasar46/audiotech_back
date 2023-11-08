<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Покупателям");
?>
    <div class="_container breadcrumb-wrap">
        <div class="breadcrumb">
            <li><a href="index.html">Главная</a></li>
            <li><a>Покупателям</a></li>
        </div>
    </div>
    <section class="buyers">
        <div class="_container">
            <h1 class="title-page">Покупателям</h1>
            <div class="buyers__wrap">
                <?php $APPLICATION->IncludeComponent(
                    "audiotech:customers",
                    "",
                )
                ?>
               </div>
        </div>
    </section>
    <section class="offers">
        <div class="_container">
            <div class="offers__wrap">
                <?php $APPLICATION->IncludeComponent(
                    "audiotech:offers",
                    "",
                ) ?>
            </div>
        </div>
    </section>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>