<?php
session_start();

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
$conn = mysqli_connect("localhost","root","root","user_otp_login");

mysqli_query($conn,"UPDATE registered_users SET name='".$_POST['name']."', village='".$_POST['village']."', post_office='".$_POST['post_office']." ".$_POST['district']."', pin='".$_POST['pin']."' WHERE phone='".$_SESSION['phone']."'") or die(mysqli_error($conn));

if(isset($_SESSION['user_type']) && $_SESSION['user_type']==0){
  unset($_SESSION['user_type']);
  header("location:sell_index.php");
}
else {
  header("location:buy_index.php");
}



 ?>
