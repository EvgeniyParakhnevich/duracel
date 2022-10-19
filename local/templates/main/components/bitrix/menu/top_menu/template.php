<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult)): ?>
<div class="header__center clearfix">
    <div class="container">
        <div class = "flex">
            <ul class="header__menu">
                <?php foreach ($arResult as $item): ?>
                <li class="has-children">
                    <a href="<?= $item['LINK'] ?>" title=""><?= $item['TEXT'] ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<?php endif; ?>


<!--<ul class="sub-menu">-->
<!--    <li><a href="#" title="">Элементы питания</a></li>-->
<!--    <li><a href="#" title="">Бытовые аккумуляторы</a></li>-->
<!--    <li><a href="#" title="">Зарядные устройства</a></li>-->
<!--    <li><a href="#" title="">Индустриальные аккумуляторы</a></li>-->
<!--    <li><a href="#" title="">Лампы</a></li>-->
<!--    <li><a href="#" title="">Инверторы</a></li>-->
<!--    <li><a href="#" title="">Стационарные аккумуляторы</a></li>-->
<!--    <li><a href="#" title="">Сервис и ремент аккумуляторов</a></li>-->
<!--    <li><a href="#" title="">Портативные аккумуляторы</a></li>-->
<!--    <li><a href="#" title="">Светильники</a></li>-->
<!--</ul>-->
