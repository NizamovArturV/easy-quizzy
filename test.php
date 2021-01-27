<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
$APPLICATION->SetPageProperty('body_class', 'main-page');

?><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"",
	Array(
		"FORGOT_PASSWORD_URL" => "/recovery/",
		"PROFILE_URL" => "/profile/",
		"REGISTER_URL" => "/registration/",
		"SHOW_ERRORS" => "N"
	)
);?><?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>