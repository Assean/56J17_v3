<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunTech 社群網站 | 個人檔案</title>
    <link rel="stylesheet" href="by/css/index.css">
    <link rel="stylesheet" href="by/css/bootstrap.css">
    <script src="by/js/jquery-3.7.1.min.js"></script>
</head>
<body>
<?php include_once "header.php";?>

<div id="main-content" class='container' style='height:800px'>
    <?php
    $dsn = "mysql:host=localhost;charset=utf8;dbname=funtech";
    $pdo = new PDO($dsn,'root','');
    $sql = "SELECT * FROM `users` where `account` = '{$_SESSION['user']}'";
    
    $result = $pdo->query($sql)->fetchAll();
    // print_r($result);
    // 已拿取資料
?>
    <div class="card mt-5">
        <div class="card-body">
            <h2>
            <?php 
                echo $result[0]["account"];
            ?>
            </h2>
            <p>
                使用者名稱：
            <?php 
                echo $result[0]["name"];
            ?>
            </p>
            <p>
                使用者郵件：
            <?php 
                echo $result[0]["email"];
            ?>
            </p>
            <p>
                使用者地址：
            <?php 
                echo $result[0]["address"];
            ?>
            <p>
                <a href="api/profile_edit.php" class="btn-warning">
                    <button class="btn btn-warning">編輯使用者</button>
                </a>
            </p>
            </p>
        </div>
    </div>

</div>

</div>
<?php include_once "footer.php";?>
<script src="css/bootstrap.js"></script>
</body>
</html>