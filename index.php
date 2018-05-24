<?php
/*
session_start();
if(!isset($_SESSION['user']))
{
  header("Location: design_login.php?ori_log=index.php");
  die();
}else{
*/
?>
<html>

<head>
<title>RICTech</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./css/village.css">
<script src="./js/ajax.js" type="text/jscript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
function req_otp()
{
  var number=document.getElementById('number').value;
  var dataString='number='+number;
  $.ajax({
    type:"post",
    url:"ajax/request_otp.php",
    data:dataString,
    cache:false,
    success: function(html){
      $('#msg').html(html);

    }
  })
  return false;
};

function submit_otp()
{
  var ip_otp=document.getElementById('ip_otp').value;
  var dataString='ip_otp='+ip_otp;
  $.ajax({
    type:"post",
    url:"ajax/submit_otp.php",
    data:dataString,
    cache:false,
    success: function(html){
      $('#otp_msg').html(html);

    }
  })
  return false;
};

function req_form_action()
{
  var product_name=document.getElementById('product_name').value;
  var quantity=document.getElementById('quantity').value;
  var unit=document.getElementById('unit').value;
  var price=document.getElementById('price').value;
  var dataString='product='+product_name+'&quantity='+quantity+'&unit='+unit+'&price='+price;
  $.ajax({
    type:"post",
    url:"ajax/sell_product_action.php",
    data:dataString,
    cache:false,
    success: function(html){
      $('#add_product').html(html);

    }
  })

return false;
};


function uploadFile()
{
<<<<<<< HEAD
  var form_data = new FormData();
  form_data.append("file", document.getElementById('file').files[0]);
  // var product_name=document.getElementById('file_1').value;
  // var quantity=document.getElementById('file_2').value;
  // var unit=document.getElementById('file_3').value;
  // var price=document.getElementById('file_4').value;
  //var dataString='file_1='+product_name+'&file_2='+quantity+'&file_3='+unit+'&file_4='+price;
  $.ajax({
    type:"post",
    url:"upload_files_action.php",
    data:form_data,
=======
  var product_name=document.getElementById('file_1');
  var quantity=document.getElementById('file_2');
  var unit=document.getElementById('file_3');
  var price=document.getElementById('file_4');
  var dataString='file_1='+product_name+'&file_2='+quantity+'&file_3='+unit+'&file_4='+price;
  $.ajax({
    type:"post",
    url:"upload_files_action.php",
    data:dataString,
    processData:false,
    contentType:false,
>>>>>>> fed3243722139c9f69dd89f35a999a4a96d3bed2
    cache:false,
    processData: false,
    beforeSend:function(){
     $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
    },
    success:function(data)
    {
     $('#uploaded_image').html(data);
    }
  })

return false;
};

$(document).ready(function (e) {
$("#uploadimage").on('submit',(function(e) {
e.preventDefault();
$("#message").empty();
$('#loading').show();
$.ajax({
url: "upload_files_action.php", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
success: function(data)   // A function to be called if request succeeds
{
$('#loading').hide();
$("#message").html(data);
}
});
}));

// Function to preview image after validation
$(function() {
$("#file").change(function() {
$("#message").empty(); // To remove the previous error message
var file = this.files[0];
var imagefile = file.type;
var match= ["image/jpeg","image/png","image/jpg"];
if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
{
return false;
}
else
{
var reader = new FileReader();
reader.onload = imageIsLoaded;
reader.readAsDataURL(this.files[0]);
}
});
});
function imageIsLoaded(e) {
$("#file").css("color","green");
};
});
</script>
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
      <div class="col-5 empty"></div>
      <div class="col-2 t_center button" onclick="setPresent('index.php');loadPage('v_menu.php');"><h4><b>Continue to Menu</b></h4></div><div class="col-5 empty"></div>
    </div>
    </div>




  </body>
</html>


<?php
//} ?>
