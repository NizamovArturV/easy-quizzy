<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>

<html lang="ru">

<head>
    <title><?$APPLICATION->ShowTitle();?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?$APPLICATION->ShowHead();?>

    <link rel="icon" type="image/png" sizes="16x16" href="<?=SITE_TEMPLATE_PATH?>/favicon-16x16.png">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/build/main.css">
</head>

<body class="<?$APPLICATION->ShowProperty('body_class');?>">
<?$APPLICATION->ShowPanel();?>

<header class="header" role="banner">
    <div class="header__desktop">
        <div class="header__top">
            <div class="header__inner">
                <div class="header__side">
                    <div class="header__dropdown">
                        <div class="dropdown-cities ">
                            <button type="button" class="dropdown-cities__button">Уфа</button>
                            <div class="dropdown-cities__roll">
                                <ul class="dropdown-cities__list">
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Владивосток</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Владимир</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Воронеж</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Екатеринбург</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Ижевск</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Иркутск</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Йошкар-Ола</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Казань</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Краснодар</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Москва</a>
                                    </li>
                                </ul>
                                <ul class="dropdown-cities__list">
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Набережные Челны</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Нижний Новгород</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Новосибирск</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Пермь</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Самара</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Санкт-Петербург</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Сочи</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Тюмень</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Уфа</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Хабаровск</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a href="tel:+79872334116" class="header__link">+7 (987) 233-41-16</a>
                </div>
                <div class="header__profile">
                    <div class="header__icon"
                         style="background-image: url('<?=SITE_TEMPLATE_PATH?>/build/images/user.jpg');"></div>
                    <a href="/profile" class="header__name">Андрей Александров</a>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="header__inner">
                <a href="/" class="header__logo"></a>
                <nav class="header__nav" role="navigation">
                    <ul class="header__menu" role="menu">
                        <li class="header__item" role="menuitem">
                            <a href="/shedule" class="header__link">Расписание</a>
                        </li>
                        <li class="header__item" role="menuitem">
                            <a href="/rating" class="header__link">Рейтинг команд</a>
                        </li>
                    </ul>
                    <a href="#!" class="button button--small">
                        <span class="button__text">Записаться</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
    <div class="header__mobile">
        <div class="header__inner">
            <div class="header__side">
                <a href="index.html" class="header__logo"></a>
                <button type="button" class="header__cities" data-modal="modalCities">Набережные Челны</button>
            </div>
            <button type="button" class="header__hamburger hamburger" data-menu-mobile>
                <span class="hamburger__line"></span>
                <span class="hamburger__line"></span>
                <span class="hamburger__line"></span>
            </button>
        </div>
    </div>
</header>

<main class="main" role="main">
	
						