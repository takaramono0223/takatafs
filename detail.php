<?php
$id = "root";
$password = "";
$db = "testdb";
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
  <!-- 로고/상단메뉴 -->
      <section id="menu">
        <?php include 'template/menu.php'; ?>
      </section>

  <!-- 상품상세 -->
        <section class="container">
          <div class="row">
            <div class="col-7 text-center">
              <img src="<?php echo $row['image'] ?>" width="70%">
            </div>
            <div class="col-5">
              <br>
              <h5><?php echo $row['products_name'] ?></h5><hr><br>
              <div class="row">
                <div class="col-3">
                  판매가<br><br>
                  할인가<br><br>
                  수량<br><br>
                </div>
                <div class="col-9">
                  <del><?php echo $row['price'] ?>원</del><br><br>
                  <?php echo $row['sale_price'] ?>원<br><br>
                  <select class="form-control col-3" name="">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                  </select><br>
                </div>
              </div>
              <br><br>
              <div class="row">
                <div class="col-6">
                  <a href="login.php" class="btn btn-danger btn-block">BUY NOW</a>&nbsp;&nbsp;
                </div>
                <div class="col-6">
                  <a href="cart.php?products_name=<?= $row['products_name'] ?>&price=<?= $row['price'] ?>" class="btn btn-info btn-block">TO CART</a>
                </div>
              </div>
            </div>
          </div>
          <br><br>
          DETAIL PRODUCT

          <hr><br>
          <div class="col-12 text-center">
            <img src="<?php echo $row['products_detail'] ?>" width="85%">
          </div>
        </section>

<!-- 하단메뉴 -->
        <br>
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
