<?php

session_start();

$type=$_SESSION['product_type'];
//echo $type;
$name=$_SESSION['product_name'];
$product_id= $_SESSION['product_id'];
//echo "<br>".$product_id;
$upload=0;
//echo "<br>".$_FILES['file_1']['name'];


$newFileName1 = uniqid($type.'_'.$name.'_', true) . '.' . strtolower(pathinfo($_FILES['file_1']['name'], PATHINFO_EXTENSION));
//echo "<br>".$newFileName1;

if(move_uploaded_file($_FILES['file_1']['tmp_name'], 'image/market/'.$type.'/'.$newFileName1))
{
  $photo_1='image/market/'.$type.'/'.$newFileName1;
  $upload=$upload+1;
}
else if($upload>0) {
  //echo "first image upload error";
  $upload=$upload-1;
}

$newFileName2 = uniqid($type.'_'.$name.'_', true) . '.' . strtolower(pathinfo($_FILES['file_2']['name'], PATHINFO_EXTENSION));
if(move_uploaded_file($_FILES['file_2']['tmp_name'], 'image/market/'.$type.'/'.$newFileName2))
{
  $photo_2='image/market/'.$type.'/'.$newFileName2;
  $upload=$upload+1;
}
else if ($upload>0) {
  //echo "second image upload error";
  $upload=$upload-1;
}

$newFileName3 = uniqid($type.'_'.$name.'_', true) . '.' . strtolower(pathinfo($_FILES['file_3']['name'], PATHINFO_EXTENSION));
if(move_uploaded_file($_FILES['file_3']['tmp_name'], 'image/market/'.$type.'/'.$newFileName3))
{
  $photo_3='image/market/'.$type.'/'.$newFileName3;
  $upload=$upload+1;
}
else if ($upload>0) {
  //echo "third image upload error";
  $upload=$upload-1;
}

$newFileName4 = uniqid($type.'_'.$name.'_', true) . '.' . strtolower(pathinfo($_FILES['file_4']['name'], PATHINFO_EXTENSION));
if(move_uploaded_file($_FILES['file_4']['tmp_name'], 'image/market/'.$type.'/'.$newFileName4))
{
  $photo_4='image/market/'.$type.'/'.$newFileName4;
  $upload=$upload+1;
}
else if ($upload>0) {
  //echo "fourth image upload error";
  $upload=$upload-1;
}

//echo "<br>".$upload;


if($upload==4)
{
  require_once 'connect.php';


 if(mysqli_query($conn,"UPDATE $type SET photo_1='$photo_1', photo_2='$photo_2',photo_3='$photo_3',photo_4='$photo_4' WHERE id = '$product_id'"))
 {
   echo "buy_sell_status.php";

   unset($_SESSION['product_type']);
   unset($_SESSION['product_name']);
   unset($_SESSION['product_id']);
 /*
?>
<script>
loadPage('sell_index.php');
</script>
<?php
//header("location:sell_index.php");

*/
/*
   echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
*/

 }
 else {
   echo "Database entry failed";
 }

}
else {
  echo "File Upload Failed";
}

?>
