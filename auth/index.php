<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Авторизация");
?>
<?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "auth", Array(
    "FORGOT_PASSWORD_URL" => "/recovery/",	// Страница забытого пароля
    "PROFILE_URL" => "/profile/",	// Страница профиля
    "REGISTER_URL" => "/registration/",	// Страница регистрации
    "SHOW_ERRORS" => "N",	// Показывать ошибки
),
    false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>