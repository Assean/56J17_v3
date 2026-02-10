<?php 
include_once("pdo.php");
$check_user="SELECT COUNT(*) FROM `users` WHERE account='{$_POST['account']}'";
$check_num=$pdo->query($check_user)->fetchColumn();
if($check_num>0){
       echo "<script>alert('帳號已存在');";
       echo "location.href='../register.php'";
       echo "</script>";
}else{

       $sql="INSERT INTO `users`(`account`,`password`,`name`,`email`,`address`) 
                     VALUES('{$_POST['account']}',
                            '{$_POST['password']}',
                            '{$_POST['name']}',
                            '{$_POST['email']}',
                            '{$_POST['address']}')";

       $pdo->exec($sql);

       header("location:../index.php");

       }
/* echo "<pre>"; deBug
print_r($_POST);
echo "</pre>"; */

?>
