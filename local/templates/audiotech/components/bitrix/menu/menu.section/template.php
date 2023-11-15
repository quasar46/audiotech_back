<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<? if (!empty($arResult)): ?>
    <div class="tabs__nav">
        <?
        foreach ($arResult as $arItem):
            if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) {
                continue;
            }
            ?>
            <? if ($arItem["SELECTED"]): ?>
            <a href="<?= $arItem["LINK"] ?>" class="tabs__btn active"><?= $arItem["TEXT"] ?></a>
        <? else: ?>
            <a class="tabs__btn" href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
        <? endif ?>

        <? endforeach ?>

    </div>
<? endif ?>