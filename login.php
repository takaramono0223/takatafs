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

                <div class="row">
                <!-- 로그인안에 좌측여백 -->
                  <div class="col-2"></div>
                  <div class="col-sm-4">
                    <div class="card-group">
            <div class="card-body" method="POST" action="loging.php">
              <!-- // POST방식으로 loging.php로 입력받은 데이터를 전송하는 태그 -->
              
                        <h4>로그인하기</h4>

                        <form class="" action="loging.php" method="post">

                        <div class="form-group">
                          <small id="IDHelp" class="form-text text-muted">가입하신 아이디와 비밀번호를 입력해주세요.</small>
                          <label for="IDInPut"></label>
                          <input type="text" class="form-control col-md-8" name="userid" id="IDInPut" placeholder="아이디">
                          <label for="PWInPut"></label>
                          <input type="password" class="form-control col-md-8" name="userpw" id="PWInPut" placeholder="비밀번호">
                          <small id="PWHelp" class="text-muted">비밀번호는 최대 20자까지 가능</small>
                         </div>

                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="check1">아이디 저장</label>
                        </div>

                        <input type="submit" class="btn btn-primary btn-lg col-md-8">
                      </div>
                    </div>
                  </div>
                </form>

                  <div class="col-sm-4">
                    <div class="card-group">
                      <div class="card-body">
                        <h4>회원가입하기</h4>
                        <small id="PWHelp" class="text-muted">회원가입하시고 편리하게 이용하세요!</small>
                        <br><br><a href="register.php" class="btn btn-primary btn-lg col-md-8">회원가입하러가기</a>
                      </div>
                    </div>
                  </div>
                  <!-- 로그인안에 우측여백 -->
                  <div class="col-2"></div>
                </div>
                <hr>


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
