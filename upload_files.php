
<div class="col-12 index">
  <h1>RICTech: Upload Files</h1>
</div>
  <div class="col-1 empty"></div>
  <div class="col-1 button button1" onclick="goBack();"><h4><b>Back</b></h4></div>
  <div class="col-3 empty"></div>
  <div class="col-2 empty"></div>
  <div class="col-3 empty"></div>
  <div class="col-1 button button1" onclick="loadPage('index.php')"><h4><b>Home</b></h4></div>
  <div class="col-1 empty"></div>
  <div class="col-12">
<!-- <form action="upload_files_action.php" method="post" enctype="multipart/form-data"> -->
<form id="uploadimage">
<table align="center">



  <tr><td>Photo 1:</td><td>
    <input type="button" id='upload_file_1' onclick="document.getElementById('file_1').click()" value="Photo 1">
    <input type='file' id="file_1" name="file_1" style="display:none" onchange="document.getElementById('upload_file_1').value=document.getElementById('file_1').value"  required>
  </td></tr>
  <tr><td>Photo 2:</td><td>
    <input type="button" id='upload_file_2' onclick="document.getElementById('file_2').click()" value="Photo 2">
    <input type='file' id="file_2" name="file_2" style="display:none" onchange="document.getElementById('upload_file_2').value=document.getElementById('file_2').value" required>
  </td></tr>
  <tr><td>Photo 3:</td><td>
    <input type="button" id='upload_file_3' onclick="document.getElementById('file_3').click()" value="Photo 3">
    <input type='file' id="file_3" name="file_3" style="display:none" onchange="document.getElementById('upload_file_3').value=document.getElementById('file_3').value" required>
  </td></tr>
  <tr><td>Photo 4:</td><td>
    <input type="button" id='upload_file_4' onclick="document.getElementById('file_4').click()" value="photo 4">
    <input type='file' id="file_4" name="file_4" style="display:none" onchange="document.getElementById('upload_file_4').value=document.getElementById('file_4').value" required>
  </td></tr>

  <tr><td colspan="2" align="center"><input type="submit" onclick="return uploadFile();" value="Submit">&nbsp;<input type="reset" value="Reset"><p id="add_product"></p></td>
    <p style="color:Red;font-size:30px;" id="uploaded_image"></p></td></tr></tr>
</table>
</form>
</div>
