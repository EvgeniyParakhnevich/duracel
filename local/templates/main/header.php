<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Page\Asset;

?>

<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Каталог | Тралс</title>
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="cmsmagazine" content="aa4cc816c3e233bc68ec4386b3eabcf3" />
    <link rel="shortcut icon" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/favicon.png">
    <!-- style include -->

    <?php
    //style
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/libs/font-awesome-4.2.0/css/font-awesome.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/libs/owl-carousel/assets/owl.carousel.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/libs/fancybox/jquery.fancybox.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/libs/easy-responsive-tabs-to-accordion/easy-responsive-tabs.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/libs/slick-1.8.0/slick/slick.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/libs/slick-1.8.0/slick/slick-theme.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/fonts.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/style.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/media.css');

    //script
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/libs/jquery/jquery-1.7.1.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/libs/jquery/jquery-migrate-1.2.1.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/libs/owl-carousel/owl.carousel.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/libs/fancybox/jquery.fancybox.pack.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/libs/jquery/jquery-ui-1.8.11.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/libs/easy-responsive-tabs-to-accordion/easyResponsiveTabs.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/libs/slick-1.8.0/slick/slick.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/custom-ui-slider.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.ui.touch-punch.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/common.js');
    ?>


    <? $APPLICATION->ShowHead(); ?>
</head>
<body>

<div id="panel">
    <? $APPLICATION->ShowPanel(); ?>
</div>

<!-- -->
<div class="bd-site">
    <div class = "b-fixed-footer">
        <div class = "b-footer-padding">
            <!-- // -->

            <!-- Мобильное меню -->
            <div class="mobile-aside mobile-aside__nav">
                <div class = "mobile-aside__nav__header">
                    <div class = "mobile-aside__nav__close">
                        <i></i> Закрыть
                    </div>
                </div>
                <nav class = "mobile-aside__nav__body">
                    <ul class="mobile__menu">
                        <li class="has-children">
                            <a href="#" title="">Каталог товаров</a>
                            <ul class="sub-menu">
                                <li><a href="#" title="">Элементы питания</a></li>
                                <li><a href="#" title="">Бытовые аккумуляторы</a></li>
                                <li><a href="#" title="">Зарядные устройства</a></li>
                                <li><a href="#" title="">Индустриальные аккумуляторы</a></li>
                                <li><a href="#" title="">Лампы</a></li>
                                <li><a href="#" title="">Инверторы</a></li>
                                <li><a href="#" title="">Стационарные аккумуляторы</a></li>
                                <li><a href="#" title="">Сервис и ремент аккумуляторов</a></li>
                                <li><a href="#" title="">Портативные аккумуляторы</a></li>
                                <li><a href="#" title="">Светильники</a></li>
                            </ul>
                        </li>
                        <li><a href="#" title="">О компании</a></li>
                        <li><a href="#" title="">Партнеры</a></li>
                        <li><a href="#" title="">Торговые марки</a></li>
                        <li><a href="#" title="">Статьи</a></li>
                        <li><a href="#" title="">Контакты</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Мобильные контакты -->
            <div class="mobile-aside mobile-aside__contact">
                <div class = "mobile-aside__contact__header">
                    <div class = "mobile-aside__contact__close">
                        <i></i> Закрыть
                    </div>
                </div>
                <div class = "mobile-aside__contact__body">
                    <ul class="header__contact">
                        <li>
                            <div class="header__contact__label">Отдел элементов <br>питания:</div>
                            <div class="header__contact__data"><a href = "tel:+375172693133" title = "">+375 (17) 269-31-33</a> <br>office@trals.by</div>
                        </li>
                        <li>
                            <div class="header__contact__label">Отдел герметичных <br>аккумуляторов:</div>
                            <div class="header__contact__data"><a href = "tel:+375172693155" title = "">+375 (17) 269-31-55</a> <br>indbat@trals.by</div>
                        </li>
                        <li>
                            <div class="header__contact__label">Отдел ламп бытового <br>освещения:</div>
                            <div class="header__contact__data"><a href = "tel:+375172693144" title = "">+375 (17) 269-31-44</a> <br>lamps@trals.by</div>
                        </li>
                        <li>
                            <div class="header__contact__label">Общий номер: <br>&nbsp;</div>
                            <div class="header__contact__data"><a href = "tel:+375172693122" title = "">+375 (17) 269-31-22</a> <br>trals@trals.by</div>
                        </li>
                    </ul>
                    <div class="header__address address">
                        <p>Pеспублика Беларусь, 220113, Минск, <br>Логойский тракт, д.15, к.4</p>
                        <a href="#fb-map" class="address__map js-open-modal" title=""><span>Посмотреть на карте</span></a>
                    </div>
                </div>
            </div>

            <header class="header">
                <!-- Шапка верх -->
                <div class="header__top">
                    <div class="container">
                        <ul class="header__contact flex">
                            <li>
                                <? $APPLICATION->IncludeComponent("bitrix:main.include", "", [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH"           => SITE_TEMPLATE_PATH . "/includes/header_label/header_label1.php",
                                ]); ?><? $APPLICATION->IncludeComponent("bitrix:main.include", "", [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH"           => SITE_TEMPLATE_PATH . "/includes/header_data/header_data1.php",
                                ]); ?>
                            </li>
                            <li>
                                <? $APPLICATION->IncludeComponent("bitrix:main.include", "", [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH"           => SITE_TEMPLATE_PATH . "/includes/header_label/header_label2.php",
                                ]); ?><? $APPLICATION->IncludeComponent("bitrix:main.include", "", [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH"           => SITE_TEMPLATE_PATH . "/includes/header_data/header_data2.php",
                                ]); ?>
                            </li>
                            <li>
                                <? $APPLICATION->IncludeComponent("bitrix:main.include", "", [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH"           => SITE_TEMPLATE_PATH . "/includes/header_label/header_label3.php",
                                ]); ?><? $APPLICATION->IncludeComponent("bitrix:main.include", "", [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH"           => SITE_TEMPLATE_PATH . "/includes/header_data/header_data3.php",
                                ]); ?>
                            </li>
                            <li>
                                <? $APPLICATION->IncludeComponent("bitrix:main.include", "", [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH"           => SITE_TEMPLATE_PATH . "/includes/header_label/header_label4.php",
                                ]); ?><? $APPLICATION->IncludeComponent("bitrix:main.include", "", [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH"           => SITE_TEMPLATE_PATH . "/includes/header_data/header_data4.php",
                                ]); ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Шапка низ + меню -->
                <div class="header__center clearfix">
                    <div class="container">
                        <div class = "flex">
                            <div class = "mobile-trigger">
                                <i></i><span>Меню</span>
                            </div>
                            <a href="/" class="header__logo" title="">
                                <? $APPLICATION->IncludeComponent("bitrix:main.include", "", [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH"           => SITE_TEMPLATE_PATH . "/includes/header_logo.php",
                                ]); ?>
                            </a>
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "top_menu",
                                array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "left",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "2",
                                    "MENU_CACHE_GET_VARS" => array(
                                    ),
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_USE_GROUPS" => "N",
                                    "ROOT_MENU_TYPE" => "top",
                                    "USE_EXT" => "N",
                                    "COMPONENT_TEMPLATE" => "top_menu"
                                ),
                                false
                            );?>
                            <div class="header__address address">
                                <? $APPLICATION->IncludeComponent("bitrix:main.include", "", [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH"           => SITE_TEMPLATE_PATH . "/includes/header_address.php",
                                ]); ?>
                            </div>
                            <div class = "mobile-address-trigger">
                                <i></i>
                            </div>
                        </div>
                    </div>
                </div>
            </header>