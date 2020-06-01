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

    $_SESSION['name'] = $row['name'];
  }

  else {
    printf("Ты че дурак блять?");
  }
}

if (isset($_POST['login-out'])) {
  session_unset();
}
