<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "g968848q_0540", "S13a09sh20a00", "g968848q_0540");
if ($mysqli == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}else{

    $login = $_POST['login'];
    $email = trim(mb_strtolower($_POST['email']));
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);

    $result = $mysqli->query("SELECT * FROM `Dusers` WHERE `email` = '$email'");

    if($result->num_rows !== 0) {
        print("exist");
    } else {
        $mysqli->query("INSERT INTO `Dusers`(`login`, `email`, `pass`) VALUES ('$login', '$email', '$pass')");
        
        $email1 = $mysqli->query("SELECT * FROM `Dusers` WHERE `email` = '$email'");
        $Arrayreg = $email1->fetch_assoc();

        $_SESSION["login"] = $Arrayreg["login"];
        $_SESSION["email"] = $Arrayreg["email"];
        $_SESSION["id"] = $Arrayreg["id"];
        print("ok");
    }
}
?>