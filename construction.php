<?php
session_start();
if(!isset($_SESSION['user']))
{
  header("Location: design_login.php?ori_log=construction.php");
  die();
}else{
?>
<html>
<head>
</head>
<body>
<div style="alignment:center;">
  <img src="./image/under_construction.jpg" alt="">
  <div>

</body>
</html>

<?php } ?>
