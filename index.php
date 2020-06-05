<?php
include_once 'php\mysqli.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Dickens</title>
</head>
<body>
  <header>
      <a class="link" href="admin-panel/applications.php">Администратор</a>
      <a class="link" href="layout/company/company.php">О компании</a>
      <a class="link" href="layout/pay/pay.php">Оплата</a>
      <a class="link" href="layout/action/action.php">Акции и подарки</a>
      <a class="link" href="layout/delivery/delivery.php">Доставка по РФ</a>
  </header>
  <?php
  include('layout\header.php');
  ?>
<div class="info">
    <div class="filter">
        <a class="selection" href="index.php">Главная</a>
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
        <br>
        <?php
        if (isset($_GET['book'])) {
            $book = mysqli_real_escape_string($mysqli , $_GET['id']);
            $user_id =  mysqli_real_escape_string($mysqli , $_SESSION['id']);


            $mysqli->query("INSERT INTO `basket`(`book_id`, `user_id`, `count`) VALUES ('$book', '$user_id', 0)");
            ?> <h3>Добавлено в корзину</h3> <?php
        }
        ?>
    </div>
</div>
<div class="polosa">
    <p class="asorti">В ПРОДАЖЕ:</p>
</div>
<div class="blocks">

  <?php
    $res = $mysqli->query("SELECT  book.id,`title`, `price`, `img`, author.name
                    FROM book INNER JOIN author ON book.author_id = author.id");
    while ($row = $res->fetch_assoc()) {
        ?>
        <div class="block">
            <img class="book-image" src="<?php echo $row["img"]; ?>">
            <h3 class="style"><?php echo $row["title"]; ?></h3>
            <p class="style">Автор: <?php echo $row["author.name"]; ?></p>
            <p class="style">Цена: <?php echo $row["price"]; ?>руб.</p>
            <form method="GET">
                <input type = "text" name="id" value="<?php echo $row['id']; ?>" hidden />
                <button type="submit" name="book" class="add-book">Добавить в корзину</button>
            </form>
        </div>
        <?php
    }
 ?>
</div>
<br>
<div class="description">
    <p class="title">Диккенс - интернет-магазин по продаже книг.</p>
    <p class="text">Предельного внимания заслуживает наш книжный каталог: более 5 000 книг, самые известные авторы и издательства.</p>
    <p class="text">Мы постоянно улучшаем наш сервис и никогда не останавливаем работу над сайтом, поэтому Вы всегда найдете то, что Вас интересует, благодаря удобному меню, расширенному поиску товаров на сайте, понятным описаниям и инструкциям.</p>
    <p class="text">С нашим интернет-магазином Вы сможете уложиться даже в самый скромный бюджет.</p>
    <p class="text">Книги, можно заказать, и их доставят в самый далекий уголок России. Способов доставки несколько, о них вы сможете узнать в <a class="text" href="layout/delivery/delivery.php">специальном разделе</a>.</p>
</div>
<a href="#" title="Вернуться к началу" class="top-button">UP</a>
<?php
include('layout\footer.php');
?>
</body>
</html>
