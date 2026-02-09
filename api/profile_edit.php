<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunTech 社群網站 | 個人檔案編輯使用者</title>
    <link rel="stylesheet" href="../by/css/index.css">
    <link rel="stylesheet" href="../by/css/bootstrap.css">
    <script src="../by/js/jquery-3.7.1.min.js"></script>
</head>
<body>
<?php include_once "../header.php";?>

<div id="main-content" class='container' style='height:800px'>
    <?php
    include_once("pdo.php");
    $sql = "SELECT * FROM `users` where `account` = '{$_SESSION['user']}'";
    
    $result = $pdo->query($sql)->fetchAll();
    // print_r($result);
    // 已拿取資料
?>
    <div class="card mt-5">
        <div class="card-body">
            <h2>編輯使用者</h2>
            <form action="useredit.php" method="post">
                <p>
                    <label for="password">密碼：</label>
                    <input type="text" name="password" id="password" value="<?=$result[0]["password"]?>">
                </p>
                <p>
                    <label for="name">姓名：</label>
                    <input type="text" name="name" id="name"  value="<?=$result[0]["name"]?>">
                </p>
                <p>
                    <label for="email">電子郵件：</label>
                    <input type="text" name="email" id="email" value="<?=$result[0]["email"]?>">
                </p>
                <p>
                    <label for="address">地址：</label>
                    <input type="text" name="address" id="address" value="<?=$result[0]["address"]?>">
                </p>
                <p>
                <input type="submit" value="儲存" class="btn btn-info">
            </p>
            </form>
     
    </div>

</div>

</div>
<?php include_once "footer.php";?>
<script src="css/bootstrap.js"></script>
</body>
</html>