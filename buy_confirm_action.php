<?php
if(isset($_GET['id']))
{



  session_start();
  $product_type=$_SESSION['product_type'];
  $product_id=$_GET['id'];
  require_once 'connect.php';
  $buyer=$_SESSION['phone'];

  $data=mysqli_query($conn,"SELECT * FROM $product_type WHERE id='$product_id'") or die(mysqli_error($conn));
  $data1=mysqli_fetch_array($data);
  $i=$data1['number_of_requests']+1;
  $upd=mysqli_query($conn,"UPDATE $product_type SET number_of_requests= $i WHERE id='$product_id'") or die(mysqli_error($conn));
  $upd1=mysqli_query($conn,"INSERT INTO `buy_requests` (`id`, `product_id`, `buyer`, `request_date`) VALUES (NULL, '$product_id', '$buyer', CURRENT_TIMESTAMP)") or die(mysqli_error($conn));

  unset($_SESSION['product_type']);
  
      echo "buy_sell_status.php";


}

?>
