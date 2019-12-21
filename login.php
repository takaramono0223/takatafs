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
          <div class="col-8 bg-primary">
            <a href="index.php"><img src="img/logo1.jpg" >
            <!-- 로고 누르면 인텍스로 돌아가기 -->
          </div>
          <div class="col-2 bg-info">
          <a href="index.php">HOME</a> <a href="login.php">LOGIN</a> <a href="#">JOIN US</a>
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


        <div class="row">
          <div class="col-sm-4">
            <div class="card-group">
              <div class="card-body">
                <h4 class="card-title">로그인하기</h4>
                <div class="form-group">
                  <small id="IDHelp" class="form-text text-muted">가입하신 아이디와 비밀번호를 입력해주세요.</small>
                  <label for="IDInPut"></label>
                  <input type="text" class="form-control col-md-8" id="IDInPut" placeholder="아이디">
                  <label for="PWInPut"></label>
                  <input type="password" class="form-control col-md-8" id="PWInPut" placeholder="비밀번호">
                  <small id="PWHelp" class="text-muted">비밀번호는 최대 20자까지 가능</small>
                 </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="check1">아이디 저장</label>
                </div>
                <a href="#" class="btn btn-primary btn-lg col-md-8">로그인</a>
              </div>
            </div>
          </div>


          <div class="col-sm-4">
            <div class="card-group">
              <div class="card-body">
                <h4 class="card-title">회원가입하기</h4>
                <small id="PWHelp" class="text-muted">회원가입하시고 편리하게 이용하세요!</small>
                <br><br><a href="#" class="btn btn-primary btn-lg col-md-8">회원가입하러가기</a>
              </div>
            </div>
          </div>
        </div>




</html>
