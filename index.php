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

function loadPage(page_name){
  var page=page_name;
  $.ajax({
    type:'get',
    url:page,
    cache:false,
    success:function(data){
      $('#page').html(data);
    }
  })
  return false;
};

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

/*
function uploadFile()
{
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
    cache:false,
    success: function(html){
      $('#add_product').html(html);

    }
  })

return false;
};
*/
//############################ UPLOADING FILES #################################
function uploadFile(){
var upload = document.getElementById('uploadimage');
$.ajax({
url: "upload_files_action.php", // Url to which the request is send
type: "post",             // Type of request to be send, called as method
enctype: 'multipart/form-data',
data: new FormData(upload), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
success: function(data)   // A function to be called if request succeeds
{
$("#page").load(data);
}
});
return false;
};



</script>
</head>
  <body>
    <div onclick="launchIntoFullscreen(document.documentElement);" >
    <div class="topright" onclick="exitFullscreen();"><img id="close" src="image/close.png" /></div>
    <div id="page">
      <div class="12"  onclick="setPresent('index.php');loadPage('v_menu.php');">
      <div class="col-12 t_center t_white">
        <h1>RICTech</h1>
        <h4>Rural Information and Communication Technology</h4>

      </div>
      <div class="col-12">
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
  </div>
      <div class="col-5 empty"></div>
      <div class="col-2 t_center button" onclick="setPresent('index.php');loadPage('v_menu.php');"><h4><b>Continue to Menu</b></h4></div><div class="col-5 empty"></div>
    </div>
    </div>


  </body>
</html>


<?php
//} ?>
