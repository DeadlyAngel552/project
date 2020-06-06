<?php
include_once 'C:\OSPanel\domains\project\php\mysqli.php';
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
<?php if (isset($_SESSION['name'])) { ?>
    <form class="entry" method="post">
        <h3>Вы уже авторизованы как <?php echo $_SESSION['name']; ?></h3>
        <button class="entry-button" name="login-out" type="submit">Выйти</button>
    </form>
<?php } else { ?>

    <form class="entry" method="post">
        <input type="text" name="login" class="entry-field"
               placeholder="Логин" aria-required="true" aria-invalid="true">

        <input type="password" name="password" class="entry-field2"
               placeholder="Пароль" aria-required="true" aria-invalid="true">

        <button class="entry-button" name="login-go" type="submit">Войти</button>
    </form>
<?php } ?>