<?php
    header("Content-Type: image/png"); //跟PHP說要輸出圖片
    $number = $_GET["verify_number"];
    $img = imagecreate(100,30); //建立一個100x30的畫布
    $gd_color = imagecolorallocate($img,200,200,200); //設定背景顏色
    $text_color = imagecolorallocate($img,255,255,255); //設定
    imagestring($img,5,0,0,$number,$text_color);
    imagepng($img); //輸出圖片