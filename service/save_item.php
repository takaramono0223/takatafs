<?php
 $host = 'localhost';
 $user = 'root';
 $pw = '';
 $dbName = 'testdb';
 $mysqli = new mysqli($host, $user, $pw, $dbName);

 $products_name=$_POST['products_name'];
 $price=$_POST['price'];
 $sale_price=$_POST['sale_price'];
 $category=$_POST['category'];
 $image=$_POST['image'];
 $products_detail=$_POST['products_detail'];
 $main_flag=$_POST['main_flag'];

 $sql = "insert into detail (products_name, price, sale_price, category, image, products_detail, main_flag)";
 $sql = $sql. " values('$products_name','$price','$sale_price','$category','$image','$products_detail','$main_flag')";

 // echo $sql;
 if($mysqli->query($sql)){
  echo 'success inserting';
  echo '<script>alert("상품등록이 완료되었습니다.")</script>';
  header( "refresh:1.5; url=index.php" );
 }else{
   echo $sql;
  echo 'fail to insert sql';
  echo '<script>alert("상품등록에 실패했습니다.")</script>';
  header( "refresh:2; url=insert_item.php" );
 }
?>
