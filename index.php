<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunTech 社群網站</title>
    <link rel="stylesheet" href="by/css/index.css">
    <link rel="stylesheet" href="by/css/bootstrap.css">
    <script src="by/js/jquery-3.7.1.min.js"></script>
</head>
<body>
<?php include_once "header.php";?>

<div id="main-content" class='container' style='height:800px;padding: 50px;'>
    <div class="jumbotron">
  <h1 class="display-4">Welcome!</h1>
  <p class="lead">Simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>Spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="register.php" role="button">立刻加入我們!</a>
</div>
<div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img class="aboutImg" src="./img/about_img1.jpeg" alt="">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
<?php include_once "footer.php";?>
<script src="css/bootstrap.js"></script>
</body>
</html>