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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" charset="utf-8"></script>
<script src="https://api-maps.yandex.ru/2.1/?apikey=25626947-1e23-46ba-ac8a-a2cec9a6d111&lang=ru_RU">
</script>
<script type="text/javascript">

    ymaps.ready(init);

    function init() {
        var myMap = new ymaps.Map('map', {
            center: [55.751188, 37.616791],
            zoom: 4
        });

        function checkState() {
            // создаем переменные
            var shownObjects,
                region = $('#region').val(),
                typeS = $('#typeS').val(),
                filter_r = new ymaps.GeoQueryResult(),
                filter_t = new ymaps.GeoQueryResult();

            let blocks = document.querySelectorAll('div[data-region]'); // находим все элементы с data-region
            for (let i = 0; i < blocks.length; i++) { // проходим циклом по всем элементам объекта
                if (blocks[i].dataset.region != region) {
                    blocks[i].style.display = "none";
                } else {
                    blocks[i].style.display = "block";
                }
            }
            // проверяем с какими данными мы вообще работаем и в зависимости от этого убераем ненужные метки
            var variant = 0;

            if (region != null) {
                variant += 1;
            }
            if (typeS != null) {
                variant += 10;
            }


            switch (variant) {
                case 1:
                    filter_r = myObjects.search('options.region="' + region + '"').add(filter_r);
                    shownObjects = filter_r.addToMap(myMap);
                    break;
                case 10:
                    filter_t = myObjects.search('options.typeS="' + typeS + '"').add(filter_t);
                    shownObjects = filter_t.addToMap(myMap);
                    break;
                case 11:
                    filter_r = myObjects.search('options.region="' + region + '"').add(filter_r);
                    filter_t = myObjects.search('options.typeS="' + typeS + '"').add(filter_t);
                    shownObjects = filter_r.intersect(filter_t).addToMap(myMap);
                    break;
            }

            // оставляем на карте только найденые метки
            myObjects.remove(shownObjects).removeFromMap(myMap);
        }

        // следим за изменениями выпадающих списков
        $('#region').change(checkState);
        $('#typeS').change(checkState);

        // создаем метки
        window.myObjects = ymaps.geoQuery({
            type: "FeatureCollection",
            features: [
                <?php foreach ($arResult['ITEMS'] as $arItem):?>
                {
                    "type": "Feature",
                    "id": <?=$arItem['ID']?>,
                    "geometry": {
                        "type": "Point",
                        "coordinates": [<?=$arItem['PROPERTIES']['COORDINATES']['VALUE']?>]
                    },
                    "properties": {
                        "balloonContent": "<?=$arItem['PREVIEW_TEXT']?>",
                        "clusterCaption": "Метка 1",
                        "hintContent": "<?=$arItem['NAME']?>"
                    },
                    options: {
                        region: '<?=$arItem['PROPERTIES']['REGION']['VALUE']?>',
                        typeS: '<?=$arItem['PROPERTIES']['SALE_TYPE']['VALUE']?>'
                    }
                },
                <?php endforeach;?>
            ]
        }).addToMap(myMap);
    }
</script>

<?php
    foreach ($arResult['ITEMS'] as $arItem): ?>
        <div data-region="<?= $arItem['PROPERTIES']['REGION']['VALUE'] ?>">
            <p>Скидка № <?= $arItem['ID'] ?></p>
            <p>Название организации: <?= $arItem['NAME'] ?></p>
            <p>Тип скидки: <?= $arItem['PROPERTIES']['SALE_TYPE']['VALUE'] ?></p>
            <p>Текст скидки: <?= $arItem['PREVIEW_TEXT'] ?></p>
        </div>
    <?php
    endforeach; ?>

<div>
    <select id="region">
        <option selected="true" disabled="disabled">Регион:</option>
        <?php
            foreach ($arResult['ITEMS'] as $arItem): ?>
                <option value="<?= $arItem['PROPERTIES']['REGION']['VALUE'] ?>"><?= $arItem['PROPERTIES']['REGION']['VALUE'] ?></option>
            <?php
            endforeach; ?>
    </select>
</div>
<div>
    <select id="typeS">
        <option selected="true" disabled="disabled">Тип скидки:</option>
        <?php
            foreach ($arResult['ITEMS'] as $arItem): ?>
                <option value="<?= $arItem['PROPERTIES']['SALE_TYPE']['VALUE'] ?>"><?= $arItem['PROPERTIES']['SALE_TYPE']['VALUE'] ?></option>
            <?php
            endforeach; ?>
    </select>
</div>
</div>
<div id="map" style="width: 600px; height: 400px"></div>
</div>
</div>
