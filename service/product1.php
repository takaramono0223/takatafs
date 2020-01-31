<?php
$id = "root";
$password = "";
$db = "testdb";
$url = "localhost";

$conn = new mysqli($url, $id, $password, $db);
$conn->query("set names utf8");
$sql = "select * from detail where main_flag = '1'";

$result = $conn->query($sql);


echo '<div class="row mx-auto">';

foreach ($result as $key => $value) {

  echo '<div class="card col-6 col-md-4 text-center">';
  echo "<a href='detail.php?no={$value['no']}'><img src='{$value['image']}' class='card-img-top' alt='...'></a>";
  echo "<div class='card-body'>";
  echo "<span style='font-size:14px;color:#57606f;'><p class='card-text'>{$value['products_name']}</p></span>";
  echo "<span style='font-size:12px;color:#999999;text-decoration:line-through;'><p class='card-text'>{$value['price']}원</p></span>";
  echo "<span style='font-size:13px;color:#333333;font-weight:bold;'><p class='card-text'>{$value['sale_price']}원</p></span>";
  echo '</div>';
  echo '</div>';
}
echo '</div>';

?>
