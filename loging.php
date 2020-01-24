<?php
//MySQL연결
$db = new mysqli('localhost', 'root', '');
$db->query("set names UTF8");



session_start();

$userid=$_POST['userid'];
$userpw=$_POST['userpw'];

$sql = "SELECT * FROM user_info WHERE userid = '{$userid}' AND userpw = md5('{$userpw}') ";
$result = mysqli_query($db,$sql);
$num = mysqli_num_rows($result);


if($num>0){ // 아이디와 패스워드가 일치하는 데이터가 검색된경우
  // user_info테이블에서 입력받은 아이디와 일치한 데이터가 있는지 검색.
  // user_info테이블 = 접속해 있는 계정을 저장하는 테이블

  $sql = "SELECT*FROM user_info WHERE $userid = '{$userid}'";
  $result = mysqli_query($sql);
  $num = mysqli_num_rows($result);

  if($num>0){ //user_info테이블에 데이터가 존재 = 이미 로그인된 사용자
    echo"<script> alert('이미 로그인 한 사용자입니다. ');</script>";
  }else{
//로그인 아직 안한 사용자, 이제 로그인됨.
//user_info테이블에 사용자 정보 입력(insert)

$sess_id = session_id();
$sql="INSERT INTO user_info VALUE('$userid', '$sess_id')";
//아이디, 세션아이디 값을 테이블에 저장
// 다음 로그인시 해당테이블에 더이터 존재유무를 통해 로그인중인지 아닌지를 판단.
$ret=mysqli_query($sql);

$_SESSION[userid]=$userid;
$_SESSION[loginornot]=1;
echo "<script> alert('로그인 되었습니다.');</script>";

  }
}else {// 테이블에 입력받은 아이디와 패스워드가 일치하지않음

echo "<script> alert('아이디 또는 패스워드가 올바르지 않습니다.');</script>";

}



?>
