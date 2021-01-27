<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");
$APPLICATION->SetPageProperty('body_class','page-purple');
?>

<div class="not-found">
        <div class="not-found__inner">
            <div class="not-found__subject">
                <div class="not-found__logo">
                    <p class="not-found__name">404</p>
                </div>
            </div>
            <div class="not-found__frame">
                <div class="not-found__plank">
                    <p class="not-found__text">такой страницы не существует</p>
                </div>
            </div>
        </div>
        <div class="not-found__shapes">
            <div class="shapes shapes--not-found">
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
            </div>
        </div>
    </div>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>