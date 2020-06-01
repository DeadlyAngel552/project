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
    <a class="link" href="layout\company\company.php">О компании</a>
    <a class="link" href="layout\pay\pay.php">Оплата</a>
    <a class="link" href="layout\action\action.php">Акции и подарки</a>
    <a class="link" href="layout\delivery\delivery.php">Доставка по РФ</a>
</header>
<?php
include('..\..\layout\header.php');
?>
<div class="info">
    <div class="filter">
        <a class="selection" href="../../public/index.html">Главная</a>
        <a class="selection" href="../../public/genre/detective/detective.html">Детективы</a>
        <a class="selection" href="../../public/genre/fantasy/fantasy.html">Фантастика</a>
        <a class="selection" href="../../public/genre/classic/classic.html">Классика</a>
        <a class="selection" href="../../public/genre/novel/novel.html">Романы</a>
        <a class="selection" href="../../public/genre/adventures/adventures.html">Приключения</a>
        <a class="selection" href="../../public/genre/horrors/horrors.html">Ужасы</a>
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
    <p class="information_text_logo">Каким образом осуществляется доставка?</p>
    <p class="information_text">Интернет-магазин «Dickens» работает на всей территории России, включая республику Крым, и предлагает товары и книги с доставкой несколькими способами:</p>
    <p class="information_text">Почта России</p>
    <p class="information_text">1) Стоимость согласно тарифам Почты России.</p>
    <p class="information_text">2) Для 114 городов действуют сниженные фиксированные тарифы «Посылка онлайн» для заказов до 5 кг.</p>
    <p class="information_text">3) Оплата при получении.</p>
    <p class="information_text">4) Для получения заказа необходим паспорт и извещение.</p>
    <p class="information_text">5) Ориентировочный срок доставки Вы можете увидеть на странице обзора и подтверждения заказа.</p>
    <p class="information_text">6) Ограничения по доставке посылок ФГУП "Почта России" в труднодоступные регионы.</p>
</div>

<a href="#" title="Вернуться к началу" class="top-button">UP</a>
<?php
include('..\..\layout\footer.php');
?>
</body>
</html>
