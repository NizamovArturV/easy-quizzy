<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
    $APPLICATION->SetTitle("Добавление элемента");
if (isset($_POST['create_el'])){
    $el = new CIBlockElement;
    $PROP = [];
    $PROP[7] = ["VALUE" => $_POST['type_el']];

    $arLoadProductArray = Array(
        "MODIFIED_BY"    => $USER->GetID(), // элемент изменен текущим пользователем
        "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
        "IBLOCK_ID"      => 2,
        "PROPERTY_VALUES"=> $PROP,
        "NAME"           => $_POST['name_el'],
        "ACTIVE"         => "Y",            // активен
        "PREVIEW_TEXT"   => $_POST['desc_el'],
        "DETAIL_TEXT"    => "текст для детального просмотра"
    );

    if($PRODUCT_ID = $el->Add($arLoadProductArray)) {
        $message = "Игра успешно добавлена! Ее ID: " . $PRODUCT_ID;
    } else {
        $message = "Error: " . $el->LAST_ERROR;
    }
}
    ?>
    <div class="wrap">
        <div class="editing">
            <div class="editing__container">
                <div class="editing__inner">
                    <div class="editing__block">
                        <div class="editing__form">
                            <h2 class="editing__title">Добавить новую игру</h2>
                            <form class="form" method="post" target="_top">
                                <div class="form__inner">

                                    <div class="form__item">
                                        <span class="form__caption">Название:</span>
                                        <input type="text" class="input" name="name_el" placeholder="Введите название"
                                               value=""/>
                                    </div>

                                    <div class="form__item">
                                        <span class="form__caption">Описание игры:</span>
                                        <input type="text" class="input" name="desc_el" placeholder="Введите описание"
                                               value=""/>
                                    </div>

                                    <div class="form__item">
                                        <span class="form__caption">Тип игры:</span>
                                        <select name="type_el">
                                            <option value="6">Pop</option>
                                            <option value="7">Classic</option>
                                        </select>
                                    </div>



                                    <div class="form__submit">
                                        <button type="submit" class="button button--fit" name="create_el"
                                                value="">
                                            <span class="button__text">Войти</span>
                                        </button>
                                        <p><?= $message ?? ''?></p>
                                    </div>



                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?
    require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>
