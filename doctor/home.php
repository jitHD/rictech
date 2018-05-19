<?php
	ob_start();
	session_start();
	require_once '../connect.php';

	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysqli_query($conn,"SELECT * FROM doctor WHERE Name='".$_SESSION['user']."'") or die(mysqli_error($conn));
	$userRow=mysqli_fetch_array($res);
?>
<html>
<style>
#screenFiller {
    position: absolute;
    top: 0; right: 0; bottom: 0; left: 0;
    border: 5px solid white
}
</style>
<body>
<?php include 'include/header.php';?>


<div id="screenFiller" class="content">
   <?php

      if (isset($_GET['view']))
     {
      include $_GET["view"] . ".php";
      }?>


</div>
<!-- #container -->

<script type="text/javascript">

	$(document).ready(function(){
     $("a.mobile").click(function(){
      $(".sidebar").slideToggle('fast');
     });

    window.onresize = function(event) {
      if($(window).width() > 480){
      	$(".sidebar").show();
      }
    };


	});

</script>

</body>
</html>
