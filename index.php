<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
$APPLICATION->SetPageProperty('body_class', 'page-main');
?>
    <div class="intro" style="background-image: url('<?= SITE_TEMPLATE_PATH ?>/build/images/intro-bg-1.jpg');">
        <div class="intro__inner">
            <div class="intro__info">
                <div class="intro__logo"></div>
                <p class="intro__text">интеллектуально-развлекательная битва</p>
                <a href="#!" class="button button--small intro__button ">
                    <span class="button__text">Записаться</span>
                </a>
            </div>
        </div>
        <div class="intro__shapes">
            <div class="shapes shapes--intro">
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
            </div>
        </div>
    </div>
    <div class="wrap">
        <div class="coming">
            <div class="coming__top">
                <div class="heading">
                    <div class="heading__inner">
                        <h2 class="heading__title h1">Ближайшие игры</h2>
                        <a href="/shedule" class="heading__button">Полное расписание</a>
                    </div>
                </div>
            </div>
            <?php
            // Фильтруем по дате начала игры
            $GLOBALS['gameListFilter'] = ['>=PROPERTY_PROPERTY_DATE' => date("Y-m-d", time())]
            ?>
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "games-list",
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
                    "FILTER_NAME" => "gameListFilter",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "2",
                    "IBLOCK_TYPE" => "index",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "3",
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
                        0 => "PROPERTY_DATE",
                        1 => "PROPERTY_IS_FULL",
                        2 => "PROPERTY_PLACE",
                        3 => "PROPERTY_PRICE",
                        4 => "PROPERTY_GAME_TYPE",
                        5 => "PROPERTY_TYPE_PAYMENT",
                        6 => "",
                    ),
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "PROPERTY_PROPERTY_DATE",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "ASC",
                    "SORT_ORDER2" => "DESC",
                    "STRICT_SECTION_CHECK" => "N",
                    "COMPONENT_TEMPLATE" => "games-list"
                ),
                false
            ); ?>
        </div>
        <div class="info">
            <div class="info__inner">
                <div class="info__top">
                    <div class="heading heading--fit">
                        <div class="heading__inner">
                            <h2 class="heading__title h1">Что такое Easy Quizze?</h2>
                        </div>
                    </div>
                </div>
                <div class="info__block">
                    <div class="info__media">
                        <div class="video info__video"
                             style="background-image: url('<?= SITE_TEMPLATE_PATH ?>/build/images/video-bg.jpg');"
                             data-modal="modalVideo"></div>
                        <div class="info__frame frame frame--circle" data-frame="bottom-right">
                            <div class="frame__inner">
                                <p class="frame__text">Easy Quizee — это командная игра-викторина. У нас есть два
                                    подразделения: Easy Quizee Сlassic с вопросами обо всём, и Easy Quizee Pop -
                                    игры на
                                    определенную тему, связанную с современной поп-культурой.</p>
                            </div>
                            <div class="info__circle">
                                <button type="button" class="button-rules" data-modal="modalRules"></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info__block">
                    <div class="info__points points">
                        <div class="points__item">
                            <div class="points__number">
                                <span class="points__caption">раундов</span>
                            </div>
                        </div>
                        <div class="points__item">
                            <div class="points__number">
                                <span class="points__caption">игроков в команде</span>
                            </div>
                        </div>
                        <div class="points__item">
                            <div class="points__number">
                                <span class="points__caption">часа игры</span>
                            </div>
                        </div>
                        <div class="points__item">
                            <div class="points__number">
                                <span class="points__caption">вопросов</span>
                            </div>
                        </div>
                    </div>
                </div>

                <?$APPLICATION->IncludeComponent(
                        "artur:random.element",
                        "",
                        ['IBLOCK_ID' => 3],
                        false);?>


                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "games-photo",
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
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "2",
                        "IBLOCK_TYPE" => "index",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "3",
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
                            0 => "PROPERTY_DATE",
                            1 => "PROPERTY_IS_FULL",
                            2 => "PROPERTY_PLACE",
                            3 => "PROPERTY_PRICE",
                            4 => "PROPERTY_GAME_TYPE",
                            5 => "PROPERTY_TYPE_PAYMENT",
                            6 => "",
                        ),
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER1" => "DESC",
                        "SORT_ORDER2" => "ASC",
                        "STRICT_SECTION_CHECK" => "N",
                        "COMPONENT_TEMPLATE" => "games-list"
                    ),
                    false
                ); ?>

            </div>
            <div class="info__shapes">
                <div class="shapes shapes--info">
                    <div class="shapes__shape"></div>
                    <div class="shapes__shape"></div>
                    <div class="shapes__shape"></div>
                    <div class="shapes__shape"></div>
                    <div class="shapes__shape"></div>
                    <div class="shapes__shape"></div>
                    <div class="shapes__shape"></div>
                    <div class="shapes__shape"></div>
                </div>
            </div>
        </div>
    </div>
<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>