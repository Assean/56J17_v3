<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunTech 社群網站-登入</title>
    <link rel="stylesheet" href="by/css/index.css">
    <link rel="stylesheet" href="by/css/bootstrap.css">
    <script src="by/js/jquery-3.7.1.min.js"></script>
</head>
<body>
<?php include_once "header.php";?>
<!-- <div id="login-form"> -->
    <div id="main-content" class='container' style='height:800px'>
    <h2 class="text-center">會員登入</h2>
    <form action="api/check_account.php" method="post">
    <div class="form-group">
        <label for="">帳號：</label>
        <input class="form-control" type="text" name="account" id="account" required>
    </div>
    <div class="form-group">
        <label for="password">密碼：</label>
        <input class="form-control password" type="password" name="password" id="password" required>
    </div>
    <div id="verify">
        <img id="img" src="http://localhost/%E6%8A%80%E8%83%BD%E7%AB%B6%E8%B3%BD/56J17/test/gd_image.php?verify_number=321231">
    </div>
    <div class="form-group">
        <label for="ver_num">圖形驗證碼</label>
        <input class="form-control ver_num" type="text" name="ver_num" id="ver_num" required>
        <input type="hidden" name="ans" id="ans">
    </div>
    
    <!-- 產生驗證碼 -->
    <?php
        // session_start();
        //$code = rand(1000, 9999); // 產生 4 位隨機數字
        //$SESSION['check_code'] = $code; // 存入 Session 供PHP比對
     ?> 

<!-- <div class="form-group">
    <label for="">驗證碼：<span style="background:#eee; padding:2px 5px; font-weight:bold;"><?php echo $code; ?></span></label>
    <input class="form-control" type="text" name="v_code" id="v_code" placeholder="請輸入上方數字" required>
</div> -->

    <!-- div>input:submit+input:reset -->
    <div>
        <input class="btn btn-success" type="submit" value="登入">
        <input class="btn btn-danger" type="reset" value="重置">
    </div>

    </form>
    </div>
<!-- </div> -->
    
<?php include_once "footer.php";?>
<script src="css/bootstrap.js"></script>
<script>
    let verify = document.getElementById("verify");
    // let image = document.getElementById("img");
    let image = document.getElementById("img");
    let ans = document.getElementById("ans");
    let random = Math.random()*10000;
    let v_random = Math.floor(random);
    console.log(v_random);
    ans.value = v_random;
    image.src = "gd_image.php?verify_number=" + v_random;
    verify.appendChild(image);
</script>
</body>
</html>