<?php

    if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
        die();
    }
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


<?php
    foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        if ($arItem['PROPERTIES']['TEAM_LEAD']['VALUE'] == $USER->GetID()):
            ?>

            <div class="profile__base">
                <div class="profile__board">
                    <div class="board" data-rank="<?= $arItem['PROPERTIES']['COUNT_LIGHT']['VALUE'] ?>">
                        <div class="board__inner">
                            <div class="board__heading">
                                <p class="board__name"><?= $arItem['NAME'] ?></p>
                                <p class="board__status"><?= $arItem['PROPERTIES']['TEAM_RANG']['VALUE'] ?></p>
                            </div>
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "team-rating",
                                [
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
                                    "COMPONENT_TEMPLATE" => "team-rating",
                                    "DETAIL_URL" => "",
                                    "DISPLAY_BOTTOM_PAGER" => "Y",
                                    "DISPLAY_DATE" => "Y",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "Y",
                                    "DISPLAY_PREVIEW_TEXT" => "Y",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "FIELD_CODE" => [
                                        0 => "",
                                        1 => "",
                                    ],
                                    "FILTER_NAME" => "",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => "5",
                                    "IBLOCK_TYPE" => "index",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                    "INCLUDE_SUBSECTIONS" => "Y",
                                    "MESSAGE_404" => "",
                                    "NEWS_COUNT" => "",
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
                                    "PROPERTY_CODE" => [
                                        0 => "TEAM_NUM",
                                        1 => "POINT",
                                        2 => "GAME_ID",
                                        3 => "CURRENT_TEAM",
                                        4 => "",
                                    ],
                                    "SET_BROWSER_TITLE" => "N",
                                    "SET_LAST_MODIFIED" => "N",
                                    "SET_META_DESCRIPTION" => "N",
                                    "SET_META_KEYWORDS" => "N",
                                    "SET_STATUS_404" => "N",
                                    "SET_TITLE" => "N",
                                    "SHOW_404" => "N",
                                    "SORT_BY1" => "TIMESTAMP_X",
                                    "SORT_BY2" => "SORT",
                                    "SORT_ORDER1" => "DESC",
                                    "SORT_ORDER2" => "ASC",
                                    "STRICT_SECTION_CHECK" => "N"
                                ],
                                false
                            ); ?>
                        </div>
                    </div>
                </div>
                <div class="profile__team">
                    <form class="team">
                        <div class="team__heading">
                            <p class="team__title">Состав</p>
                        </div>

                        <button type="button" class="team__collapse">Состав</button>
                        <div class="team__list">
                            <?
                                foreach ($arItem['PROPERTIES']['TEAM_PARTICIPANTS']['VALUE'] as $key => $participant):
                            ?>

                            <div class="team__item" tabindex="0">
                                <div class="team__player">
                                    <?php
                                        if ($key == 0): ?>
                                    <p class="team__name"><?= $USER->GetFirstName() . ' ' . $USER->GetLastName() ?></p>
                                </div>
                                <?php
                                    else: ?>
                                <p class="team__name"><?= $participant ?></p>
                            </div>
                            <div class="team__buttons">
                                <button type="button" class="team__button team__button--add"
                                        data-modal="modalAdding"></button>
                                <button type="submit" class="team__button team__button--remove"></button>
                            </div>
                            <div class="team__options">
                                <button class="team__dots" type="button"></button>
                                <div class="team__plank">
                                    <button type="button" class="team__option" data-modal="modalAdding">
                                        Редактировать
                                    </button>
                                    <button type="submit" class="team__option">Удалить</button>
                                </div>

                            </div>
                        <?php
                            endif; ?>
                        </div>
                        <?
                            endforeach; ?>
                        <button type="button" class="team__add" data-modal="modalAdding">Добавить игрока
                        </button>
                </div>
                </form>
            </div>
            </div>
        <?
        endif; ?>
    <?
    endforeach; ?>

