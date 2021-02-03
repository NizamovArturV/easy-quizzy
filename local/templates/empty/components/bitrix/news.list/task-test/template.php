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

        function showTypeS() {
            let blocksTypeS = document.querySelectorAll('div[data-types]');
            for (let i = 0; i < blocksTypeS.length; i++) { // проходим циклом по всем элементам объекта
                if (blocksTypeS[i].dataset.types != $('#typeS').val()) {
                    blocksTypeS[i].style.display = "none";
                } else {
                    blocksTypeS[i].style.display = "block";
                }
            }
        }

        function showRegion() {
            let blocksReg = document.querySelectorAll('div[data-region]');
            for (let i = 0; i < blocksReg.length; i++) { // проходим циклом по всем элементам объекта
                if (blocksReg[i].dataset.region != $('#region').val()) {
                    blocksReg[i].style.display = "none";
                } else {
                    blocksReg[i].style.display = "block";
                }
            }
        }

        function showNameOrg() {
            let blocksNameOrg = document.querySelectorAll('div[data-nameorg]');
            for (let i = 0; i < blocksNameOrg.length; i++) { // проходим циклом по всем элементам объекта
                if (blocksNameOrg[i].dataset.nameorg != $('#search').val() && $('#search').val() !== '') {
                    blocksNameOrg[i].style.display = "none";
                } else {
                    blocksNameOrg[i].style.display = "block";
                }
            }
        }


        function checkState() {
            // создаем переменные
            var shownObjects,
                region = $('#region').val(),
                typeS = $('#typeS').val(),
                nameOrg = $('#search').val(),
                filter_r = new ymaps.GeoQueryResult(),
                filter_t = new ymaps.GeoQueryResult(),
                filter_n = new ymaps.GeoQueryResult();


            // проверяем с какими данными мы вообще работаем и в зависимости от этого убераем ненужные метки
            var variant = 0;

            if (region != null) {
                variant += 1;
            }
            if (typeS != null) {
                variant += 10;
            }
            if (nameOrg !== '') {
                variant += 100;
            }


            switch (variant) {
                case 1:
                    filter_r = myObjects.search('options.region="' + region + '"').add(filter_r);
                    shownObjects = filter_r.addToMap(myMap);
                    showRegion();
                    break;
                case 10:
                    filter_t = myObjects.search('options.typeS="' + typeS + '"').add(filter_t);
                    shownObjects = filter_t.addToMap(myMap);
                    showTypeS();
                    break;
                case 11:
                    filter_r = myObjects.search('options.region="' + region + '"').add(filter_r);
                    filter_t = myObjects.search('options.typeS="' + typeS + '"').add(filter_t);
                    shownObjects = filter_r.intersect(filter_t).addToMap(myMap);
                    break;
                case 100:
                    filter_n = myObjects.search('properties.hintContent="' + nameOrg + '"').add(filter_n);
                    shownObjects = filter_n.addToMap(myMap);
                    showNameOrg();
                    break;
                case 101:
                    filter_n = myObjects.search('properties.hintContent="' + nameOrg + '"').add(filter_n);
                    filter_r = myObjects.search('options.region="' + region + '"').add(filter_r);
                    shownObjects = filter_n.intersect(filter_r).addToMap(myMap);
                    break;
                case 110:
                    filter_n = myObjects.search('properties.hintContent="' + nameOrg + '"').add(filter_n);
                    filter_t = myObjects.search('options.typeS="' + typeS + '"').add(filter_t);
                    shownObjects = filter_n.intersect(filter_t).addToMap(myMap);
                    break;
                case 111:
                    filter_r = myObjects.search('options.region="' + region + '"').add(filter_r);
                    filter_n = myObjects.search('properties.hintContent="' + nameOrg + '"').add(filter_n);
                    filter_t = myObjects.search('options.typeS="' + typeS + '"').add(filter_t);
                    shownObjects = filter_r.intersect(filter_n).intersect(filter_t).addToMap(myMap);
                    break;
            }

            // оставляем на карте только найденые метки
            myObjects.remove(shownObjects).removeFromMap(myMap);
        }

        // следим за изменениями выпадающих списков
        $('#region').change(checkState);
        $('#typeS').change(checkState);
        $('#search').change(checkState);

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
<input id="search" type="text" placeholder="Поиск по организациям"/>
<div>
    <select id="region">
        <option selected="true" disabled="disabled">Регион:</option>
        <?php
            foreach ($arResult['ALL_REGION'] as $region): ?>
                <option value="<?= $region ?>"><?= $region ?></option>
            <?php
            endforeach; ?>
    </select>
</div>
<div>
    <select id="typeS">
        <option selected="true" disabled="disabled">Тип скидки:</option>
        <?php
            foreach ($arResult['ALL_TYPES'] as $typeS):?>
                <option value="<?= $typeS ?>"><?= $typeS ?></option>
            <?php
            endforeach; ?>
    </select>
</div>
<?php
    foreach ($arResult['ITEMS'] as $arItem): ?>
        <div data-region="<?= $arItem['PROPERTIES']['REGION']['VALUE'] ?>"
             data-types="<?= $arItem['PROPERTIES']['SALE_TYPE']['VALUE'] ?>" data-nameorg="<?= $arItem['NAME'] ?>">
            <p>Скидка № <?= $arItem['ID'] ?></p>
            <p>Название организации: <?= $arItem['NAME'] ?></p>
            <p>Тип скидки: <?= $arItem['PROPERTIES']['SALE_TYPE']['VALUE'] ?></p>
            <p>Текст скидки: <?= $arItem['PREVIEW_TEXT'] ?></p>
        </div>
    <?php
    endforeach; ?>

</div>
<div id="map" style="width: 600px; height: 400px"></div>
</div>
</div>
