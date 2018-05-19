<?php


?>

<head>
<title>Officials' Directory</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./css/village.css">
<script src="./js/ajax.js" type="text/jscript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>

      <div class="col-1"></div><div class="col-1 button t_center" onclick="goBack();"><h4><b>Back</b></h4></div><div class="col-3"></div><div class="col-2" ></div><div class="col-3"></div><div class="col-1 button t_center" onclick="loadPage('index.php')">
      <h4><b>Home</b></h4></div><div class="col-1"></div>

      <div class="col-12 t_center t_white">
        <br />

        <table class="table-fill">
          <thead>
            <tr>
              <th class="text-left">Name<br><input type="text" name="name" id="name" onkeyup="loadofficial('name');"></th>
              <th class="text-left">Office<br><input type="text" name="ministry" id="ministry" onkeyup="loadofficial('office');"></th>
              <th class="text-left">Designation<br><input type="text" name="designation" id="designation" onkeyup="loadofficial('designation');"></th>
              <th class="text-left">Area<br><input type="text" name="sector" id="sector" onkeyup="loadofficial('area');"></th>
              <th class="text-left">Details</th>
            </tr>
          </thead>
          <tbody class="table-hover" id="official_info">

          </tbody>
        </table>

  </body>
</html>
