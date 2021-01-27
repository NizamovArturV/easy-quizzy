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
<div class="info__block">
    <div class="info__gallery">
        <p class="info__title h2">Фотоотчеты с игр</p>
        <div class="info__slider">
            <div class="slider-gallery">
                <div class="swiper-wrapper">
                    <?php foreach ($arResult['ITEMS'] as $key => $arItem): ?>
                        <?php if ($arItem['PROPERTIES']['PROPERTY_PHOTOES']['VALUE']): ?>
                            <?php foreach ($arItem['PROPERTIES']['PROPERTY_PHOTOES']['VALUE'] as $photo): ?>

                                <div class="swiper-slide slider-gallery__slide">
                                    <div class="slider-gallery__image"
                                         style="background-image: url('<?= CFile::GetPath($photo) ?>');"></div>
                                    <div class="slider-gallery__info">
                                        <div class="slider-gallery__desc">
                                            <p class="slider-gallery__title"><?= $arItem['NAME'] ?></p>
                                            <time class="slider-gallery__date"
                                                  datetime="<?= FormatDate("DD.MM.YYYY", MakeTimeStamp($arItem['PROPERTIES']['PROPERTY_DATE']['VALUE'])) ?>">
                                                <?= FormatDate("DD/MM/YYYY", MakeTimeStamp($arItem['PROPERTIES']['PROPERTY_DATE']['VALUE'])) ?>
                                            </time>
                                        </div>
                                        <div class="slider-gallery__detail">
                                            <p class="slider-gallery__caption">Смотреть все фото с игры:</p>
                                            <a href="#!" target="_blank"
                                               class="slider-gallery__link">Вконтакте</a>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <button class="slider-gallery__arrow slider-gallery__arrow--prev"></button>
                <button class="slider-gallery__arrow slider-gallery__arrow--next"></button>
            </div>
        </div>
    </div>
</div>
