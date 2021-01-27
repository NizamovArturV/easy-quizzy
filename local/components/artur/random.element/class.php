<?php

use Bitrix\Main\Loader;
use Bitrix\Main\LoaderException;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * Class RandElementComp
 */
class RandElementComp extends CBitrixComponent
{
    private $iBlockID;

    /**
     * Подготовка параметров компонента
     * @param $arParams
     * @return mixed
     */
    public function onPrepareComponentParams($arParams)
    {
        $this->iBlockID = $arParams['IBLOCK_ID'];

        return $arParams;
    }

    /**
     * Получает случайный элемент из инфоблока
     * @return array
     * @throws LoaderException
     */
    public function getRandomElement(): array
    {
        Loader::includeModule("iblock");

        $arItem = [];
        $res = CIBlockElement::GetList(
            ["RAND" => "ASC"],
            ['IBLOCK_ID' => $this->iBlockID, 'ACTIVE' => 'Y'],
            false,
            ['nTopCount' => 1],
            ['ID', 'IBLOCK_ID', 'NAME', 'PROPERTY_*']
        );

        while ($ob = $res->GetNextElement()) {
            $arFields = $ob->GetFields();
            $arProperties = $ob->GetProperties();
            $arItem = array_merge($arFields, $arProperties);
        }

        return $arItem;
    }

    /**
     * @return mixed|void|null
     * @throws LoaderException
     */
    public function executeComponent()
    {
        $this->arResult = $this->getRandomElement();
        $this->includeComponentTemplate();
    }
}