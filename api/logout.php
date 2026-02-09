<?php
session_start();
// 存取和修改 $_SESSION 變數（如清除用戶資料）
unset($_SESSION['user']);
// (unset)移除特定的 Session 變數，這裡是用來登出使用者
header("location:../index.php");
// 導向到首頁(index.php)，完成登出流程
?>