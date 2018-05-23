<<<<<<< HEAD
<?php

session_start();
$seller=$_SESSION['phone'];
echo $seller;
$type=$_SESSION['product_type'];
echo "<br>".$type;
$_SESSION['product_name']=$_POST['product'];

echo "<br>";

$id=$seller.date("YmdHis");
echo $id;
$product_name=$_POST['product'];
echo "<br>".$product_name;
$quantity=$_POST['quantity'];
echo "<br>".$quantity;
$unit=$_POST['unit'];
echo "<br>".$unit;
$price=$_POST['price'];
echo "<br>".$price;


$conn = mysqli_connect("localhost","root","root","buy_sell");

if(mysqli_query($conn,"INSERT INTO `$type` (`id`, `seller`, `product_name`, `photo_1`, `photo_2`, `photo_3`, `photo_4`, `quantity`, `unit`, `price`, `number_of_requests`, `add_date`) VALUES ('$id', '$seller', '$product_name', '', '', '', '', '$quantity', '$unit', '$price', '0', CURRENT_TIMESTAMP)"))
{
  $_SESSION['product_id']=$id;
  header("location:upload_files.php");

}
else {
  $msg="Something went wrong";
  echo $msg;
  //header("location:sell_product.php?msg=".$msg);
}
?>
=======
<?php

session_start();
$seller=$_SESSION['phone'];
echo $seller;
$type=$_SESSION['product_type'];
echo "<br>".$type;
$_SESSION['product_name']=$_POST['product'];

echo "<br>";

$id=$seller.date("YmdHis");
echo $id;
$product_name=$_POST['product'];
echo "<br>".$product_name;
$quantity=$_POST['quantity'];
echo "<br>".$quantity;
$unit=$_POST['unit'];
echo "<br>".$unit;
$price=$_POST['price'];
echo "<br>".$price;


$conn = mysqli_connect("localhost","root","root","buy_sell");

if(mysqli_query($conn,"INSERT INTO `$type` (`id`, `seller`, `product_name`, `photo_1`, `photo_2`, `photo_3`, `photo_4`, `quantity`, `unit`, `price`, `number_of_requests`, `add_date`) VALUES ('$id', '$seller', '$product_name', '', '', '', '', '$quantity', '$unit', '$price', '0', CURRENT_TIMESTAMP)"))
{
  $_SESSION['product_id']=$id;
  header("location:upload_files.php");

}
else {
  $msg="Something went wrong";
  echo $msg;
  //header("location:sell_product.php?msg=".$msg);
}
?>
>>>>>>> 629f4003704f19be092a4faed21ab956e331ca8d
