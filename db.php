<?php
$id= "root"; //아이디는
$password =""; // 암호
$db="register";  //데이터베이스명
$url="localhost";  //ip


// DB접속 처리 ㅎㅎ

$conn= new mysqli($url,$id,$password,$db);
//한글 표시를 위해 인코딩을 utf8로 변경
$conn->query("set names UTF8");
// user_info 테이블로부터 모든 데이터를 취득하는 명령

$sql="select*from user_info";
//DB실행 후 검색결과를 result에 넣는다
$result= $conn->query($sql);
//취득결과중 1개만 row에 넣는다
$row = $result->fetch_assoc();

// 취득결과에서 id를 출력

echo $row['id'];
echo "<br>";

echo $row['password'];
echo "<br>";

echo $row['name'];
echo "<br>";

echo $row['address'];
echo "<br>";
echo $row['zipcode'];
echo "<br>";
echo $row['email'];
echo "<br>";

echo $row['tel'];
echo "<br>";



echo $row[''];
echo "<br>";

echo "<img src='img/{$row['img']}'>";



 ?>
