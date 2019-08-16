<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оборудование для ЖКХ и промышленности");
?>
<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "page-equipment",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
            0 => "DETAIL_TEXT",
            1 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "10",
        "IBLOCK_TYPE" => "equipment",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "1",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "COL",
            1 => "FILE",
            2 => "",
        ),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "ID",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "COMPONENT_TEMPLATE" => "page-equipment"
    ),
    false
);?><br>
<section class="main-equipment">
    <div class="main-equipment__header">
        <h2 class="main-equipment__title">Каталог оборудования для ЖКХ и промышленности</h2>
    </div>
    <div class="main-equipment__select">
        <?$APPLICATION->IncludeComponent(
            "bitrix:catalog.section.list",
            "section-equipment",
            array(
                "ADD_SECTIONS_CHAIN" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "COUNT_ELEMENTS" => "N",
                "FILTER_NAME" => "sectionsFilter",
                "IBLOCK_ID" => "11",
                "IBLOCK_TYPE" => "equipment",
                "SECTION_CODE" => "",
                "SECTION_FIELDS" => array(
                    0 => "",
                    1 => "",
                ),
                "SECTION_ID" => $_REQUEST["SECTION_ID"],
                "SECTION_URL" => "",
                "SECTION_USER_FIELDS" => array(
                    0 => "UF_CATEGORY",
                    1 => "",
                ),
                "SHOW_PARENT_NAME" => "Y",
                "TOP_DEPTH" => "2",
                "VIEW_MODE" => "TEXT",
                "COMPONENT_TEMPLATE" => "section-equipment"
            ),
            false,
            array(
                "ACTIVE_COMPONENT" => "Y"
            )
        );?>
        <div class="main-equipment__group">
            <div class="main-equipment__item dop">
                <p class="main-equipment__anons">
                    Осаждающая химия
                </p>
            </div>
            <div class="main-equipment__item dop">
                <p class="main-equipment__anons">
                    Биофильтры
                </p>
            </div>
            <div class="main-equipment__item dop">
                <p class="main-equipment__anons">
                    Горловина
                </p>
            </div>
            <div class="main-equipment__item dop">
                <p class="main-equipment__anons">
                    Крышки
                </p>
            </div>
            <div class="main-equipment__item dop">
                <p class="main-equipment__anons">
                    Горловина
                </p>
            </div>
            <div class="main-equipment__item dop">
                <p class="main-equipment__anons">
                    Крышки
                </p>
            </div>
        </div>
        <div class="main-equipment__logo">
            <h5>Alta Group</h5>
            <p>
                Малогабаритное оборудование для&nbsp;биологической и&nbsp;химической очистки бытовых и&nbsp;производственных сточных вод
            </p>
        </div>
    </div>
</section>
<section class="main-news">
    <div class="main-news__header">
        <h2 class="main-news__title">Наши проекты</h2>
    </div>
    <?
    global $arrFilterRealize;
    $arrFilterRealize = array("ACTIVE"=>"Y","PROPERTY_REALIZE_VALUE"=>"ЖКХ и промышленность");
    ?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "main-projects",
        array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => array(
                0 => "",
                1 => "",
            ),
            "FILTER_NAME" => "arrFilterRealize",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "1",
            "IBLOCK_TYPE" => "projects",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "INCLUDE_SUBSECTIONS" => "Y",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "8",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Новости",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "PROPERTY_CODE" => array(
                0 => "REGION",
                1 => "REALIZE",
                2 => "",
            ),
            "SET_BROWSER_TITLE" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N",
            "COMPONENT_TEMPLATE" => "main-projects"
        ),
        false
    );?>
    <footer class="main-news__footer"> <a class="main-news__btn" href="/projects/">Больше проектов</a> </footer>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
