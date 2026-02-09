<?php
include_once("pdo.php");
$sql="INSERT INTO `result` (`game`,`status`,`time`,`account`) 
                     values('{$_POST['game']}','{$_POST['data']['result']}','{$_POST['data']['time']}','{$_POST['user']}')";
$pdo->exec($sql);