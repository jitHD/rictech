<?php
session_start();
if(isset($_SESSION['buy_sell']) && ($_SESSION['buy_sell']=='authenticated')){
    ?>
    <script>loadPage('buy_index.php');</script>
    <?php

}else{

$_SESSION['buy_sell']="buy";
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
      <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
      <script>

      </script>

  </head>
  <body>

      <div class="col-1"></div><div class="col-1 button t_center" onclick="goBack();"><h4><b>Back</b></h4></div><div class="col-3"></div><div class="col-2" ></div><div class="col-3"></div><div class="col-1 button t_center" onclick="loadPage('index.php')">
      <h4><b>Home</b></h4></div><div class="col-1"></div>
    <!--  <div class="col-6 red t_center t_white" onclick="setPresent('sell.php');loadPage('otp_authentication/sell_index.php');">
        <h2></h2>
      </div>
    -->
   <div class="col-12">
    <!--<div class="col-6 orange t_center t_white" onclick="setPresent('');loadPage('')">
          <h2></h2>
        </div>
     -->
     <?php
     if(!empty($error_message))
  ?>
        <center>
          <form id="submit_otp" style="display:none">
             <table>
            <tr><td>Enter OTP: </td><td><input type="text" id="ip_otp" placeholder="OTP"></td></tr>
            <tr><td colspan="2"><input type="submit" value="submit" onclick="return submit_otp();">&nbsp;<input type="reset" value="Reset">
              <p style="color:Red;font-size:30px;" id="otp_msg"></p></td></tr>
          </table>
          </form>


     <form id="req_otp">
       <table>
         <tr><td>Phone:</td><td> <input type="text" id="number"></td></tr>
         <tr><td colspan="2"><input type="submit" value="submit" onclick="return req_otp();">&nbsp;<input type="reset" value="Reset">
           <p style="color:Red;font-size:30px;" id="msg"></p></td></tr>
         <tr></tr>
       </table>
     </form>

  </center>
      </div>



      </div>
  </body>
</html>

<?php  } ?>
