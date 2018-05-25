<?php


?>

<head>
<title>Schemes</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./css/village.css">
<script src="./js/ajax.js" type="text/jscript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  </head>
  <body>
    <!--  <div class="col-12 t_center t_white heading" >
        <h1>RICTech</h1>
        <h4>Village Information and Communication Technology</h4>

      </div>
    -->

        <div class="col-1"></div>
        <div class="col-1 button t_center" onclick="goBack();"><h4><b>Back</b></h4></div>
        <div class="col-3"></div>
        <div class="col-2" ></div>
        <div class="col-3"></div>
        <div class="col-1 button t_center" onclick="loadPage('index.php')"><h4><b>Home</b></h4></div><div class="col-1"></div>
        <div class="col-12 t_center t_white">
          <br />



                      <table class="darkTable">
                        <thead>
                          <tr>
                            <th >Scheme <br><input type="text" name="scheme" id="scheme" onkeyup="loadscheme('scheme');"></th>
                            <th>Ministry <br><input type="text" name="ministry" id="ministry" onkeyup="loadscheme('ministry');"></th>
                            <th >Sector <br><input type="text" name="sector" id="sector" onkeyup="loadscheme('sector');"></th>
                            <th >Provision <br><input type="text" name="provision" id="provision" onkeyup="loadscheme('provision');"></th>
                          </tr>
                        </thead>
                        <tbody id="schemes_info">

                        </tbody>
                      </table>
                    </div>



  </body>
</html>
