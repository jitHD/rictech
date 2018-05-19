
<?php

session_start();

if(!isset($_SESSION['user']))
{
  header("Location: design_login.php?ori_log=index.php");
  die();
}else{

?>
