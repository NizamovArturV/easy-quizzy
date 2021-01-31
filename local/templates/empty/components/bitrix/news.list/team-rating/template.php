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
<div class="board__stats">
    <div class="board__stat">
        <div class="board__item">
            <p class="board__point"><?=$arResult['COUNT_GAMES']?></p>
            <p class="board__caption">игр</p>
        </div>
    </div>
    <div class="board__stat">
        <div class="board__item">
            <p class="board__point"><?=$arResult['POINTS_ALL']?></p>
            <p class="board__caption">баллов</p>
        </div>
    </div>
    <div class="board__stat">
        <div class="board__item">
            <p class="board__point">1</p>
            <p class="board__caption">место</p>
        </div>
    </div>
</div>

