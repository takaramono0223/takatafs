
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
<h1>회원가입을 축하드립니다</h1> <br />
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
