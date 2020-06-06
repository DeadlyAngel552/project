<?php
//Подлкючение к БД.

$local = "localhost";
$user = "root";
$password = "";
$bd = "dikins_1";


$mysqli = mysqli_connect($local, $user, $password, $bd);
if (!$mysqli) {
    die('Ошибка соединения: ' . mysql_error());
}


session_start();


if (isset($_POST['login-go'])) {
    $login = mysqli_real_escape_string($mysqli, $_POST['login']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);


    if ($mysqli->query("SELECT * FROM `users` WHERE login = '$login' AND password = '$password'") == TRUE) {

        $rez = $mysqli->query("SELECT * FROM `users` WHERE login = '$login' AND password = '$password'");
        $row = $rez->fetch_assoc();


            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];


    } else {
        printf("Не правильно");
    }
}


if (isset($_POST['login-out'])) {
    session_unset();
}


if (isset($_GET['basket_del'])) {
    $book_del = mysqli_real_escape_string($mysqli, $_GET['id']);


    if ($mysqli->query("DELETE FROM `basket` WHERE id = '$book_del'") == TRUE) {
    }
}


if (isset($_POST['registration'])) {
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);

    $address = mysqli_real_escape_string($mysqli, $_POST['address']);

    $contacts = mysqli_real_escape_string($mysqli, $_POST['contacts']);

    $log = mysqli_real_escape_string($mysqli, $_POST['login']);

    $pass = mysqli_real_escape_string($mysqli, $_POST['password']);

    if ($mysqli->query("INSERT INTO `users`(`name`, `address`, `contacts`, `login`, `password`) VALUES ('$name', '$address',' $contacts', '$log', '$pass')") == TRUE) {
        $_SESSION['name'] = $name;
        $res = $mysqli->query("SELECT id FROM users WHERE name = '$name'");
        $row = $res->fetch_assoc();
        $_SESSION["id"] = $row["id"];
    } else {
        echo "-";
    }
}
// ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
if (isset($_GET['order'])) {
    $book = $_GET['id'];
    $user_id = mysqli_real_escape_string($mysqli, $_SESSION['id']);
    $row = explode(',', $book);

    // echo "<pre>";
    // print_r($book[0]);
    // echo "</pre>";

    foreach ($row as $key => $value) {
        // code...
        $b = mysqli_real_escape_string($mysqli, $value);

        //printf("INSERT INTO `offers`(`book_id`, `user_id`) VALUES ('$b', '$user_id')");
        if ($mysqli->query("INSERT INTO `offers`(`book_id`, `user_id`) VALUES ('$b', '$user_id')") == TRUE)
        {
            $mysqli->query("DELETE FROM `basket` WHERE `user_id` = '$user_id'");
        }
    }
    header("Location: http://dickens/layout/thank/thanks.php");
}
