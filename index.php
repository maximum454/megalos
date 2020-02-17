<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?IncludeTemplateLangFile(__FILE__);?>
<?
CModule::IncludeModule("iblock");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?$APPLICATION->ShowHead()?>
    <meta http-equiv="Content-Type" content="text/html; charset=<?=LANG_CHARSET;?>"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:title" content="<?=$APPLICATION->ShowTitle();?>"/>
    <meta property="og:description" content="<?=$APPLICATION->ShowProperty("description");?>"/>
    <meta property="og:image" content="<?=SITE_TEMPLATE_PATH;?>/logo-net.jpg"/>
    <meta property="og:site_name" content="<?=$arSite['SITE_NAME']?>"/>
    <title><?$APPLICATION->ShowTitle()?></title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico"/>
    <link rel="icon" type="image/png" href="/favicon.png" />
    <?$APPLICATION->SetAdditionalCSS("/bitrix/templates/".SITE_TEMPLATE_ID."/megalos.css");?>
</head>
<body>
<div class="panel"><?$APPLICATION->ShowPanel();?></div>
<div class="wrp">
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        ".default",
        array(
            "AREA_FILE_RECURSIVE" => "Y",
            "AREA_FILE_SHOW" => "sect",
            "AREA_FILE_SUFFIX" => "header",
            "EDIT_TEMPLATE" => "",
            "COMPONENT_TEMPLATE" => ".default"
        ),
        false
    );?>
    <main>
        #WORK_AREA#
    </main>

    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        ".default",
        array(
            "AREA_FILE_RECURSIVE" => "Y",
            "AREA_FILE_SHOW" => "sect",
            "AREA_FILE_SUFFIX" => "footer",
            "EDIT_TEMPLATE" => "",
            "COMPONENT_TEMPLATE" => ".default"
        ),
        false
    );?>
    <div class="hidden">
        <div id="modalbox_feedback">
            <?$APPLICATION->IncludeComponent(
                "mirum:feedback",
                "feedback",
                array(
                    "EMAIL_TO" => "info@alta-group.kz",
                    "EVENT_MESSAGE_ID" => array(
                        0 => "7",
                    ),
                    "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                    "REQUIRED_FIELDS" => array(
                    ),
                    "USE_CAPTCHA" => "N",
                    "COMPONENT_TEMPLATE" => "feedback"
                ),
                false
            );?>
        </div>
    </div>
    <div class="hidden">
        <div id="modalbox_call">
            <?$APPLICATION->IncludeComponent(
                "mirum:feedback",
                "call",
                array(
                    "EMAIL_TO" => "info@alta-group.kz",
                    "EVENT_MESSAGE_ID" => array(
                        0 => "9",
                    ),
                    "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                    "REQUIRED_FIELDS" => array(
                        0 => "NONE",
                    ),
                    "USE_CAPTCHA" => "N",
                    "COMPONENT_TEMPLATE" => "call"
                ),
                false
            );?>
        </div>
    </div>
</div>

<?$APPLICATION->AddHeadScript("/bitrix/templates/".SITE_TEMPLATE_ID."/megalos.js");?>
</body>
</html>