<?php    foreach ($arResult['ITEMS'] as $key => $arItem) {        if ($arItem['PROPERTIES']['TEAM_LEAD']['VALUE'] == $USER->GetID(            ) && $arItem['PROPERTIES']['GAME_PAST']['VALUE'] == 'Да') {            $gamesID[] = $arItem['PROPERTIES']['GAME_ID']['VALUE'];            $arResult['GAMES'][] = [                'GAME_ID' => $arItem['PROPERTIES']['GAME_ID']['VALUE'],                'GAME_NUM' => $arItem['PROPERTIES']['TEAM_NUM']['VALUE'],                'GAME_POINT' => $arItem['PROPERTIES']['POINT']['VALUE']            ];        }    }    foreach ($arResult['GAMES'] as $key => $arGame) {        if (CModule::IncludeModule('iblock')) {            $dbEl = CIBlockElement::GetList([], ["IBLOCK_ID" => 2, 'ID' => $arResult['GAMES'][$key]['GAME_ID']]);            if ($obEl = $dbEl->GetNextElement()) {                $fields = $obEl->GetFields();                $props = $obEl->GetProperties();                $arResult['GAMES'][$key]['DESCRIPTION'] = array_merge($fields, $props);            }        }    }