<?php    foreach ($arResult['ITEMS'] as $arItem) {        if ($arItem['PROPERTIES']['GAME_PAST']['VALUE'] === 'Да'){            $arResult['TEAMS'][$arItem['PROPERTIES']['CURRENT_TEAM']['VALUE']]['GAMES'][$arItem['PROPERTIES']['GAME_ID']['VALUE']] = [              'TEAM_NUM' => $arItem['PROPERTIES']['TEAM_NUM']['VALUE'],                'POINT' => $arItem['PROPERTIES']['POINT']['VALUE']            ];            $arResult['TEAMS'][$arItem['PROPERTIES']['CURRENT_TEAM']['VALUE']]['POINT_ALL'] += $arItem['PROPERTIES']['POINT']['VALUE'];        }    }    foreach ($arResult['TEAMS'] as $key => $arGame) {        if (CModule::IncludeModule('iblock')) {            $dbEl = CIBlockElement::GetList([], ["IBLOCK_ID" => 4, 'ID' => $key]);            if ($obEl = $dbEl->GetNextElement()) {                $fields = $obEl->GetFields();                $props = $obEl->GetProperties();                $arResult['TEAMS'][$key]['DESCRIPTION'] = array_merge($fields, $props);            }        }    }