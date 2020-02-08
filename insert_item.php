<!-- <?php
	include "/db.php";
?> -->
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
    <script src="js/signin.js"></script>

    <link rel="stylesheet" href="css/style.css">
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

        <!-- 상품등록하기  -->
        <h1>상품등록하기</h1><hr>
         <div class="row ">
           <div class="col-1">
           </div>
           <div class="col-10">
              <form method="post" action="service/save_item.php" onsubmit="return inputcheck()" >

                    <!-- 상품명 <input class="form-control col-5" type="text"  name="products_name"  required><br> -->

                    <div class="form-group row">
                      <label for="inputPassword" class="col-sm-2 col-form-label">상품명</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text"  name="products_name"  required>
                      </div>
                    </div>



                    <div class="form-group row">
                      <label for="inputPassword" class="col-sm-2 col-form-label">가격</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" size="35" name="price"   required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputPassword" class="col-sm-2 col-form-label">세일가격</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" size="35" name="sale_price"   >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputPassword" class="col-sm-2 col-form-label">카테고리</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" size="35" name="category"   required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputPassword" class="col-sm-2 col-form-label">메인번호</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" size="35" name="main_flag"   required>
                      </div>
                    </div>

                    <!-- <div><span class="col-3">가격</span><span class="col-7"><input class="form-control col-5" type="text" size="35" name="price"   required></span></div><br> -->
                    메인사진&nbsp;&nbsp;<input type="file" name="image" />  <br>
                    디테일사진&nbsp;&nbsp;<input type="file" name="products_detail" />  <br>
                    <br>

                  <div class="col-12" style= "text-align:center;">
                    <input type="submit"  class="btn btn-primary  btn-lg " value="상품등록" >
                  </div>


                </form>
              </div>
              <div id="msg"></div>
            <br><br>
          <div class="col-1">
          </div>
        </div>

  <!-- 하단고정 -->
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
