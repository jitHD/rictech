<?php
session_start();
if(!isset($_SESSION['user']))
{
  header("Location: design_login.php?ori_log=v_menu.php");
  die();
}else{
?>
<html>
<head>
<title>RICTech Menu</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="./css/village.css" rel='stylesheet' type='text/css'>
<script src="../js/ajax.js" type="text/jscript"></script>

</head>
<body>

<div class="col-1"></div><div class="col-1 button t_center" onclick="goBack();"><h4><b>Back</b></h4></div><div class="col-3"></div><div class="col-2" ></div><div class="col-3"></div><div class="col-1 button t_center" onclick="loadPage('index.php');">
  <h4><b>Home</b></h4></div><div class="col-1"></div>

    <div class="col-4 grey_color" onclick="setPresent('v_menu.php');loadPage('public_office.php');">
      <img src="./image/parliament.png" alt="" style="width: 100%;object-fit: contain;">
    </div>
    <div class="col-4 grey_color" onclick="setPresent('v_menu.php');loadPage('weather.php');">
      <img  src="./image/weather.png" alt="" style="width: 100%; object-fit: contain;">
    </div>
    <div class="col-4 grey_color" onclick="setPresent('v_menu.php');loadPage('hospital_villager.php');">
      <img  src="./image/hospital.png" alt="" style="width: 100%; object-fit: contain;">
    </div>


    <div class="col-4 grey_color" onclick="setPresent('v_menu.php');loadPage('official_directory.php');">
      <img  src="./image/officials.png" alt="" style="width: 100%; object-fit: contain;"></div>

    <div class="col-4 grey_color" onclick="setPresent('v_menu.php');loadPage('disaster_helpline.php');">
      <img  src="./image/disaster.png" alt="" style="width: 100%; object-fit: contain;"></div>
    <div class="col-4 grey_color" onclick="setPresent('v_menu.php');loadPage('buy_sell.php');">
      <img  src="./image/market.png" alt="" style="width: 100%; object-fit: contain;"></div>



    <div class="col-4 grey_color" onclick="setPresent('v_menu.php');loadPage('agriculture.php');">
      <img  src="./image/agriculture.png" alt="" style="width: 100%; object-fit: contain;"></div>
    <div class="col-4 grey_color" onclick="setPresent('v_menu.php');loadPage('news_current_affairs.php');">
      <img  src="./image/news.png" alt="" style="width: 100%; object-fit: contain;"></div>
    <div class="col-4 grey_color" onclick="setPresent('v_menu.php');loadPage('skill_development.php');">
      <img  src="./image/skill.png" alt="" style="width: 100%; object-fit: contain;"></div>



</body>


</html>
<?php } ?>
