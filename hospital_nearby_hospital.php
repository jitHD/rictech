<?php


?>


<head>
<title>Best Practices</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./css/village.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>






  </head>
  <body>
      <div class="col-12 t_center t_white heading" >
        <h1>RICTech</h1>
        <h4>Village Information and Communication Technology</h4>
        <!--What is RICTech -->

    </div>
    <div class="col-1"></div><div class="col-1 button t_center" onclick="goBack();"><h4><b>Back</b></h4></div><div class="col-3"></div><div class="col-2" ></div><div class="col-3"></div><div class="col-1 button t_center" onclick="loadPage('index.php')">
      <h4><b>Home</b></h4></div><div class="col-1"></div>

    <div class="col-6 t_center t_white">
      <br />

        Pin: <input type="text" name="pin_code" id="pin_code" onkeyup="loadhospital();">


	<div id="display_info" >

	</div>
    </div>
    <div class="col-6">
    </div>
  </body>
</html>
