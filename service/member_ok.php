<?php
 $host = 'localhost';
 $user = 'root';
 $pw = '';
 $dbName = 'testdb';
 $mysqli = new mysqli($host, $user, $pw, $dbName);

 $id=$_POST['userid'];
 $password=$_POST['userpw'];
 $name=$_POST['name'];
 $address=$_POST['address'];
 $zipcode=$_POST['zipcode'];
 $tel=$_POST['tel'];
 $email=$_POST['email'];

 $sql = "insert into member (id, pw, name, address, zipcode, tel, email)";
 $sql = $sql. " values('$id',password('$password'),'$name','$address','$zipcode','$tel','$email')";

 // echo $sql;
 if($mysqli->query($sql)){
  echo 'success inserting';
  echo '<script>alert("회원가입이 완료되었습니다.")</script>';
  header( "refresh:1.5; url=../index.php" );
 }else{
   echo $sql;
  echo 'fail to insert sql';
  echo '<script>alert("회원가입이 실패했습니다.")</script>';
  header( "refresh:2; url=../login.php" );
 }
?>
