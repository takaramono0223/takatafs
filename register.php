<!-- <?php
	include "/db.php";
?> -->
<!DOCTYPE html>
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
          <img src="img/logo1.jpg">
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
	<form method="post" action="member_ok.php">
		<h1>Register</h1><hr></hr>
					<table>
						<tr>
							<td>이름</td>
							<td><input type="text" size="35" name="name" placeholder="이름"></td>
						</tr><br></br>

						<tr>
							<td>패스워드</td>
							<td><input type="password" size="35" name="userpw" placeholder="패스워드"></td>
						</tr><br><br>
						<tr>
							<td>아이디</td>
							<td><input type="text" size="35" name="userid" placeholder="아이디"></td>
						</tr><br></br>
            <tr>
              <td>우편번호</td>
              <td><input type="text" size="13" name="zipcode" placeholder=" - 제외"></td>
            </tr><br></br>
						<tr>
							<td>주소</td>
							<td><input type="text" size="35" name="adress" placeholder="주소"></td>
						</tr><br></br>
						<tr>
							<td>이메일</td>
							<td><input type="text" size="35" name="email"></td>
						</tr><br></br>
					</table>

				<input type="submit"  class="btn btn-primary" value="Register" >


	</form>
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
