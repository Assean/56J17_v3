<?php
    include "pdo.php";
    $sql="SELECT * FROM `contact_us`";
    // 從 contact_us 數據庫表中查詢所有記錄
    $result=$pdo->query($sql)->fetchAll();
    // 執行 SQL 查詢並將所有結果以陣列形式存儲在 $result 變數中
    
    // print_r($result);
    // header("location:email.php");