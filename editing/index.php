<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Редактирование профиля");
    if (!$USER->IsAuthorized()) {
        LocalRedirect("/auth");
    }
?>

<? $APPLICATION->IncludeComponent("bitrix:main.profile", "profile", array(
    "CHECK_RIGHTS" => "N",    // Проверять права доступа
    "SEND_INFO" => "N",    // Генерировать почтовое событие
    "SET_TITLE" => "N",    // Устанавливать заголовок страницы
    "USER_PROPERTY" => "",    // Показывать доп. свойства
    "USER_PROPERTY_NAME" => "",    // Название закладки с доп. свойствами
),
    false
); ?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>