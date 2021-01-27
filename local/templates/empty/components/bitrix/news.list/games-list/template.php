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
<div class="coming__desktop" data-tabs-wrap>
    <div class="coming__container">
        <div class="coming__tabs">
            <div class="slider-tabs">
                <div class="slider-tabs__init" data-tab-slider>
                    <div class="swiper-wrapper">


                        <?php foreach ($arResult['ITEMS'] as $key => $arItem): ?>
                            <div class="swiper-slide slider-tabs__tab">
                                <div class="game-tab <?= $arItem['PROPERTIES']['PROPERTY_GAME_TYPE']['VALUE'] === 'pop' ? 'game-tab--pop' : '' ?>
                                <?= $key === 0 ? 'game-tab--active' : '' ?>" data-tab="tab-<?= $key + 1 ?>"
                                     role="tab">
                                    <div class="game-tab__inner">
                                        <div class="game-tab__content">
                                            <div class="game-tab__info">
                                                <p class="game-tab__title"><?= $arItem['NAME'] ?></p>
                                                <ul class="game-tab__list">
                                                    <li class="game-tab__item"><?= $arItem['PROPERTIES']['PROPERTY_PLACE']['VALUE'][0] ?></li>
                                                    <li class="game-tab__item"><?= FormatDate("j M Y H:i", MakeTimeStamp($arItem['PROPERTIES']['PROPERTY_DATE']['VALUE'])) ?></li>
                                                    <li class="game-tab__item"><?= $arItem['PROPERTIES']['PROPERTY_PRICE']['VALUE'] ?> ₽</li>
                                                </ul>
                                            </div>
                                            <div class="game-tab__line">
                                                <span class="game-tab__type"><?= $arItem['PROPERTIES']['PROPERTY_GAME_TYPE']['VALUE'] ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <button type="button" class="slider-tabs__arrow slider-tabs__arrow--left"></button>
                    <button type="button" class="slider-tabs__arrow slider-tabs__arrow--right"></button>
                </div>
            </div>
            <div class="coming__content">

                <?php foreach ($arResult['ITEMS'] as $key => $arItem): ?>
                    <div class="coming__block
                <?= $key === 0 ? 'coming__block--active' : '' ?>"
                         data-block="tab-<?= $key + 1 ?>">
                        <div class="event <?= $arItem['PROPERTIES']['PROPERTY_GAME_TYPE']['VALUE'] === 'pop' ? 'event--pop' : '' ?>">
                            <div class="event__info">
                                <div class="event__top">
                                    <div class="event__heading">
                                        <span class="event__label"><?= $arItem['PROPERTIES']['PROPERTY_GAME_TYPE']['VALUE'] ?></span>
                                        <h3 class="event__title"><?= $arItem['NAME'] ?></h3>
                                    </div>
                                    <div class="event__access"><?= $arItem['PROPERTIES']['PROPERTY_IS_FULL']['VALUE'] === 'Да' ? 'Есть места' : 'Мест нет' ?></div>
                                </div>
                                <div class="event__body">
                                    <ul class="event__list">
                                        <li class="event__item">
                                            <p class="event__caption"><?= FormatDate("j F Y", MakeTimeStamp($arItem['PROPERTIES']['PROPERTY_DATE']['VALUE'])) ?></p>
                                            <p class="event__fact"><?= FormatDate("H:i", MakeTimeStamp($arItem['PROPERTIES']['PROPERTY_DATE']['VALUE'])) ?></p>
                                        </li>
                                        <li class="event__item">
                                            <p class="event__caption"><?= $arItem['PROPERTIES']['PROPERTY_PLACE']['VALUE'][0] ?></p>
                                            <p class="event__fact"><?= $arItem['PROPERTIES']['PROPERTY_PLACE']['VALUE'][1] ?></p>
                                        </li>
                                        <li class="event__item">
                                            <p class="event__caption"><?= $arItem['PROPERTIES']['PROPERTY_PRICE']['VALUE'] ?>
                                                рублей</p>
                                            <p class="event__fact"><?= $arItem['PROPERTIES']['PROPERTY_TYPE_PAYMENT']['VALUE'] ?></p>
                                        </li>
                                    </ul>
                                    <p class="event__desc"><?= $arItem['PREVIEW_TEXT'] ?></p>
                                    <a href="#!" class="button">
                                        <span class="button__text">Записаться</span>
                                    </a>
                                </div>
                            </div>
                            <div class="event__map">
                                <iframe src="<?= $arItem['PROPERTIES']['PROPERTY_PLACE_GEOLOCATION']['VALUE'] ?: $arItem['PROPERTIES']['PROPERTY_PLACE_GEOLOCATION']['DEFAULT_VALUE'] ?>"></iframe>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>

    <div class="coming__mobile">
        <?php foreach ($arResult['ITEMS'] as $key => $arItem): ?>
        <div class="game-accordion coming__accordion">
            <div class="game-accordion__ticket">
                <div class="game-tab <?= $arItem['PROPERTIES']['PROPERTY_GAME_TYPE']['VALUE'] === 'pop' ? 'game-tab--pop' : '' ?>">
                    <div class="game-tab__inner">
                        <div class="game-tab__content">
                            <div class="game-tab__info">
                                <p class="game-tab__title"><?= $arItem['NAME'] ?></p>
                                <ul class="game-tab__list">
                                    <li class="game-tab__item"><?= FormatDate("j M Y H:i", MakeTimeStamp($arItem['PROPERTIES']['PROPERTY_DATE']['VALUE'])) ?></li>
                                    <li class="game-tab__item"><?= $arItem['PROPERTIES']['PROPERTY_PLACE']['VALUE'][0] ?></li>
                                    <li class="game-tab__item"><?= $arItem['PROPERTIES']['PROPERTY_PRICE']['VALUE'] ?> ₽</li>
                                </ul>
                            </div>
                            <div class="game-tab__line">
                                <span class="game-tab__type"><?= $arItem['PROPERTIES']['PROPERTY_GAME_TYPE']['VALUE']?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="game-accordion__roll">
                <div class="game-accordion__content">
                    <p class="game-accordion__desc"><?= $arItem['PREVIEW_TEXT'] ?></p>
                    <span class="game-accordion__access"><?= $arItem['PROPERTIES']['PROPERTY_IS_FULL']['VALUE'] === 'Да' ? 'Есть места' : 'Мест нет' ?></span>
                    <a href="#!" class="button">
                        <span class="button__text">Записаться</span>
                    </a>
                </div>
                <div class="game-accordion__bottom">
                    <div class="game-accordion__map">
                        <iframe src="<?= $arItem['PROPERTIES']['PROPERTY_PLACE_GEOLOCATION']['VALUE'] ?: $arItem['PROPERTIES']['PROPERTY_PLACE_GEOLOCATION']['DEFAULT_VALUE'] ?>"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

    </div>
