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

<div class="main-news__main">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <article class="main-news__item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="main-news__img">
                <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                     title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>">
                <?if(!empty($arItem['DISPLAY_PROPERTIES']['REGION'])):?>
                    <div class="main-news__mark"><?=$arItem['DISPLAY_PROPERTIES']['REGION']['VALUE']?></div>
                <?endif;?>
            </a>
            <a class="main-news__link" href="<?= $arItem["DETAIL_PAGE_URL"] ?>">

                <h3 class="main-news__name"><? echo $arItem["NAME"] ?></h3>
                <p class="main-news__anons"><?= $arItem["PREVIEW_TEXT"] ?></p>
                <?if(!empty($arItem['DISPLAY_PROPERTIES']['PERFOMACE']['VALUE'])):?>
                <div class="main-news__perfomace">
                    Производительность<br>
                    <b><?=$arItem['DISPLAY_PROPERTIES']['PERFOMACE']['VALUE']?></b>
                </div>
                <?endif;?>
            </a>
        </article>

    <? endforeach; ?>
</div>
<? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
    <br/><?= $arResult["NAV_STRING"] ?>
<? endif; ?>

