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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<header>
    <a class="link" href="../layout/company/company.php">О компании</a>
    <a class="link" href="../layout/pay/pay.php">Оплата</a>
    <a class="link" href="../layout/action/action.php">Акции и подарки</a>
    <a class="link" href="../layout/delivery/delivery.php">Доставка по РФ</a>
</header>
<body>
<div class="head">
    <div class="logo"></div>
    <div class="section">
        <a class="admin-text" href="applications.php">Заявки</a>
        <a class="admin-text" href="book.php">Книги</a>
        <a class="admin-text" href="../index.php">Выйти</a>
    </div>
</div>
<div class="container">
    <table class="table table-inverse">
        <thead>
        <tr>
            <th>#</th>
            <th>Дата</th>
            <th>Пользователь</th>
            <th>Адрес</th>
            <th>Контакты</th>
            <th>Сумма</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>04.06.2020</td>
            <td>Лилит</td>
            <td>г. Белебей</td>
            <td>deadly.angel502@gmail.com</td>
            <td>300 руб.</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</html>
