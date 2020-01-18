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
      <div class="col-2">
      </div>
      <!-- 본문 -->
      <div class="col-8">
        <!-- 우상단메뉴 -->
        <div class="col-12" style="position:relative; text-align:right;">
          <a href="index.php">HOME</a> <a href="login.php">LOGIN</a> <a href="register.php">JOIN</a>
        </div>
        <!-- 로고 -->
        <div class="col-12" style="position:relative; text-align:center; width:100%;">
          <a href="index.php"><img src="img/logo.jpg"></a>
        </div>
        <hr>
        <!-- 메뉴바 -->
        <nav class="nav nav-pills nav-fill">
          <a class="nav-item nav-link disabled" href="#">낚시대</a>
          <a class="nav-item nav-link disabled" href="#">릴</a>
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
        <hr>
        <!-- 베스트아이템 -->
        <div class="row">
          <div class"col-12">
          BEST ITEM
          </div>
        </div>
        <br>
          <div class="row mx-auto">
            <div class="card col-6 col-md-4" style="width: 18rem;">
              <img src="img/best1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">갤럭시 휘</h5>
                <p class="card-text">민물민대</p>
                <a href="detail.php" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <div class="card col-6 col-md-4" style="width: 18rem;">
              <img src="img/best2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">체어맨 석권</h5>
                <p class="card-text">민물민대</p>
                <a href="http://edif.co.kr/minmul_01/16866" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <div class="card col-6 col-md-4" style="width: 18rem;">
              <img src="img/best3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">COLINDEAN 콜린딘</h5>
                <p class="card-text">베스루어대</p>
                <a href="http://edif.co.kr/minmul_06/2347" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        <br>
        <hr>
        <!-- 신규아이템 -->
        <div class="row">
          <div class"col-12">
            NEW ITEM
          </div>
        </div>
        <br>
          <div class="row mx-auto">
            <div class="card col-6 col-md-4" style="width: 18rem;">
              <img src="img/new1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">갤럭시 휘 골드 이소</h5>
                <p class="card-text">바다릴대</p>
                <a href="http://edif.co.kr/bada_01/16762" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <div class="card col-6 col-md-4" style="width: 18rem;">
              <img src="img/new2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">체어맨 흑경 골드</h5>
                <p class="card-text">민물민대</p>
                <a href="http://edif.co.kr/minmul_01/16866" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <div class="card col-6 col-md-4" style="width: 18rem;">
              <img src="img/new3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">죽검</h5>
                <p class="card-text">바다릴대</p>
                <a href="http://edif.co.kr/bada_01/1607" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        <br>
        <!-- 하단메뉴 -->
        <div class="row bg-light p-3">
          <div class="col-8" style="text: seocondary;">
            상호명 : 다나까피싱<br>
            주소 : 서울특별시 영등포구 가마산로 315 1층<br>
            통신판매업신고 : 제 2015-서울영등포-1455호 / 사업자등록번호 : 108-13-74543<br>
            대표전화 : 02-846-9895 / FAX : 070-7779-9895<br>
            Copyright © danakafishing. All rights reserved.
          </div>
          <div class="col-4" style="position:relative; text-align:center; width:100%;">
            <img src="img/logo1.jpg">
          </div>
        </div>
      </div>
      <!-- 우측여백 -->
      <div class="col-2">
      </div>
    <br>
  </body>
</html>
