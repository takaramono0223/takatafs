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
        <br>

        <!-- 회원가입  -->
	<form method="post" class="container" action="member_ok.php" onsubmit="return inputcheck()" >

		<h1>Register</h1><hr></hr>
   <div class="container"  text-align: center;>
      NAME:<input class="form-control w-50" type="text" size="35" name="name" placeholder="2~5자 한글만 입력" required>
      ID:
      <input class="form-control w-50" type="text" size="35" id='id' name="userid"  placeholder="4~10자 영소문자와 숫자로만 입력" required>
      PASSWORD:<br>
      <input class="form-control w-50" type="password" size="35" id='password' name="userpw" placeholder="8~12자 영대소문자와 숫자, 특수문자로만 입력" required>
      zipcode:<br>
      <input class="form-control w-50" type="text" size="13" name="zipcode" placeholder=" - 제외" required>
      address:<br>
      <input class="form-control w-50" type="text" size="35" name="address" placeholder="주소" required>
      TEL:<br>
      <input class="form-control w-50" type="text" size="35" name="tel" placeholder="- 제외" required>
      E-mail:<br>
      <input class="form-control w-50" type="text" size="35" name="email" required>
      <input type="submit"  class="btn btn-primary" value="Register" >
    </div>

    <div id="msg"></div>


	</form>
  <br><br>
  <!-- 하단고정 -->
  <div id="footer">
    <div class="row bg-light">
      <div class="col-10">
        상호명 : 다나까피싱 / 대표이사 : 임연식<br>
        주소 : 서울특별시 영등포구 가마산로 315 1층 / 사업자등록번호 : 108-13-74543<br>
        통신판매업신고 : 제 2015-서울영등포-1455호 / 대표전화 : 02-846-9895 / FAX : 070-7779-9895<br>
        개인정보책임자 : 임연식(dawoo63@hanmail.net)<br>
        Copyright © danakafishing. All rights reserved.
      </div>
      <div class="col-2">
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
