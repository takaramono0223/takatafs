<?php
$id = "root";
$password = "";
$db = "test";
$url = "localhost";

$no = $_GET['no'];

$conn = new mysqli($url, $id, $password, $db);
$conn->query("set names utf8");
$sql = "select * from detail where no = $no";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

?>


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
        <!-- 상품상세 -->
        <section class="container">
          <div class="row">
            <div class="col-7">
              <img src="<?php echo $row['image'] ?>" width="70%">
            </div>
            <div class="col-5">
              <br>
              <h2><?php echo $row['products_name'] ?></h2><br>
              price : <del><?php echo $row['price'] ?>원</del><br>
              sale price : <?php echo $row['sale_price'] ?>원<br><br>
              <select class="form-control col-5" name="">
               <option value="">수량을 선택하세요</option>
               <option value="">1</option>
               <option value="">2</option>
               <option value="">3</option>
               <option value="">4</option>
               <option value="">5</option>
              </select>
              <br><br>
              <a href="#" class="btn btn-info"> <i class="material-icons">check_box</i> 바로구매 </a>
              <a href="cart.php?products_name=<?= $row['products_name'] ?>&price=<?= $row['price'] ?>" class="btn btn-info"> <i class="material-icons">shopping_cart</i> 카트에담기 </a>
            </div>
          </div>
          <br><br>
          DETAIL PRODUCT 상품 상세설명

          <hr><br>
          <div class="col-12 text-center">
            <img src="<?php echo $row['products_detail'] ?>" width="85%">
          </div>
        </section>





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
