
<?php

require_once '../connect.php';
session_start();
$seller=$_SESSION['phone'];
echo $seller;
$type=$_SESSION['product_type'];
// echo "<br>".$type;
$_SESSION['product_name']=$_POST['product'];

// echo "<br>";
$product_name=$_POST['product'];

$id=$seller.$product_name.date("YmdHis");
// echo $id;

// echo "<br>".$product_name;
$quantity=$_POST['quantity'];
// echo "<br>".$quantity;
$unit=$_POST['unit'];
// echo "<br>".$unit;
$price=$_POST['price'];
// echo "<br>".$price;

//$conn = mysqli_connect("localhost","root","root","buy_sell");

if(mysqli_query($conn,"INSERT INTO `$type` (id, seller, product_name, photo_1, photo_2, photo_3, photo_4, quantity, unit, price, number_of_requests, add_date) VALUES ('$id', '$seller', '$product_name', '', '', '', '', $quantity, '$unit', $price, 0, CURRENT_TIMESTAMP)"))
{
  $_SESSION['product_id']=$id;
?>
<script>
loadPage('./upload_files.php');
</script>
<?php
  //header("location:upload_files.php");

}
else {
  $msg="Something went wrong";
  echo $msg;
  //header("location:sell_product.php?msg=".$msg);
}
?>
