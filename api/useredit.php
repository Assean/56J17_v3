<?php
    include_once "pdo.php";
    session_start();

    $password = $_POST["password"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $user = $_SESSION["user"];
    $sql = "update users set password='$password',name='$name',email='$email',address='$address'
    where account = '$user'
    ";
    $pdo->exec($sql);
    echo $sql;
    header("location:../profile.php");
    // echo $_SESSION["user"];
    // print_r($_POST);
    ?>