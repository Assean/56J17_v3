<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunTech 社群網站 | 關於我們</title>
    <script src="by/js/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="by/css/index.css">
    <link rel="stylesheet" href="by/css/bootstrap.css">
    <script src="by/js/bootstrap.js"></script>
    <link rel="stylesheet" href="by/css/about.css">
</head>

<body>

    <?php include_once "header.php";?>
    <div id="main-content" class='container text-center pt-3' style='height:800px'>
        <h2>AboutUS - 關於我們</h2>
        <hr>
        <!-- https://getbootstrap.com/docs/4.5/components/card/ -->
<div id="carouselEx" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselEx" data-slide-to="0" class="active"></li>
    <li data-target="#carouselEx" data-slide-to="1"></li>
    <li data-target="#carouselEx" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/slide-01.png" class="d-block w-100" style="height: 450px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide</h5>
        <p>Description text.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/slide-02.png" class="d-block w-100" style="height: 450px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide</h5>
        <p>Description text.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/slide-03.png" class="d-block w-100" style="height: 450px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide</h5>
        <p>Description text.</p>
      </div>
    </div>
  </div>

  <a class="carousel-control-prev" href="#carouselEx" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#carouselEx" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
    <div class="mb-15">
        <p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    查看更多
  </a>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    查看更少
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  </div>
</div>
    </div>
    </div>
    </div>
    </div>

    <?php include_once "footer.php";?>
    <script src="css/bootstrap.js"></script>
</body>
    <script>
        $(".collapse_btn1").click((event) => {
            console.log($("#collapse_btn1").text())
            if($("#collapse_btn1").text()=="查看更少"){
                $("#collapse_btn1").text("查看更多")
            }else{
                $("#collapse_btn1").text("查看更少")
            }
        })
    </script>
</html>