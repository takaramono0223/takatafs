<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"      rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title></title>
  </head>

  <body>
    <div class="row pt-5">
      <!-- 좌측여백 -->
      <div class="col-1 bg-danger">
      </div>

      <!-- 본문 -->
      <div class="col-10 bg-light">
        <!-- 로고 -->
        <div class="row">
          <div class="col-2 bg-info">
          </div>
          <div class="col-8 bg-primary" style="position:relative; text-align:center; width:100%;">
            <img src="img/logo.jpg">
          </div>
          <div class="col-2 bg-info" style="position:relative; text-align:bottom;">
            <a href="index.php">HOME</a> <a href="login.php">LOGIN</a> <a href="register.php">JOIN US</a>
          </div>
        </div>
        <hr>
        <!-- 메뉴바 -->
        <nav class="nav nav-pills nav-fill">
          <a class="nav-item nav-link disabled" href="#">낚시대</a>
          <a class="nav-item nav-link disabled" href="#">릴</a>
          <a class="nav-item nav-link disabled" href="#">바늘</a>
          <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">줄</a>
        </nav>
        <hr>
        <!-- 슬라이드배너 -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/banner1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/banner2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/banner3.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <br>
        <!-- 베스트아이템 -->
        <button id="item1">BEST ITEM</button><br>
        <hr>
        <br>
        <div class="row">
          <div class="col-4 bg-danger">
            사진1
          </div>
          <div class="col-4 bg-success">
            사진2
          </div>
          <div class="col-4 bg-primary">
            사진3
          </div>
        </div>
        <br>

        <!-- 신규아이템 -->
        <button id="item2">NEW ITEM</button><br>
        <hr>
        <br>
        <div class="row">
          <div class="col-4 bg-danger">
            사진1
          </div>
          <div class="col-4 bg-success">
            사진2
          </div>
          <div class="col-4 bg-primary">
            사진3
          </div>
        </div>
        <br>

      <!-- 우측여백 -->
      <div class="col-1 bg-warning">
      </div>
    </div>
    <br>

    <!-- 하단고정 -->
    <div id="footer">
      <div class="row bg-secondary">
        <div class="col-3">
          <img src="img/logo2.jpg"><br>
        </div>
        <div class="col-9">
          다나까피싱<br>
          Tel : 03-123-4567<br>
          월~금 09:00~20:00<br>
        </div>
        Copyright © tanakafishing. All rights reserved.
      </div>
  </body>
</html>
