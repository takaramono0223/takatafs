<?php
//MySQL연결
$conn = new mysqli('localhost', 'root', '', 'testdb');
$conn->query("set names UTF8");

session_start();

$id=$_POST['userid'];
$pw=$_POST['userpw'];

$sql = "SELECT * FROM member WHERE id = '{$id}' AND pw = PASSWORD('{$pw}')";
                              // db      화면

$result = $conn->query($sql);
$num = mysqli_fetch_array($result);


if($num>0){ // 아이디와 패스워드가 일치하는 데이터가 검색된경우
  // user_info테이블에서 입력받은 아이디와 일치한 데이터가 있는지 검색.
  // user_info테이블 = 접속해 있는 계정을 저장하는 테이블
echo "<script> alert('로그인 되었습니다.');</script>";
echo "<script> location.href='index.php';</script>";
  }else{
// 테이블에 입력받은 아이디와 패스워드가 일치하지않음
    echo "<script> alert('아이디 또는 패스워드가 올바르지 않습니다.');</script>";
   echo "<script> location.href='login.php';</script>";

}

?>
