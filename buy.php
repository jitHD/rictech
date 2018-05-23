<?php
/*
session_start();
if(!isset($_SESSION['user']))
{
  header("Location: design_login.php?ori_log=buy_sell.php");
  die();
}else{
*/
?>

<head>
<title>Buy</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./css/village.css">

  </head>
  <body>

      <div class="col-1"></div><div class="col-1 button t_center" onclick="goBack();"><h4><b>Back</b></h4></div><div class="col-3"></div><div class="col-2" ></div><div class="col-3"></div><div class="col-1 button t_center" onclick="loadPage('index.php')">
      <h4><b>Home</b></h4></div><div class="col-1"></div>
      <div class="col-6 red t_center t_white" onclick="setPresent('buy.php');loadPage('');">
        <h2></h2>
        <!--<img id="emergency" src="image/#.png">-->

      </div>

      <div class="col-6 orange t_center t_white" onclick="setPresent('buy.php');loadPage('')">
          <h2></h2>
        <!--  <img id="ambulance" src="image/#.png"> -->
      </div>



      </div>
  </body>
</html>

<?php // } ?>
