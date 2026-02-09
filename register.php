<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunTech 社群網站-註冊</title>
    <link rel="stylesheet" href="by/css/index.css">
    <link rel="stylesheet" href="by/css/bootstrap.css">
    <script src="by/js/jquery-3.7.1.min.js"></script>
</head>
<body>
<?php include_once "header.php";?>

<div id="main-content" class='container' style='height:800px'>
<h2 class="text-center">註冊會員</h2>
<form action="api/add_users.php" method="post">
<div class="form-group">
    <label for="">帳號：</label>
    <input class="form-control" type="text" name="account" id="account">
</div>
<div class="form-group">
    <label for="">密碼：</label>
    <input class="form-control" type="text" name="password" id="password">
</div>
<div class="form-group">
    <label for="">姓名：</label>
    <input class="form-control" type="text" name="name" id="name">
</div>
<div class="form-group">
    <label for="">電子郵件：</label>
    <input class="form-control" type="text" name="email" id="email">
</div>
<div class="form-group">
    <label for="">地址：</label>
    <input class="form-control" type="text" name="address" id="address">
</div>
<!-- div>input:submit+input:reset -->
 <div>
    <input class="btn btn-success" type="submit" value="登入">
    <input class="btn btn-danger" type="reset" value="重置">
</div>

</form>
</div>

<?php include_once "footer.php";?>
<script src="css/bootstrap.js"></script>
</body>
</html>