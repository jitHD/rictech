<?php
require_once './connect.php';
$phone=$_POST['number'];
$success = "";
$error_message = "";


if(isset($_POST['number'])) {

  $phone_number="91".$_POST['number'];

  $result = mysqli_query($conn,"SELECT * FROM registered_users WHERE phone='" . $phone . "'") or die(mysqli_error($conn));
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
    echo "Successfully sent";
    ?>
    <script>
    document.getElementById("req_otp").style.display='none';
    document.getElementById("submit_otp").style.display='block';
</script>
<?php
    //$current_id = mysqli_insert_id($conn);
    $_SESSION['phone']=$_POST['number'];
    // /*if(!empty($current_id)) {
    //   $success=1;
    // }
    // */
    // // Send OTP
    //
    // // Authorisation details.
    //    $username = "sereb.basu@gmail.com";
    //     $hash = "4a78355f681eca8e754b41634f953363b36a3e88ea9d5749769cb4ed7d85add1";
    //
    // // Config variables. Consult http://api.textlocal.in/docs for more info.
    //    $test = "1";
    //
    // // Data for text message. This is the text message data.
    //    $sender = "RICTech"; // This is who the message appears to be from.
    //    $numbers = $phone_number; // A single number or a comma-seperated list of numbers
    //    $message = "Your OTP for login to RICTech is: ".$otp;
    // // 612 chars or less
    // // A single number or a comma-seperated list of numbers
    //    $message = urlencode($message);
    //    $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
    //    $ch = curl_init('http://api.textlocal.in/send/?');
    //    curl_setopt($ch, CURLOPT_POST, true);
    //    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    //    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //    $result = curl_exec($ch); // This is the result from the API
    //    curl_close($ch);
    // /*
    // if($mail_status == 1) {
    //   $result = mysqli_query($conn,"INSERT INTO otp_expiry(otp,is_expired,created_at) VALUES ('" . $otp . "', 0, '" . date("Y-m-d H:i:s"). "')");
    //   $current_id = mysqli_insert_id($conn);
    //   if(!empty($current_id)) {
    //     $success=1;
    //   }
    // }*/
  } else {
    echo "User doesnot Exists !!";
  }
}

//
// if(isset($_POST["otp"])) {
//   $otp_input=$_POST['otp'];
//
//
//   $query = mysqli_query($conn,"SELECT * FROM otp_expiry WHERE otp='$otp_input' AND is_expired != 1 AND NOW() <= expiring_at") or die(mysqli_error($conn));
//   $count = mysqli_num_rows($query);
//   if($count>0) {
//     $result = mysqli_query($conn,"UPDATE otp_expiry SET is_expired = 1 WHERE otp = '" . $otp_input . "'") or die(mysqli_error($conn));
//     $_SESSION['seller_verified']=1;
//     header("location:sell_index.php");
//   } else {
//     $error_message = "Invalid OTP!";
//
//     $success =1;
//
//   }
// }
?>
