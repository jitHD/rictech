<?php
$success = "";
$error_message = "";
$conn = mysqli_connect("localhost","root","root","user_otp_login");
if(!empty($_POST["submit_phone"])) {
	$result = mysqli_query($conn,"SELECT * FROM registered_vendors WHERE phone='" . $_POST["phone"] . "'");
	$count  = mysqli_num_rows($result);
	if($count>0) {
		// generate OTP
		$otp = rand(100000,999999

		// Send OTP

		if($mail_status == 1) {
			$result = mysqli_query($conn,"INSERT INTO otp_expiry(otp,is_expired,created_at) VALUES ('" . $otp . "', 0, '" . date("Y-m-d H:i:s"). "')");
			$current_id = mysqli_insert_id($conn);
			if(!empty($current_id)) {
				$success=1;
			}
		}
	} else {
    header("location:register_vendor.php");
	}
}
if(!empty($_POST["submit_otp"])) {
	$result = mysqli_query($conn,"SELECT * FROM otp_expiry WHERE otp='" . $_POST["otp"] . "' AND is_expired!=1 AND NOW() <= DATE_ADD(created_at, INTERVAL 1 MINUTE)");
	$count  = mysqli_num_rows($result);
	if(!empty($count)) {
		$result = mysqli_query($conn,"UPDATE otp_expiry SET is_expired = 1 WHERE otp = '" . $_POST["otp"] . "'");
		$success = 2;
	} else {
		$success =1;
		$error_message = "Invalid OTP!";
	}
}
?>
<html>
<head>
<title>User Login</title>

</head>
<body>
	<?php
		if(!empty($error_message)) {
	?>
	<div class="message error_message"><?php echo $error_message; ?></div>
	<?php
		}
	?>

<form name="frmUser" method="post" action="">
	<div class="tblLogin">
		<?php
			if(!empty($success == 1)) {
		?>
		<div class="tableheader">Enter OTP</div>
		<p style="color:#31ab00;">Check your email for the OTP</p>

		<div class="tablerow">
			<input type="text" name="otp" placeholder="One Time Password" class="login-input" required>
		</div>
		<div class="tableheader"><input type="submit" name="submit_otp" value="Submit" class="btnSubmit"></div>
		<?php
			} else if ($success == 2) {
        ?>
		<p style="color:#31ab00;">Welcome, You have successfully loggedin!</p>
		<?php
			}
			else {
		?>

		<div class="tableheader">Enter Your Login Email</div>
		<div class="tablerow"><input type="text" name="email" placeholder="Email" class="login-input" required></div>
		<div class="tableheader"><input type="submit" name="submit_email" value="Submit" class="btnSubmit"></div>
		<?php
			}
		?>
	</div>
</form>
</body></html>
