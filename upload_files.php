<html>
<head>
</head>
<body>

  <div class="col-1 empty"></div><div class="col-1 button t_center" onclick="goBack();"><h4><b>Back</b></h4></div><div class="col-3 empty"></div><div class="col-2 empty" ></div><div class="col-3 empty"></div><div class="col-1 button t_center" onclick="loadPage('index.php')">
  <h4><b>Home</b></h4></div><div class="col-1 empty"></div>
  <div class="col-12">
<!-- <form action="upload_files_action.php" method="post" enctype="multipart/form-data"> -->
<form id="uploadimage" enctype="multipart/form">
<table align="center">
  <tr><td>Photo 1:</td><td><input type="file" id="file" name="file_1" required></td></tr>
  <tr><td>Photo 2:</td><td><input type="file" id="file_2" name="file_2" required></td></tr>
  <tr><td>Photo 3:</td><td><input type="file" id="file_3" name="file_3" required></td></tr>
  <tr><td>Photo 4:</td><td><input type="file" id="file_4" name="file_4" required></td></tr>
<<<<<<< HEAD
  <tr><td colspan="2" align="center"><input type="submit" onclick="return uploadFile();" value="Submit">&nbsp;<input type="reset" value="Reset"><p id="add_product"></p></td>
    <p style="color:Red;font-size:30px;" id="uploaded_image"></p></td></tr></tr>
=======

  <tr><td colspan="2" align="center"><input type="submit" onclick="return uploadFile();" value="Submit">&nbsp;<input type="reset" value="Reset"><p id="loading"></p><p id="message"></p></td></tr>
>>>>>>> fed3243722139c9f69dd89f35a999a4a96d3bed2
</table>
</form>
</div>
</body>
</html>
