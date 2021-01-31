<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<?foreach($arResult["ITEMS"] as $arItem):?>
    <div class="schedule__card">
        <div class="card-game <?= $arItem['PROPERTIES']['PROPERTY_GAME_TYPE']['VALUE'] === 'pop' ? 'card-game--pop' : ''?>">
            <div class="card-game__shell">
                <div class="card-game__inner">
                    <div class="card-game__content">
                        <time class="card-game__date" datetime="<?= FormatDate(
                            "j.m.Y",
                            MakeTimeStamp(
                                $arItem['PROPERTIES']['PROPERTY_DATE']['VALUE']
                            )
                        ) ?>"><?= FormatDate(
                                "j  F, l",
                                MakeTimeStamp(
                                    $arItem['PROPERTIES']['PROPERTY_DATE']['VALUE']
                                )
                            ) ?>
                        </time>
                        <p class="card-game__title"><?=$arItem['NAME']?></p>
                        <div class="card-game__list">
                            <div class="card-game__item">
                                <p class="card-game__caption"><?=$arItem['PROPERTIES']['PROPERTY_PLACE']['VALUE'][0]?></p>
                                <button type="button" class="card-game__location" data-modal="modalMap">
                                    Это где?
                                </button>
                            </div>
                            <div class="card-game__item">
                                <p class="card-game__caption"><?= FormatDate(
                                        "H:i",
                                        MakeTimeStamp(
                                            $arItem['PROPERTIES']['PROPERTY_DATE']['VALUE']
                                        )
                                    ) ?></p>
                            </div>
                            <div class="card-game__item">
                                <p class="card-game__caption"><?=$arItem['PROPERTIES']['PROPERTY_PRICE']['VALUE']?> <span>₽</span></p>
                                <? if($arItem['PROPERTIES']['PROPERTY_IS_FULL']['VALUE'] == 'Нет'): ?>
                                <span class="card-game__deny">Мест нет</span>
                                <? endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-game__line">
                        <span class="card-game__type"><?=$arItem['PROPERTIES']['PROPERTY_GAME_TYPE']['VALUE']?></span>
                    </div>
                </div>
            </div>
            <button type="button" class="card-game__button" data-modal="modalReg">Записаться <?= $arItem['PROPERTIES']['PROPERTY_IS_FULL']['VALUE'] == 'Нет' ? 'в резерв' : '' ?>
            </button>
        </div>
    </div>
<?endforeach;?>

