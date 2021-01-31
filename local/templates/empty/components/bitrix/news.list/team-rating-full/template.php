<?

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


<div class="profile__block">
    <div class="profile__base">
        <div class="profile__games">
            <div class="team__games">
                <div class="table-games">
                    <div class="table-games__heading">
                        <div class="table-games__col">
                            <p class="table-games__text">Игра</p>
                        </div>
                        <div class="table-games__col">
                            <p class="table-games__text">Дата</p>
                        </div>
                        <div class="table-games__col">
                            <p class="table-games__text">Место</p>
                        </div>
                        <div class="table-games__col">
                            <p class="table-games__text">Баллы</p>
                        </div>
                    </div>
                    <div class="table-games__collapse">Статистика</div>
                    <div class="table-games__list">
                        <?php
                            foreach ($arResult['GAMES'] as $key => $arItem): ?>
                                <div class="table-games__row">
                                    <div class="table-games__col">
                                        <p class="table-games__text"><?= $arItem['DESCRIPTION']['NAME'] ?></p>
                                    </div>
                                    <div class="table-games__col">
                                        <time class="table-games__date" datetime="<?= FormatDate(
                                            "j.m.Y",
                                            MakeTimeStamp($arItem['DESCRIPTION']['PROPERTY_DATE']['VALUE'])
                                        ) ?>"><?= FormatDate(
                                                "j.m.Y",
                                                MakeTimeStamp(
                                                    $arItem['DESCRIPTION']['PROPERTY_DATE']['VALUE']
                                                )
                                            ) ?></time>
                                    </div>
                                    <div class="table-games__col">
                                        <p class="table-games__number"><?= $arItem['GAME_NUM'] ?></p>
                                        <span class="table-games__caption">место</span>
                                    </div>
                                    <div class="table-games__col">
                                        <p class="table-games__number"><?= $arItem['GAME_POINT'] ?></p>
                                        <span class="table-games__caption">баллы</span>
                                    </div>
                                </div>

                            <?php
                            endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
