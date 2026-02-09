<?php

if($_POST["ver_num"] != $_POST["ans"]){
    echo "<script>";
    echo "alert('你輸入的驗證碼錯誤,請重新輸入');";
    echo "location.href='../login.php'";
    echo "</script>";
}
include_once("pdo.php");
// insert into 新增
// update set 修改
// delete 刪除
// SELECT 查詢
$sql="SELECT count(*) FROM `users` WHERE `account`='{$_POST['account']}' AND `password`='{$_POST['password']}'";
$result=$pdo->query($sql)->fetchAll();
//  $result是抓到的資料筆數
// fetchColumn 會從 COUNT(*) 查詢中獲取匹配記錄的數量，並存入 $result。

if($result>0){  
//(if)查詢出來的資料筆數大於0代表有這個使用者，所以可以登入，否則登入失敗
    session_start();
    // 伺服器端儲存登入狀態資料，並在多個頁面間保持這些資料。
    $_SESSION['user']=$_POST['account'];
    // 將使用者的帳號存入 Session 中，方便後續頁面識別使用者身份

    // header("location:index.php");
    echo "<script>";
    echo "alert('歡迎登入');";
    echo "location.href='../index.php'";
    echo "</script>";
    // echo "<script>location.href='index.php'</script>";
}else{
    echo "<script>";
    echo "alert('你輸入的帳號密碼錯誤,請重新輸入');";
    echo "location.href='../login.php'";
    echo "</script>";
}



