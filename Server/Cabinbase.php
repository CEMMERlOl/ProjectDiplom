<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "g968848q_0540", "S13a09sh20a00", "g968848q_0540");
if ($mysqli == false) {
  print("error");
} else {

  $login = $_POST['login'];
  $id = $_SESSION["id"];

  $mysqli->query("UPDATE `Dusers` SET `login`='$login' WHERE `id`='$id'");

  print("entered");
}
?>