<?

    require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
    $APPLICATION->SetTitle("Восстановление пароля");
?>
<?php
    $APPLICATION->IncludeComponent(
        "bitrix:system.auth.forgotpasswd",
        "forgot-password",
        [

        ],
        false
    ); ?>
<?
    require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>