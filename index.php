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
<section class="detail">
    <aside class="detail__aside">
        <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arResult["DETAIL_PICTURE"])): ?>
            <div class="detail__img">
                <img
                        class="detail_picture"
                        border="0"
                        src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>"
                        width="<?= $arResult["DETAIL_PICTURE"]["WIDTH"] ?>"
                        height="<?= $arResult["DETAIL_PICTURE"]["HEIGHT"] ?>"
                        alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>"
                        title="<?= $arResult["DETAIL_PICTURE"]["TITLE"] ?>"
                />
            </div>
        <? endif ?>
    </aside>
    <div class="detail__contant">
        <div class="detail__breadcrumb">
            <? $APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                "",
                Array(
                    "PATH" => "2",
                    "SITE_ID" => "s1",
                    "START_FROM" => "0"
                )
            ); ?><br>
        </div>
        <div class="detail__category"><?= $arResult["DISPLAY_PROPERTIES"]["CATEGORY"]["VALUE"] ?></div>
        <? if ($arParams["DISPLAY_DATE"] != "N" && $arResult["DISPLAY_ACTIVE_FROM"]): ?>
            <span class="news-date-time"><?= $arResult["DISPLAY_ACTIVE_FROM"] ?></span>
        <? endif; ?>
        <? if ($arParams["DISPLAY_NAME"] != "N" && $arResult["NAME"]): ?>
            <h2><?= $arResult["NAME"] ?></h2>
        <? endif; ?>
        <? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arResult["FIELDS"]["PREVIEW_TEXT"]): ?>
            <p><?= $arResult["FIELDS"]["PREVIEW_TEXT"];
                unset($arResult["FIELDS"]["PREVIEW_TEXT"]); ?></p>
        <? endif; ?>

        <? foreach ($arResult["FIELDS"] as $code => $value):
            if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code) {
                ?><?= GetMessage("IBLOCK_FIELD_" . $code) ?>:&nbsp;<?
                if (!empty($value) && is_array($value)) {
                    ?><img border="0" src="<?= $value["SRC"] ?>" width="<?= $value["WIDTH"] ?>"
                           height="<?= $value["HEIGHT"] ?>"><?
                }
            } else {
                ?><?= GetMessage("IBLOCK_FIELD_" . $code) ?>:&nbsp;<?= $value; ?><?
            }
            ?><br/>
        <? endforeach; ?>
        <? /*foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):*/ ?><!--

            <? /*=$arProperty["NAME"]*/ ?>:&nbsp;
            <? /*if(is_array($arProperty["DISPLAY_VALUE"])):*/ ?>
                <? /*=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);*/ ?>
            <? /*else:*/ ?>
                <? /*=$arProperty["DISPLAY_VALUE"];*/ ?>
            <? /*endif*/ ?>
            <br />
        --><? /*endforeach;*/ ?>

        <? if (!empty($arResult["DISPLAY_PROPERTIES"]["PLUS"])): ?>

            <h3>Плюсы системы <?= $arResult["NAME"] ?>:</h3>
            <ul class="plus">
            <? foreach ($arResult["DISPLAY_PROPERTIES"]["PLUS"]["VALUE"] as $key=>$value): ?>
                <li><?=$value?></li>
            <? endforeach; ?>
            </ul>
        <? endif; ?>


        <? if (strlen($arResult["DETAIL_TEXT"]) > 0): ?>
            <h3>Описание работы <?= $arResult["NAME"] ?>:</h3>
            <p><? echo $arResult["DETAIL_TEXT"]; ?></p>
        <? endif ?>

        <? if (!empty($arResult["DISPLAY_PROPERTIES"]["VIDEO"])): ?>
            <h3>Видеопрезентация <?= $arResult["NAME"] ?>:</h3>
            <iframe width="100%" height="315" src="<?=$arResult["DISPLAY_PROPERTIES"]["VIDEO"]["VALUE"]?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <? endif; ?>

        <? if (!empty($arResult["DISPLAY_PROPERTIES"]["PLUS"])): ?>

            <h3>Документация:</h3>

                <? foreach ($arResult["DISPLAY_PROPERTIES"]["FILE"]["VALUE"] as $key=>$value): ?>
                    <?=$value?>
                <? endforeach; ?>

        <? endif; ?>

        <? if ($arResult["NAV_RESULT"]): ?>
            <? if ($arParams["DISPLAY_TOP_PAGER"]): ?><?= $arResult["NAV_STRING"] ?><br/>
            <? endif; ?>
            <? echo $arResult["NAV_TEXT"]; ?>
            <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?><br/>
                <?= $arResult["NAV_STRING"] ?>
            <? endif; ?>
        <? endif; ?>

        <? if (array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y") {
            ?>
            <div class="news-detail-share">
                <noindex>
                    <?
                    $APPLICATION->IncludeComponent("bitrix:main.share", "", array(
                        "HANDLERS" => $arParams["SHARE_HANDLERS"],
                        "PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
                        "PAGE_TITLE" => $arResult["~NAME"],
                        "SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
                        "SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
                        "HIDE" => $arParams["SHARE_HIDE"],
                    ),
                        $component,
                        array("HIDE_ICONS" => "Y")
                    );
                    ?>
                </noindex>
            </div>
            <?
        } ?>
    </div>
</section>
