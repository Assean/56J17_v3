<?php session_start();?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunTech 社群網站 | 聯絡我們</title>
    <link rel="stylesheet" href="by/css/index.css">
    <link rel="stylesheet" href="by/css/bootstrap.css">
    <script src="by/js/jquery-3.7.1.min.js"></script>
</head>
<body>
  
<?php include_once "header.php";?>
<div id="main-content" class='container' style='height:800px;padding: 15px;'>
<h2 class="text-center">聯絡我們</h2>    
<form action="api/email_go.php" method="post">
  <div class="form-group">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email w -->
    <label for="exampleInputname1">name</label>
    <input type="name" class="form-control" name="name" id="name" aria-describedby="nameHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email_e" id="email_e">
  </div>
  <div class="form-group">
    <label for="exampleInputtext1">text</label>
    <input type="text" class="form-control" name="text" id="text">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<hr>
<table id="emailTable" border=1>
  <tr>
  <th>id</th>
  <th>name</th>
  <th>email_e</th>
  <th>text</th>
  <th>操作區</th>
</tr>
<?php include_once "api/message.php"; ?>
  <?php
  for($i=0;$i<count($result);$i++){
    // print_r($result[$i]);
    // echo "<br>";
  
?>
<tr>
  <td><?= $result[$i]["id"]?></td>
  <td><?= $result[$i]["name"]?></td>
  <td><?= $result[$i]["email_e"]?></td>
  <td><?= $result[$i]["text"]?></td>
  <td><a href="api/del.php"id=<?= $result[$i]["id"]?>>刪除</a></td>
</tr>
<?php } ?>
</table>
<div class="mt-5 text-center text-secondary mt-10%">
                       
                    </div>
</div>
<?php include_once "footer.php";?>
<script src="css/bootstrap.js"></script>
</body>
</html>
