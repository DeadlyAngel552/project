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


if ( isset($_POST['login-go'])) {
  $login = mysqli_real_escape_string( $mysqli, $_POST['login']);
  $password = mysqli_real_escape_string($mysqli, $_POST['password']);


  if ( $mysqli->query("SELECT * FROM `users` WHERE login = '$login' AND password = '$password'") == TRUE) {

    $rez = $mysqli->query("SELECT * FROM `users` WHERE login = '$login' AND password = '$password'");
    $row = $rez->fetch_assoc();

    $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $row['name'];
  }

  else {
    printf("Не правильно");
  }
}

if (isset($_POST['login-out'])) {
  session_unset();
}


if (isset($_GET['basket_del'])) {
    $book_del = mysqli_real_escape_string($mysqli , $_GET['id']);


    if($mysqli->query("DELETE FROM `basket` WHERE id = '$book_del'") == TRUE) {
    }
}