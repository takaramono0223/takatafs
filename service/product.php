<?php
$id = "root";
$password = "";
$db = "test";
$url = "localhost";

$conn = new mysqli($url, $id, $password, $db);
$conn->query("set names utf8");
$sql = "select * from detail";

$result = $conn->query($sql);

echo '<div class="row mx-auto">';

foreach ($result as $key => $value) {

  echo '<div class="card col-6 col-md-4">';
  echo "<img src='{$value['image']}' class='card-img-top' alt='...'>";
  echo "<div class='card-body'>";
  echo "<h5 class='card-title'><a href='detail.php?no={$value['no']}'>{$value['products_name']}</a></h5>";
  echo "<p class='card-text'>가격:{$value['price']}<br>할인가:{$value['sale_price']}<br>{$value['reg_date']}</p>";
  echo '</div>';
  echo '</div>';
}
echo '</div>';

?>
