<?php
session_start();
if(isset($_SESSION['buy_sell']) && ($_SESSION['buy_sell']=='authenticated')){
    ?>
    <script>loadPage('buy_index.php');</script>
    <?php

}else{

$_SESSION['buy_sell']="buy";
?>

  <div class="col-12 index">
    <h1>RICTech: Buy Login</h1>
  </div>

      <div class="col-1 empty"></div>
      <div class="col-1 button button1" onclick="goBack();"><h4><b>Back</b></h4></div>
      <div class="col-3 empty"></div>
      <div class="col-2 empty" ></div>
      <div class="col-3 empty"></div>
      <div class="col-1 button button1" onclick="loadPage('index.php')"><h4><b>Home</b></h4></div>
      <div class="col-1 empty"></div>

   <div class="col-12">
     <?php
     if(!empty($error_message))
  ?>
        <center>
          <form id="submit_otp" style="display:none">
             <table id="buy1">
            <tr><td><h3>Enter OTP:</h3> </td><td><input type="text" id="ip_otp" placeholder="OTP"></td></tr>
            <tr><td colspan="2"><input type="submit" value="Submit" onclick="return submit_otp();"><input type="reset" value="Reset">
              <p style="color:Red;font-size:30px;" id="otp_msg"></p></td></tr>
          </table>
          </form>


     <form id="req_otp">
       <table id="buy2">
         <tr><td><h3>Phone Number:</h3></td><td> <input type="text" id="number" placeholder="Phone Number" required></td></tr>
         <tr><td colspan="2"><input type="submit" value="Submit" onclick="return req_otp();"><input type="reset" value="Reset"></td></tr>
          <tr><td colspan="2" id="message"> <p style="color:Red;font-size:30px;" id="msg"></p></td></tr>

       </table>
     </form>

  </center>
      </div>



      </div>

<?php  } ?>
