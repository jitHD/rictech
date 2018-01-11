//sell_authentication.php
<?php

session_start();
if(!isset($_SESSION['user']))
{
  header("Location: design_login.php?ori_log=buy_sell.php");
  die();
}else{



  $success = "";

  $error_message = "";
  $conn = mysqli_connect("localhost","root","root","user_otp_login");

  if(isset($_POST['phone'])) {
    $phone_number="91".$_POST['phone'];

    otp:
    $result = mysqli_query($conn,"SELECT * FROM registered_users WHERE phone='" . $_POST["phone"] . "'") or die(mysqli_error($conn));
  	$count  = mysqli_num_rows($result);
  	if($count>0) {
  		// generate OTP
  		//$otp = rand(100000,999999);
      $otp="";
      for(;strlen($otp)<5;)
      {
      i:
      if(!in_array($n = rand(48,122), array(58,59,60,61,62,63,64,91,92,93,94,95,96) ) )
      {
          $otp=$otp.chr($n);
      }
      else
        goto i;
      }


      //NOT WORKING ## $result = mysqli_query($conn,"IF EXISTS(SELECT * FROM otp_expiry WHERE phone=$phone_number) THEN UPDATE otp_expiry SET is_expired=0 AND created_at = NOW() AND expiring_at = DATE_ADD(NOW(), INTERVAL 1 MINUTE) AND otp = $otp WHERE phone=$phone_number; ELSE INSERT INTO otp_expiry(otp,phone,is_expired,created_at,expiring_at) VALUES ('$otp','$phone_number',0,'NOW()',DATE_ADD(NOW(), INTERVAL 1 MINUTE)); END IF") or die(mysqli_error($conn));
      $result = mysqli_query($conn,"SELECT * FROM otp_expiry WHERE phone='$phone_number'") or die(mysqli_error($conn));
      $exists = mysqli_num_rows($result);

      if($exists>0){
        mysqli_query($conn,"UPDATE otp_expiry SET is_expired = 0,otp = '$otp',created_at = NOW(), expiring_at = DATE_ADD(NOW(), INTERVAL 1 MINUTE) WHERE phone='$phone_number'") or die(mysqli_error($conn));
        if(mysqli_affected_rows($conn)>0)
          $success=1;
        }else{
          mysqli_query($conn,"INSERT INTO otp_expiry(otp,phone,is_expired,created_at,expiring_at) VALUES ('".$otp."','$phone_number',0,'".date("Y-m-d H:i:s")."',DATE_ADD(NOW(), INTERVAL 1 MINUTE))") or die(mysqli_error($conn));
          if(mysqli_affected_rows($conn)>0)
            $success=1;
        }
      //$current_id = mysqli_insert_id($conn);
      $_SESSION['phone']=$_POST['phone'];
      /*if(!empty($current_id)) {
        $success=1;
      }
      */
  		// Send OTP

      // Authorisation details.
	       $username = "sereb.basu@gmail.com";
	        $hash = "4a78355f681eca8e754b41634f953363b36a3e88ea9d5749769cb4ed7d85add1";

	    // Config variables. Consult http://api.textlocal.in/docs for more info.
	       $test = "1";

	    // Data for text message. This is the text message data.
	       $sender = "RICTech"; // This is who the message appears to be from.
	       $numbers = $phone_number; // A single number or a comma-seperated list of numbers
	       $message = "Your OTP for login to RICTech is: ".$otp;
	    // 612 chars or less
	    // A single number or a comma-seperated list of numbers
	       $message = urlencode($message);
	       $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	       $ch = curl_init('http://api.textlocal.in/send/?');
	       curl_setopt($ch, CURLOPT_POST, true);
	       curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	       $result = curl_exec($ch); // This is the result from the API
	       curl_close($ch);
  		/*
      if($mail_status == 1) {
  			$result = mysqli_query($conn,"INSERT INTO otp_expiry(otp,is_expired,created_at) VALUES ('" . $otp . "', 0, '" . date("Y-m-d H:i:s"). "')");
  			$current_id = mysqli_insert_id($conn);
  			if(!empty($current_id)) {
  				$success=1;
  			}
  		}*/
  	} else {
      mysqli_query($conn,"INSERT INTO registered_users (name,phone,village,post_office,pin) VALUES ('','" . $_POST["phone"] . "','','','')") or die(mysqli_error($conn));
      goto otp;
  	}
  }


  if(isset($_POST["otp"])) {
    $otp_input=$_POST['otp'];


  	$query = mysqli_query($conn,"SELECT * FROM otp_expiry WHERE phone='91".$_SESSION['phone']."' AND otp='$otp_input' AND is_expired != 1 AND NOW() <= expiring_at") or die(mysqli_error($conn));
    $count = mysqli_num_rows($query);
  	if($count>0) {
  		$result = mysqli_query($conn,"UPDATE otp_expiry SET is_expired = 1 WHERE otp = '" . $otp_input . "'") or die(mysqli_error($conn));

      $check_new=mysqli_query($conn,"SELECT * FROM registered_users WHERE phone='".$_SESSION['phone']."'") or die(mysqli_error($conn));
      $count_new=mysqli_fetch_array($check_new);
      if($count_new['name']=='')
      {
        $_SESSION['user_type']=0;
        header("location:new_user.php");
      }else {
        header("location:sell_index.php");
      }
  	} else {
      $error_message = "Invalid OTP!";

  		$success =1;

  	}
  }
  ?>


<head>
<title>Sell</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" type="text/css" href="./css/village.css">
-->
  </head>
  <body>

      <div class="col-1"></div><div class="col-1 button t_center" onclick="goBack();"><h4><b>Back</b></h4></div><div class="col-3"></div><div class="col-2" ></div><div class="col-3"></div><div class="col-1 button t_center" onclick="loadPage('index.php')">
      <h4><b>Home</b></h4></div><div class="col-1"></div>
    <!--  <div class="col-6 red t_center t_white" onclick="setPresent('sell.php');loadPage('otp_authentication/sell_index.php');">
        <h2></h2>
      </div>
    -->
     <div class="col-12" id="loaded_data">
    <!--<div class="col-6 orange t_center t_white" onclick="setPresent('');loadPage('')">
          <h2></h2>
        </div>
     -->
     <?php
     if(!empty($error_message))
     echo $error_message;
        if($success==1)
        {
          ?>
          <form id="otp">
            Enter OTP: <input type="text" name="otp" placeholder="OTP"><br>
            <input type="submit" name="submit" value="Submit OTP">&nbsp;<input type="reset" value="Reset">
          </form>

          <?php
        }
        else{
      ?>
     <form id="phone_number">
       <table>
         <tr><td>Phone:</td><td> <input type="text" id="phone" name="phone" placeholder="Phone Number"></td></tr>
         <tr><td colspan="2"><input type="submit" name="submit" value="Submit">&nbsp;<input type="reset" value="Reset"></td></tr>
       </table>
     </form>

     <?php
   } ?>
      </div>



      </div>
  </body>
</html>

<?php } ?>
