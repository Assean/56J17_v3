<?php
include_once "pdo.php";
    //實作刪除
    $id = $_GET["id"];
    $sql= "delete from contact_us where `id`= $id";
    $pdo->exec($sql);
    header("location:../email.php");