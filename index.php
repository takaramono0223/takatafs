
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
    <link rel="stylesheet" href="css/style.css">
    <title></title>
    <style>
      .card {
        border: 0px!important;
      }
      .card-title {
        font-size: 1rem;
      }
      @media screen and (min-width:600px) {
        .card-title {
          font-size: 1.5rem;
        }
      }
      .card-text {
        font-size: 0.8rem;
      }
      @media screen and (min-width:600px) {
        .card-text {
          font-size: 1rem;
        }
      }

    </style>
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
        <section id="meue">
          <?php include 'template/menu.php'; ?>
        </section>
  <!-- 슬라이드배너 -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <a href="detail.php?no=1"><img src="img/banner1.jpg" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
              <a href="detail.php?no=4"><img src="img/banner2.jpg" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
              <a href="detail.php?no=2"><img src="img/banner3.jpg" class="d-block w-100" alt="..."></a>
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
          <div class="col-12 text-center">
            <h5>BEST ITEM</h5>
          </div>
        </div>
        <br>
        <section id="product1">
          <?php include 'service/product1.php'; ?>
        </section>
        <br>
        <hr>

  <!-- 신규아이템 -->
        <div class="row">
          <div class="col-12 text-center">
            <h5>NEW ITEM</h5>
          </div>
        </div>
        <br>
        <section id="product2">
          <?php include 'service/product2.php'; ?>
        </section>
          <!-- <div class="row mx-auto">
            <div class="card col-6 col-md-4">
              <a href="http://edif.co.kr/bada_01/16762"><img src="img/new1.jpg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title">갤럭시 휘 골드 이소</h5>
                <p class="card-text">바다릴대</p>
              </div>
            </div>
            <div class="card col-6 col-md-4">
              <a href="http://edif.co.kr/minmul_01/16866"><img src="img/new2.jpg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title">체어맨 흑경 골드</h5>
                <p class="card-text">민물민대</p>
              </div>
            </div>
            <div class="card col-6 col-md-4">
              <a href="http://edif.co.kr/bada_01/1607"><img src="img/new3.jpg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title">죽검</h5>
                <p class="card-text">바다릴대</p>
              </div>
            </div>
          </div> -->
        <br>

<!-- 하단메뉴 -->
        <section id="products">
          <?php include 'template/footer.php'; ?>
        </section>
      </div>

<!-- 우측여백 -->
      <div class="col-2">
      </div>
    <br>
  </body>
</html>
