<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>

<footer class="footer">
    <!-- Подвал верх -->
    <div class="footer__top">
        <div class="container">
            <div id="back_top" class="back_top"></div>
            <div class="row">
                <div class="width-28">
                    <a href="/" class="mob-hidden footer__logo" title="">
                        <img src="images/i/pic-logo.png" alt="">
                    </a>
                    <p>Компания ОДО «Тралс» , основанная в г. Минске в 1995 году является одним из крупнейших поставщиков элементов питания, герметичных аккумуляторов, стационарных аккумуляторов, зарядных устройств и светотехнической продукции в Республику Беларусь. </p>
                </div>
                <div class="width-72">
                    <nav class="footer__nav">
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
                    </nav>
                    <ul class="footer__contact flex">
                        <li class="address">
                            <div class="title">Адрес:</div>
                            <p>Pеспублика Беларусь, 220113, Минск, <br>Логойский тракт, д.15, к.4</p>
                            <a href="#fb-map" class="address__map js-open-modal" title=""><span>Посмотреть на карте</span></a>
                        </li>
                        <li>
                            <div class="title">Время работы:</div>
                            <p>понедельник — пятница: <span>с 9:00 до 19:00</span> <br>суббота: <span>с 10:00 до 17:00</span> <br>воскресенье: <span>выходной</span></p>
                        </li>
                        <li>
                            <div class="title">Общий номер:</div>
                            <p>+375 (17) 269 31 22 <br>trals@trals.by</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Подвал копирайт -->
    <div class="footer__copyright">
        <div class="container">
            <div class="flex">
                <p>© 2002-2017 ООО «Trals.by». Все права защищены</p>
                <a class="go-site-map" href="#" title="">Карта сайта</a>
                <p>Разработка сайта: <a href="#" class="" title="">webcompany.by</a></p>
            </div>
        </div>
    </div>
</footer>

<!-- -->
</div>
<!-- // -->

<!-- Модальная карта -->
<div id="fb-map" class="g-modal-win" style="display: none;">
    <div class="g-modal-win__content">
        <div class="modal__address"><span>Адрес:</span> Республика Беларусь, индекс 220113, г.Минск, Лагойский тракт, д.15, к.4 </div>
        <div id="ya-map" class="ya-map"></div>
        <div class="clearfix">
            <div class="modal__phone">
                <div class="title">Номера телефонов: </div>
                <p>Отдел елементов питания: <span><a href = "tel:+37517312693133" title = "">+375 (17) 31-269-31-33</a></span> <br class = "mob-hidden">Отдел герметичных аккумулятор: <span><a href = "tel:+375172693155" title = "">+375 (17) 269-31-55</a></span> <br class = "mob-hidden">
                    Отдел лапм бытового освещения: <span><a href = "tel:+375172693144" title = "">+375 (17) 269-31-44</a></span> <br class = "mob-hidden">Общий номер: <span><a href = "tel:+375172693132" title = "">+375 (17) 269-31-32</a></span></p>
            </div>
            <div class="modal__time">
                <div class="title">Время работы: </div>
                <p>понедельник — пятница: <span>с 9:00 до 19:00</span> <br>суббота: <span>с 10:00 до 17:00</span> <br>воскресенье: <span>выходной</span> </p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
