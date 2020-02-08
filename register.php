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
        <section id="logo">
          <?php include 'template/logo.php'; ?>
        </section>

        <!-- 회원가입  -->
        <h1>Register</h1><hr>
         <div class="row ">
           <div class="col-2">
           </div>
           <div class="col-8">
              <form method="post" class="container" action="service/member_ok.php" onsubmit="return inputcheck()" >
                <div class="container">
                  NAME:<input class="form-control w-60" type="text" size="35" name="name" placeholder="2~5자 한글영어만 입력" required>
                  ID:
                  <input class="form-control w-60" type="text" size="35" id='id' name="userid"  placeholder="4~10자 영소문자와 숫자로만 입력" required>
                  PASSWORD:<br>
                  <input class="form-control w-60" type="password" size="35" id='password' name="userpw" placeholder="8~12자 영대소문자와 숫자, 특수문자로만 입력" required>
                  zipcode:<br>
                  <input class="form-control w-60" type="text" size="13" name="zipcode" placeholder=" - 제외" required>
                  address:<br>
                  <input class="form-control w-60" type="text" size="35" name="address" placeholder="주소" required>
                  TEL:<br>
                  <input class="form-control w-60" type="text" size="35" name="tel" placeholder="- 제외" required>
                  E-mail:<br>
                  <input class="form-control w-60" type="text" size="35" name="email" required>
                  <br>

                  <div class="col-12" style= "text-align:center;">
                    <input type="submit"  class="btn btn-primary  btn-lg " value="Register" >
                  </div>

                  </div>
                </form>
              </div>
              <div id="msg"></div>
            <br><br>
          <div class="col-2">
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
