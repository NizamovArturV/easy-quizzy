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
    foreach ($arResult['ITEMS'] as $key => $arItem){
        if ($arItem['ID'] == $_GET['GAME']) {
            $gameName = $arItem['NAME'];
            $gameKey = $key;
            $gameId = (int)$arResult['ITEMS'][$gameKey]['ID'];
        }
    }

if (isset($_POST['edit_el'])){
    $el = new CIBlockElement;

    $PROP = [];
    $PROP[7] = ["VALUE" => $_POST['edit_type_el']];

    $arLoadProductArray = Array(
        "MODIFIED_BY"    => $USER->GetID(), // элемент изменен текущим пользователем
        "IBLOCK_SECTION" => false,          // элемент лежит в корне раздела
        "PROPERTY_VALUES"=> $PROP,
        "NAME"           => $_POST['edit_name_el'],
        "ACTIVE"         => "Y",            // активен
        "PREVIEW_TEXT"   => $_POST['edit_desc_el']
    );
    $res = $el->Update($gameId, $arLoadProductArray);
}

if (isset($_POST['del_el'])){
    CIBlockElement::Delete($gameId);
}

?>
<?php foreach ($arResult['ITEMS'] as $arItem): ?>
<a href="/api/properties.php?GAME=<?=$arItem['ID']?>"><?=$arItem['NAME']?></a> <br>
<?php endforeach;?>
<?php if (isset($_GET['GAME'])): ?>
<div class="editing__form">
    <h2 class="editing__title">Редактировать свойства игры "<?=$gameName?>"</h2>
</div>
<form class="form" method="post" target="_top">
    <div class="form__item">
        <span class="form__caption">Название:</span>
        <input type="text" class="input" name="edit_name_el" placeholder="Введите название"
               value="<?=$arResult['ITEMS'][$gameKey]['NAME']?>"/>
    </div>

    <div class="form__item">
        <span class="form__caption">Описание игры:</span>
        <input type="text" class="input" name="edit_desc_el" placeholder="Введите описание"
               value="<?=$arResult['ITEMS'][$gameKey]['PREVIEW_TEXT']?>"/>
    </div>

    <div class="form__item">
        <span class="form__caption">Тип игры:</span>
        <select name="edit_type_el">
            <option value="6">Pop</option>
            <option value="7">Classic</option>
        </select>
    </div>

    <div class="form__submit">
        <button type="submit" class="button button--fit" name="edit_el"
                value="">
            <span class="button__text">Редактировать</span>
        </button>
    </div>
    <div class="form__submit">
        <button type="submit" class="button button--fit" name="del_el"
                value="">
            <span class="button__text">Удалить игру</span>
        </button>
    </div>
</form>
<?php endif;?>
