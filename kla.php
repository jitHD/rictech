<?php


?>


<head>
<title>Best Practices</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./css/village.css">
<script src="./js/ajax.js" type="text/jscript"></script>
<script src="jquery.js"></script>
<script>
$(document).ready(function(){

 load_data();

 function load_data(pin_code)
 {

  $.ajax({
   url:"./js/loadhospital.php",
   method:"POST",
   data:{pin_code:pin_code},
   success:function(data)
   {
    $('#display_info').html(data);
   }
  });
 }
 $('#pin_code').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>


  </head>
  <body>
      

    <div class="col-6 t_center t_white">
      <br />
     
        Pin: <input type="text" name="pin_code" id="pin_code">
         
      
	<div id="display_info" >
jkl
	</div>
   
  </body>
</html>
