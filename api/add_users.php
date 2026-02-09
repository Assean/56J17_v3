<?php 
include_once("pdo.php");
$sql="INSERT INTO `users`(`account`,`password`,`name`,`email`,`address`) 
                   VALUES('{$_POST['account']}',
                          '{$_POST['password']}',
                          '{$_POST['name']}',
                          '{$_POST['mail']}',
                          '{$_POST['address']}')";

$pdo->exec($sql);

header("location:../index.php");

/* echo "<pre>"; deBug
print_r($_POST);
echo "</pre>"; */

?>