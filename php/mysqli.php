<?php
//Подлкючение к БД.

$local = "localhost";
$user = "root";
$password = "";
$bd = "dikins";


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

if (isset($_GET['order'])) {
    $book = mysqli_real_escape_string($mysqli, $_GET['id']);
    $user_id = mysqli_real_escape_string($mysqli, $_GET['user_id']);
    $row = explode(',', $book);

    // echo "<pre>";
    // print_r($row);
    // echo "</pre>";

    foreach ($row as $key => $value) {
        // code...
        $b = mysqli_real_escape_string($mysqli, $value);
        $user = mysqli_real_escape_string($mysqli, $value);
        $create = date("Y-m-d");
        $status = mysqli_real_escape_string($mysqli, $value);

        if ($mysqli->query("INSERT INTO `offers`(`book_id`, `user_id`, `create_at`, `status`) VALUES ('$b', '$user', '$create','$status')") == TRUE)
        {
            printf("work");
        }

    }
}
