<?php


$dsn = 'mysql:host=.com.mysql;dbname=';
$user = '';
$pass = '';


$option = array(
  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try {
  $conn = new PDO($dsn, $user, $pass, $option);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e) {
  echo "<center>الموقع تحت الصيانة سوف نعود بعد 10 دقائق<center>";
}


?>

