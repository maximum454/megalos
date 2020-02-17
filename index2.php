<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<? $arPerfomace = array(); ?>
<? $arPerfomace_2 = array(); ?>
<? $arPerfomace_3 = array(); ?>
<div style="display: none;" class="111">
<? foreach ($arResult["ITEMS"] as $arItem): ?>
    <?
    $arId[] = $arItem["ID"];
    if (!empty($arItem["DISPLAY_PROPERTIES"]["PERFOMACE"]["VALUE"])) {
        $arPerfomace[] = $arItem["DISPLAY_PROPERTIES"]["PERFOMACE"]["VALUE"];
    }
    if (!empty($arItem["DISPLAY_PROPERTIES"]["PERFOMACE_2"]["VALUE"])) {
        $arPerfomace_2[] = $arItem["DISPLAY_PROPERTIES"]["PERFOMACE_2"]["VALUE"];
        $arPerfomace_3[$arItem["ID"]] = $arItem["DISPLAY_PROPERTIES"]["PERFOMACE_2"]["VALUE"];

    }
    ?>
    <?
    echo "<pre>";
    print_r($arPerfomace_3);
    echo "</pre>";
    ?>
<? endforeach; ?>
</div>


<?
asort($arPerfomace_3);
$id = implode(",", $arId);
$values = implode(",", $arPerfomace);
$values2 = implode(",", $arPerfomace_3);
?>
<div style="display: none;">
<? foreach ($arPerfomace_3 as $key => $arItem): ?>
    <?$arId2[] = $key;?>
    <?
echo "<pre>";
print_r($arPerfomace_2);
echo "</pre>";
    ?>
<? endforeach; ?>
</div>
<?
$id2 = implode(",", $arId2);
?>




<div class="filter__slider">
    <div class="primary">
        <div class="filter__metr">м³ в сутки</div>
        <input type="text" class="js-range-slider" value="" data-values="<?= $values ?>" data-key="<?= $id ?>">
    </div>
    <div class="filter__or">или</div>
    <div class="secondary">
        <?if($arItem["IBLOCK_ID"] == 11):?>
            <div class="filter__metr">литров в секунду</div>
        <?else:?>
            <div class="filter__metr">количество жильцов</div>
        <?endif;?>

        <input type="text" class="js-range-slider-2" value="" data-values="<?= $values2 ?>" data-key2="<?= $id2 ?>">
    </div>
</div>

<a href="#specifications" class="filter__btn  js-rec">Показать характеристики</a>

<div class="filter__specifications" id="specifications">
    <? foreach ($arResult["ITEMS"] as $key => $arItem): ?>
        <div class="properties hidden" id="<?= $arItem["ID"] ?>" data-num="<?= $key ?>"
             data-perfomace="<?= $arItem["DISPLAY_PROPERTIES"]["PERFOMACE"]["VALUE"] ?>">
            <h6 class="filter__subtitle">Вам подходит</h6>
            <div class="filter__name"><?= $arItem["NAME"] ?></div>
            <? if (!empty($arItem["DETAIL_PICTURE"])): ?>
                <div class="lightgallery">
                    <a href="<?= $arItem["DETAIL_PICTURE"]["SRC"] ?>" class="filter__img">
                        <img src="<?= $arItem["DETAIL_PICTURE"]["SRC"] ?>" alt="<?= $arItem["NAME"] ?>">
                    </a>
                </div>
            <? endif; ?>
            <? if (!empty($arItem["DISPLAY_PROPERTIES"]["SPECIFICAL"])): ?>
                <ul class="sp">
                    <? foreach ($arItem["DISPLAY_PROPERTIES"]["SPECIFICAL"]["VALUE"] as $k => $value): ?>
                        <li>
                            <span class="key"><?= $value ?></span>
                            <span class="value"><?= $arItem["DISPLAY_PROPERTIES"]["SPECIFICAL"]["DESCRIPTION"][$k] ?></span>
                        </li>
                    <? endforeach ?>
                </ul>
            <? endif; ?>
            <? if (!empty($arItem["PREVIEW_PICTURE"])): ?>
                <div class="lightgallery">
                    <a href="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" class="filter__img">
                        <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="Схема <?= $arItem["NAME"] ?>">
                    </a>
                </div>
            <? endif; ?>
        </div>

    <? endforeach; ?>
</div>