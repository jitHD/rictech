<?php

session_start();
if(!isset($_SESSION['user']))
{
  header("Location: design_login.php?ori_log=check_login.php");
  die();
}else{

include("conn.php");
   session_start();
   $error ="";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT ID FROM login_credentials WHERE ID = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);


      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {

         $_SESSION['login_user'] = $myusername;
         //echo "<script>loadPage('villager_login.php');</script>";
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }

 }
?>
