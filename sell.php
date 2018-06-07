<?php
require_once './connect.php';
session_start();
if(isset($_SESSION['buy_sell']) && ($_SESSION['buy_sell']=='authenticated')){
    ?>
    <script>loadPage('sell_index.php');</script>
    <?php

}else{

$_SESSION['buy_sell']="sell";

/*
session_start();
if(!isset($_SESSION['user']))
{
  header("Location: design_login.php?ori_log=buy_sell.php");
  die();
}else{
*/
  ?>
    <div class="col-12 index">
      <h1>RICTech: Sell Index</h1>
    </div>
      <div class="col-1 empty"></div>
      <div class="col-1 button button1" onclick="goBack();"><h4><b>Back</b></h4></div>
      <div class="col-3 empty"></div>
      <div class="col-2 empty"></div>
      <div class="col-3 empty"></div>
      <div class="col-1 button button1" onclick="loadPage('index.php')"><h4><b>Home</b></h4></div>
      <div class="col-1 empty"></div>

   <div class="col-12">
     <?php
     if(!empty($error_message))
  ?>
        <center>
          <form id="submit_otp" style="display:none">
             <table>
            <tr><td>Enter OTP: </td><td><input type="text" id="ip_otp" placeholder="OTP"></td></tr>
            <tr><td colspan="2"><input type="submit" value="Submit" onclick="return submit_otp();">&nbsp;<input type="reset" value="Reset">
              <p style="color:Red;font-size:30px;" id="otp_msg"></p></td></tr>
          </table>
          </form>


     <form id="req_otp">
       <table>
         <tr><td>Phone Number:</td><td> <input type="text" placeholder="Phone Number" id="number"></td></tr>
         <tr><td colspan="2"><input type="submit" value="Submit" onclick="return req_otp();">&nbsp;<input type="reset" value="Reset">
           <p style="color:Red;font-size:30px;" id="msg"></p></td></tr>
         <tr></tr>
       </table>
     </form>

  </center>
      </div>



      </div>

<?php  } ?>
