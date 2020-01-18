<?php
 $host = 'localhost';
 $user = 'root';
 $pw = '';
 $dbName = 'register';
 $mysqli = new mysqli($host, $user, $pw, $dbName);

 $id = $_POST['id'];
 $$password = $_POST['pw'];

 if($id == 'guest' && $pw =='guest'){
  header('location:index.php'); //바로이동
 }else {
   session_start();
   $_SESSION['msg'] = "아이디 또는 암호가 일치하지 않습니다.";
   header('location:login.php');
 }



?>
