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
<body>

<?php
include('..\..\layout\header.php');
?>
<div class="info">
    <div class="filter">
        <a class="selection" href="..\..\index.php">Главная</a>
        <a class="selection" href="../genre/detective/detective.html">Детективы</a>
        <a class="selection" href="../genre/fantasy/fantasy.html">Фантастика</a>
        <a class="selection" href="../genre/classic/classic.html">Классика</a>
        <a class="selection" href="../genre/novel/novel.html">Романы</a>
        <a class="selection" href="../genre/adventures/adventures.html">Приключения</a>
        <a class="selection" href="../genre/horrors/horrors.html">Ужасы</a>
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
    <p class="asorti">Вход</p>
</div>
<?php if (isset($_SESSION['name'])) { ?>
  <form class="entry" method="post">
    <h3>Вы уже авторизованны как <?php echo $_SESSION['name']; ?></h3>
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
<a href="#" title="Вернуться к началу" class="top-button">UP</a>
<?php
}
include('..\..\layout\footer.php');
?>
</body>
</html>
