<?php
include_once '..\php\mysqli.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Dickens</title>
</head>

<header>
    <a class="link" href="../layout/company/company.php">О компании</a>
    <a class="link" href="../layout/pay/pay.php">Оплата</a>
    <a class="link" href="../layout/action/action.php">Акции и подарки</a>
    <a class="link" href="../layout/delivery/delivery.php">Доставка по РФ</a>
</header>
<?php
include('..\layout\header.php');
?>
<body>
<div class="info">
    <div class="filter">
        <a class="selection" href="../index.php">Главная</a>
        <a class="selection" href="">Детективы</a>
        <a class="selection" href="">Фантастика</a>
        <a class="selection" href="">Классика</a>
        <a class="selection" href="">Романы</a>
        <a class="selection" href="">Приключения</a>
        <a class="selection" href="">Ужасы</a>
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
    <p class="asorti">Регистрация</p>
</div>
<div class="registration">
    <input type="email" name="sf_EMAIL" class="pole-registration"
    placeholder="Адрес электронной почты" aria-required="true" aria-invalid="true">
    <input type="password" name="password" class="pole-registration"
           placeholder="Пароль" aria-required="true" aria-invalid="true">
    <input type="password" name="password" class="pole-registration"
           placeholder="Повторите пароль" aria-required="true" aria-invalid="true">
    <button class="registration-button"><a class="link-entry" href="">Зарегистрироваться</a></button>
</div>

<a href="#" title="Вернуться к началу" class="top-button">UP</a>
<div class="basement">
    <div class="column">
        <a class="link2" href="../layout/company/company.php">О компании</a>
        <a class="link2" href="../layout/pay/pay.php">Оплата</a>
        <a class="link2" href="../layout/action/action.php">Акции и подарки</a>
        <a class="link2" href="../layout/delivery/delivery.php">Доставка по РФ</a>
        <a class="link2" href="../registration/registration.php">Регистрация на сайте</a>
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