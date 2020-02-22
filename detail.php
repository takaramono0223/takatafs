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


  <script>
    function up() {
      var getsu = document.getElementById("su");
      document.getElementById("totalprice").innerHTML = (Number(getsu.value) + 1) * price.value;
    }

    function up1() {
      var getsu = document.getElementById("quantity");
      document.getElementById("total_price").innerHTML = (Number(quantity.value) + 1) * price.value;
    }





  </script>

  </head>

  <body>
    <div class="row pt-5">
<!-- 좌측여백 -->
      <div class="col-2">
      </div>

<!-- 본문 -->
      <div class="col-8">
        <!-- 로고 -->
            <section id="logo">
              <?php include 'template/logo.php'; ?>
            </section>
        <!-- 메뉴 -->
            <section id="menu">
              <?php include 'template/menu.php'; ?>
            </section>

  <!-- 상품상세 -->
        <section class="container">
          <div class="row">
            <div class="col-5 text-center">
              <img src="<?php echo $row['image'] ?>" width="80%">
            </div>
            <div class="col-2">
            </div>
            <div class="col-5">
              <br>
              <span style='font-size:16px;color:#57606f;'><h5><?php echo $row['products_name'] ?></h5></span><hr><br>
              <div class="row">
                <div class="col-3">
                  <span style="font-size:15px;color:#999999;text-decoration:line-through;">판매가</span><br><br>
                  <span style="font-size:15px;color:#333333;font-weight:bold;">할인가</span><br><br>
                </div>
                <div class="col-9">
                  <span style='font-size:15px;color:#999999;text-decoration:line-through;'><?php echo $row['price'] ?>원</span><br><br>
                  <span style='font-size:15px;color:#333333;font-weight:bold;'><?php echo $row['sale_price'] ?>원</span><br><br>
                  <input type="hidden" id="price" value="<?php echo $row['sale_price'] ?>">
                </div>
              </div>
              <hr>
              <span style="font-size:12px;color:#d63031;font-weight:bold;">수량을 선택해주세요! (최소선택수량1개)</span><br>
              <div class="form-group row">
              <input type="text" class="form-control col-1" id="su" value="1"> <a id="up" onclick="up()" class="btn btn-info">↑</a>
              <div id="totalprice"></div>
            </div>
            <br>


            <table border="1" summary>
                <caption>상품목록</caption>
                  <colgroup>
                    <col style="width:500px;">
                    <col style="width:50px;">
                    <col style="width:10px;">
                  </colgroup>
                  <thead>
                    <tr>
                      <th scope="col">상품명</th>
                      <th scope="col">상품수</th>
                      <th scope="col">가격</th>
                    </tr>
                  </thead>
                  <tbody class>
                    <tr>
                      <td>상품명</td>
                      <td>
                        <span class="quantity">
                          <input id="quantity" name="" value="1" type="text">
                          <a id="up1" onclick="up()"><img src="img/btn_count_up.gif"></a>
                          <a id="down" onclick="down()"><img src="img/btn_count_down.gif"></a>
                       </span>
                     </td>
                     <td class="right">
                       <span class="quantity_price">
                         <div id="total_price"></div>
                         <input type="hidden" name="option_box_price" class="option_box_price" value="price" item_code="">
                       </span>
                     </td>
                  </tr>
                </tbody>
              </table>






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
        <section id="products">
          <?php include 'template/footer.php'; ?>
        </section>
      </div>

<!-- 우측여백 -->
      <div class="col-2">
      </div>
    <br>

    <script>
      var getsu = document.getElementById("su");
      var price = document.getElementById("price");
      document.getElementById("totalprice").innerHTML = getsu.value * price.value;


      var getsu = document.getElementById("quantity");
      var price = document.getElementById("quantity_price");
      document.getElementById("total_price").innerHTML = getsu.value * price.value;



    </script>

  </body>
</html>
