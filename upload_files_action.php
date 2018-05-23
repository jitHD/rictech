<<<<<<< HEAD
<?php

session_start();

$type=$_SESSION['product_type'];
echo $type;
$name=$_SESSION['product_name'];
$conn = mysqli_connect("localhost","root","root","buy_sell");
$product_id= $_SESSION['product_id'];
echo $product_id;
$upload=0;


$newFileName1 = uniqid($type.'_'.$name.'_', true) . '.' . strtolower(pathinfo($_FILES['file_1']['name'], PATHINFO_EXTENSION));
if(move_uploaded_file($_FILES['file_1']['tmp_name'], 'image/market/'.$type.'/'.$newFileName1))
{
  $photo_1='image/market/'.$type.'/'.$newFileName1;
  $upload=$upload+1;
}
else if($upload>0) {
  $upload=$upload-1;
}

$newFileName2 = uniqid($type.'_'.$name.'_', true) . '.' . strtolower(pathinfo($_FILES['file_2']['name'], PATHINFO_EXTENSION));
if(move_uploaded_file($_FILES['file_2']['tmp_name'], 'image/market/'.$type.'/'.$newFileName2))
{
  $photo_2='image/market/'.$type.'/'.$newFileName2;
  $upload=$upload+1;
}
else if ($upload>0) {
  $upload=$upload-1;
}

$newFileName3 = uniqid($type.'_'.$name.'_', true) . '.' . strtolower(pathinfo($_FILES['file_3']['name'], PATHINFO_EXTENSION));
if(move_uploaded_file($_FILES['file_3']['tmp_name'], 'image/market/'.$type.'/'.$newFileName3))
{
  $photo_3='image/market/'.$type.'/'.$newFileName3;
  $upload=$upload+1;
}
else if ($upload>0) {
  $upload=$upload-1;
}

$newFileName4 = uniqid($type.'_'.$name.'_', true) . '.' . strtolower(pathinfo($_FILES['file_4']['name'], PATHINFO_EXTENSION));
if(move_uploaded_file($_FILES['file_4']['tmp_name'], 'image/market/'.$type.'/'.$newFileName4))
{
  $photo_4='image/market/'.$type.'/'.$newFileName4;
  $upload=$upload+1;
}
else if ($upload>0) {
  $upload=$upload-1;
}

if($upload==4)
{
 if(mysqli_query($conn,"UPDATE $type SET photo_1='$photo_1', photo_2='$photo_2',photo_3='$photo_3',photo_4='$photo_4' WHERE id = '$product_id'"))
 {
   echo "upload success";
   unset($_SESSION['product_type']);
   unset($_SESSION['product_name']);
   unset($_SESSION['product_id']);

header("location:sell_index.php");

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
=======
<?php

session_start();

$type=$_SESSION['product_type'];
echo $type;
$name=$_SESSION['product_name'];
$conn = mysqli_connect("localhost","root","root","buy_sell");
$product_id= $_SESSION['product_id'];
echo $product_id;
$upload=0;


$newFileName1 = uniqid($type.'_'.$name.'_', true) . '.' . strtolower(pathinfo($_FILES['file_1']['name'], PATHINFO_EXTENSION));
if(move_uploaded_file($_FILES['file_1']['tmp_name'], 'image/market/'.$type.'/'.$newFileName1))
{
  $photo_1='image/market/'.$type.'/'.$newFileName1;
  $upload=$upload+1;
}
else if($upload>0) {
  $upload=$upload-1;
}

$newFileName2 = uniqid($type.'_'.$name.'_', true) . '.' . strtolower(pathinfo($_FILES['file_2']['name'], PATHINFO_EXTENSION));
if(move_uploaded_file($_FILES['file_2']['tmp_name'], 'image/market/'.$type.'/'.$newFileName2))
{
  $photo_2='image/market/'.$type.'/'.$newFileName2;
  $upload=$upload+1;
}
else if ($upload>0) {
  $upload=$upload-1;
}

$newFileName3 = uniqid($type.'_'.$name.'_', true) . '.' . strtolower(pathinfo($_FILES['file_3']['name'], PATHINFO_EXTENSION));
if(move_uploaded_file($_FILES['file_3']['tmp_name'], 'image/market/'.$type.'/'.$newFileName3))
{
  $photo_3='image/market/'.$type.'/'.$newFileName3;
  $upload=$upload+1;
}
else if ($upload>0) {
  $upload=$upload-1;
}

$newFileName4 = uniqid($type.'_'.$name.'_', true) . '.' . strtolower(pathinfo($_FILES['file_4']['name'], PATHINFO_EXTENSION));
if(move_uploaded_file($_FILES['file_4']['tmp_name'], 'image/market/'.$type.'/'.$newFileName4))
{
  $photo_4='image/market/'.$type.'/'.$newFileName4;
  $upload=$upload+1;
}
else if ($upload>0) {
  $upload=$upload-1;
}

if($upload==4)
{
 if(mysqli_query($conn,"UPDATE $type SET photo_1='$photo_1', photo_2='$photo_2',photo_3='$photo_3',photo_4='$photo_4' WHERE id = '$product_id'"))
 {
   echo "upload success";
   unset($_SESSION['product_type']);
   unset($_SESSION['product_name']);
   unset($_SESSION['product_id']);

header("location:sell_index.php");

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
>>>>>>> 629f4003704f19be092a4faed21ab956e331ca8d
