<?php
?>


<head>
<title>RICTech</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./css/village.css">
<script src="./js/ajax.js" type="text/jscript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
  <body>
    <div onclick="launchIntoFullscreen(document.documentElement);" >
    <div class="topright" onclick="exitFullscreen();"><img id="close" src="image/close.png" /></div>
    <div id="page">
    <div class="12"  onclick="setPresent('index.php');loadPage('v_menu.php');">
      <div class="col-12 t_center t_white">
        <h1>RICTech</h1>
        <h4>Village Information and Communication Technology</h4>

      </div>

      <!--What is RICTech -->
        <div class="col-6 what">

          <h3 class="t_center">  What is RICTech?</h3>
          <p>RICTech is an ICT based Web-App for information dissemination at rural areas.</p>
          <p>Rural People have limited access to information due to low literacy. These low-literate individuals cannot gather information from different highly informacial
            websites by themselves as they are complex and alien for those who are new to information technology</p>
          <p> Therefore RICTech aims at simplifying the information gathering process for these low-literate community by sorting out the most necessary informations for them</p>
        </div>
        <!--How RICTech Functions -->
        <div class="col-6 how">

          <h3 class="t_center">  How RICTech Functions?</h3>
          <p>RICTech consists of Web browser, a Web Server and Database designed to collect information from reliable resource sites and provide them to the villagers in simple
            texts and images.
          </p>
          <p>&nbsp;&nbsp;<br>&nbsp;&nbsp;<br>&nbsp;&nbsp;<br>&nbsp;&nbsp;<br>&nbsp;&nbsp;</p>
        </div>
</div>
<div class="col-5"></div><div class="col-2 t_center button" onclick="setPresent('index.php');loadPage('v_menu.php');"><h4><b>Continue to Menu</b></h4></div><div class="col-5"></div>
</div>
</div>


</div>

  </body>
</html>
