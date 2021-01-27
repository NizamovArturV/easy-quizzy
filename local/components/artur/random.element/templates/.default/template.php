<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
                    <div class="info__question">
                        <p class="info__title h2">Пример вопроса</p>
                        <div class="info__wrap">
                            <div class="info__frame frame" data-frame="bottom-left">
                                <div class="frame__inner">
                                    <p class="frame__text"><?=$arResult['PROPERTIES_QUESTION_TEXT']['VALUE']?></p>
                                </div>
                            </div>
                            <div class="preview info__preview" data-frame="top-right">
                                <div class="preview__inner">
                                    <div class="preview__image"
                                         style="background-image: url('<?=CFile::GetPath($arResult['PROPERTIES_QUESTION_GIF']['VALUE'])?>');"></div>
                                </div>
                            </div>
                        </div>
                        <div class="info__answer">
                            <button type="button" class="button info__button">
                                <span class="button__text">Посмотреть ответ</span>
                            </button>
                            <p class="info__text"><?=$arResult['PROPERTIES_QUESTION_ANSWER']['VALUE']?></p>
                        </div>
                    </div>
                </div>
