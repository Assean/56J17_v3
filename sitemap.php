<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunTech 社群網站 | 網站地圖</title>
    <link rel="stylesheet" href="by/css/index.css">
    <link rel="stylesheet" href="by/css/bootstrap.css">
    <script src="by/js/jquery-3.7.1.min.js"></script>
</head>
<body>
<?php include_once "header.php";?>

<div id="main-content" class='container text-center' style='height:800px'>
    <div class="sitemap_div">
        <a id="index_map" href="index.php">首頁</a>
    </div>
    <div class="sitemap_div">
        <a id="aboutus_map" href="aboutus.php">關於我們</a>
    </div>
    <div class="sitemap_div">
        <a id="games_map" href="games.php">遊戲平台</a>
    </div>
    <div class="sitemap_div">
        <a id="email_map" href="email.php">聯絡我們</a>
    </div>
    <div class="sitemap_div">
        <a id="sitemap_map" href="sitemap.php">網站地圖</a>
    </div>
    <div class="sitemap_div">
        <a id="login_map" href="login.php">登入</a>
    </div>
    <div class="sitemap_div">
        <a id="register_map" href="register.php">註冊</a>
    </div>
</div>
<?php include_once "footer.php";?>
<script src="css/bootstrap.js"></script>
</body>
</html>