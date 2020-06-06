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
<div class="container" style="height: auto">
    <table class="table table-inverse">
        <thead>
        <tr>
            <th>Номер заявки</th>
            <th>Книга</th>
            <th>Пользователь</th>
            <th>Дата создания</th>
            <th>Статус</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $res = $mysqli->query("SELECT `offers`.`id`, `title`, `name`, `create_at`, `status`  FROM `offers` INNER JOIN `book` ON `offers`.`book_id` = `book`.`id` INNER JOIN `users` ON `users`.`id` = `offers`.`user_id`");
        while ($row = $res->fetch_assoc()) {
        ?>
        <tr>
            <th scope="row"><?php echo $row["id"]; ?></th>
            <td><?php echo $row["title"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["create_at"]; ?></td>
            <td>
                <?php if ($row["status"] == "0") { ?>
                    <span>Ожидание</span>
                    <form method="post">
                      <input type = "text" name="id" value="<?php echo $row['id']; ?>" hidden />
                      <button class="button-add btn-success" name="send" type="submit">Отправить</button>
                    </form>


                    <form method="post">
                      <input type = "text" name="id" value="<?php echo $row['id']; ?>" hidden />
                      <button class="button-add btn-dangures" name="cancel" type="submit">Отменить</button>
                    </form>
                <?php
                }
                else {
                  ?><span>Отправлено</span><?php
                }
                 ?>

            </td>

        </tr>
        <?php }  ?>
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
