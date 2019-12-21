<!-- <?php
	include "/db.php";
?> -->
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">

  <link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAB3/wAAAA/wAK3/IA/wAeAAAAOAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAARERERAAAARFEREREERABERQ0Q0EREAERJEREQhEQAiIiREQiIiAAIiJCJCIiAAACIkIkIiAAAAARERERAAAAAFEREVVVAAAFFVERFREQAAUVERFRERAABRUREVERAAAAVVURUQAAAAAiIiIiIgAAACIiIiAAAAAAAiIiIAAADgHwAAAAMAAAADAAAAAwAAAAMAAIAHAADADwAA4B8AAOAHAADAAwAAwAMAAMAHAADgHwAA4AcAAOA/AADwPwAA" rel="icon" type="image/x-icon" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
	<title></title>
</head>
<body>
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
</body>
</html>
