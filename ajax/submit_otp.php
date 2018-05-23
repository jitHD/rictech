<?php
require_once '../connect.php';
if(isset($_POST["ip_otp"])) {
  $otp_input=$_POST['ip_otp'];


  $query = mysqli_query($conn,"SELECT * FROM otp_expiry WHERE otp='$otp_input' AND is_expired != 1 AND NOW() <= expiring_at") or die(mysqli_error($conn));
  $count = mysqli_num_rows($query);

  if($count>0) {

    $result = mysqli_query($conn,"UPDATE otp_expiry SET is_expired = 1 WHERE otp = '" . $otp_input . "'") or die(mysqli_error($conn));
    // $_SESSION['seller_verified']=1;
    echo "Successfull";
    ?>
    <script>
    loadPage('./sell_index.php');
    </script>
    <?php
  } else {
    $error_message = "Invalid OTP!";

    $success =1;
    echo $error_message;

  }
}
?>
