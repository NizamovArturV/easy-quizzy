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
$countPlace = 1;
?>
<div class="rating__block">
    <div class="rating__container">
        <div class="rating__table">
            <div class="table-rating">
                <div class="table-rating__heading">
                    <div class="table-rating__col">
                        <p class="table-rating__text">Название</p>
                    </div>
                    <div class="table-rating__col">
                        <button type="button" class="table-rating__sort">Игры</button>
                    </div>
                    <div class="table-rating__col">
                        <button type="button" class="table-rating__sort table-rating__sort--reverse table-rating__sort--active">
                            Баллы
                        </button>
                    </div>
                    <div class="table-rating__col">
                        <p class="table-rating__text">Ранг</p>
                    </div>
                </div>
                <?php foreach ($arResult['TEAMS'] as $team):?>
                    <div class="table-rating__row">
                        <div class="table-rating__col">
                            <span class="table-rating__pos"><?=sprintf("%'.02d\n", $countPlace++)?></span>
                            <p class="table-rating__text"><?=$team['DESCRIPTION']['NAME']?></p>
                            <span class="table-rating__caption">Знатоки</span>
                        </div>
                        <div class="table-rating__col">
                            <span class="table-rating__caption">Игр</span>
                            <p class="table-rating__number"><?=count($team['GAMES'])?></p>
                        </div>
                        <div class="table-rating__col">
                            <span class="table-rating__caption">Баллы</span>
                            <p class="table-rating__number"><?=$team['POINT_ALL']?></p>
                        </div>
                        <div class="table-rating__col">
                            <p class="table-rating__text" data-rank="<?=$team['DESCRIPTION']['COUNT_LIGHT']['VALUE']?>"><?=$team['DESCRIPTION']['TEAM_RANG']['VALUE']?></p>
                        </div>
                    </div>
                <?endforeach;?>

            </div>
        </div>
    </div>
</div>

