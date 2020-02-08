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

                <div class="row">
                <!-- 로그인안에 좌측여백 -->
                  <div class="col-2"></div>

                  <div class="col-sm-4">
                    <div class="card-group">

                        <h4>로그인하기</h4>
                        <form class="" method="post" action="../service/loging.php">
                          <!-- // POST방식으로 loging.php로 입력받은 데이터를 전송하는 태그 -->
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
                        <div class="form-group form-save">
                        <input type="submit" value="로그인하기" id="login" class="btn btn-primary btn-lg " >
                            <label for="login" href="../service/loging.php" > </label>
                      </div>
                    </div>
                  </div>
                </form>

                  <hr>

                  <div class="col-sm-4">
                    <div class="card-group">
                      <div class="card-body">
                        <form class="" action="register.php" method="post">
                        <h4>회원가입하기</h4>
                        <div class="form-group">
                        <small class="text-muted">회원가입하시고 편리하게 이용하세요!</small>
                      </div>
                        <div class="joinsubmit">
                        <input type="submit" value="회원가입하기" id="joinHelp" class="btn btn-primary btn-lg " >
                      </div>
                      </div>
                    </div>
                  </div>

                </form>

                  <!-- 로그인안에 우측여백 -->
                  <div class="col-2"></div>
              </div>

        <!-- 하단메뉴 -->
                <section id="footer">
                  <?php include 'template/footer.php'; ?>
                </section>
              </div>

        <!-- 우측여백 -->
              <div class="col-2"></div>
              <br>
          </body>
        </html>
