<?php
 $host = 'localhost';
 $user = 'root';
 $pw = '';
 $dbName = 'register';
 $mysqli = new mysqli($host, $user, $pw, $dbName);

 $id=$_POST['userid'];
 $password=md5($_POST['userpw']);
 $name=$_POST['name'];
 $address=$_POST['address'];
 $zipcode=$_POST['zipcode'];
 $tel=$_POST['tel'];
 $email=$_POST['email'];

 $sql = "insert into member (id, pw, name, address, zipcode, tel, email)";
 $sql = $sql. " values('$id','$password','$name','$address','$zipcode','$tel','$email')";

 echo $sql;
 if($mysqli->query($sql)){
  echo 'success inserting';
 }else{
  echo 'fail to insert sql';
 }
?>
