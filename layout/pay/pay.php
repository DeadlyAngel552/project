<?php
include_once '..\..\php\mysqli.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Dickens</title>
</head>

<header>
    <a class="link" href="../../layout/company/company.php">О компании</a>
    <a class="link" href="../../layout/pay/pay.php">Оплата</a>
    <a class="link" href="../../layout/action/action.php">Акции и подарки</a>
    <a class="link" href="../../layout/delivery/delivery.php">Доставка по РФ</a>
</header>

<body>
<div class="head">
    <div class="logo"></div>
    <div class="section">
        <p class="phone">+7 (347) 666-69-69</p>
    </div>
    <div class="section2">
        <img class="kabinet_kartinka" src="images/kabinet.png">

        <a class="email" href="../../layout/entry/entry.php"><?php if(isset($_SESSION['name'])){ echo $_SESSION['name']; } else { ?>Личный кабинет<?php } ?></a>
    </div>
    <div class="section2">
        <img class="basket_image" src="images/basket.png">
        <a class="basket" href="../../new/basket/basket.php">Корзина</a>
    </div>
</div>
<div class="info">
    <div class="filter">
        <a class="selection" href="../../index.php">Главная</a>
        <a class="selection" href="../../new/genre/detective/detective.html">Детективы</a>
        <a class="selection" href="../../new/genre/fantasy/fantasy.html">Фантастика</a>
        <a class="selection" href="../../new/genre/classic/classic.html">Классика</a>
        <a class="selection" href="../../new/genre/novel/novel.html">Романы</a>
        <a class="selection" href="../../new/genre/adventures/adventures.html">Приключения</a>
        <a class="selection" href="../../new/genre/horrors/horrors.html">Ужасы</a>
    </div>
    <div class="slider">
        <img src="images/b1.jpg">
        <img src="images/b2.jpg">
        <img src="images/b3.jpg">
    </div>
    <div class="searching">
        <form class="form-search" action="/search/" target="_blank">
            <input type="hidden" name="searchid" value="808327">
            <input type="search" name="text" required placeholder="Поиск">
            <input type="image" src="http://3.bp.blogspot.com/-4w14hQHr5yQ/Tgm6u7KwUkI/AAAAAAAACAI/Hu2poBOPx3g/s1600/search.png"/>  <!-- вместо кнопки submit -->
        </form>
    </div>
</div>
<div class="polosa">
    <p class="asorti"></p>
</div>
<div class="information">
    <p class="information_text">Оплата заказа в интернет-магазине «Dickens» осуществляется наличными при получении товара в пункте самовывоза
        и при доставке курьером.</p>
    <p class="information_text">При получении посылки в почтовом отделении Почты России оплата заказа производится наложенным платежом.</p>
    <p class="information_text">Итоговая сумма заказа складывается из стоимости товаров в Вашей корзине, а также стоимости доставки
        «Почтой России», курьером или через пункт самовывоза. Более подробно читайте на странице
        <a class="link" href="../delivery/delivery.php">Доставка по РФ</a>.</p>
</div>




<a href="#" title="Вернуться к началу" class="top-button">UP</a>
<div class="basement">
    <div class="column">
        <a class="link2" href="../../layout/company/company.php">О компании</a>
        <a class="link2" href="../../layout/pay/pay.php">Оплата</a>
        <a class="link2" href="../../layout/action/action.php">Акции и подарки</a>
        <a class="link2" href="../../layout/delivery/delivery.php">Доставка по РФ</a>
        <a class="link2" href="../../registration/registration.php">Регистрация на сайте</a>
        <p class="correction">2020 © Интернет-магазин "Dickens"</p>
    </div>
    <div class="column">
        <p class="link2">Социальные сети:</p>
        <div class="net">
            <button type="button" class="social"><a class="link-text-link" href="https://vk.com">VK</a></button>
            <button type="button" class="social1"><a class="link-text-link" href="https://instagram.com">IN</a></button>
            <button type="button" class="social2"><a class="link-text-link" href="https://facebook.com">f</a></button>
        </div>
    </div>
    <div class="column">
        <p class="link2">Хорошая книга – лучший друг.</p>
        <p class="link3">Книга - лучший подарок.</p>
        <p class="link3">Книга твой друг, без нее, как без рук.</p>
    </div>
</div>
</body>
</html>