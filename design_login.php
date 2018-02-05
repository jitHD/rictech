<?php
session_start();
if(isset($_SESSION['user']))
{
  logged_in:
  if(isset($_GET['ori_log']))
  {
    $red_loc=$_GET['ori_log'];
    header('location:'.$red_loc);
  }else {
?>
  <html><head><title>Test Login</title></head>
    <body>You are already logged in
      <form method="POST" action="logout.php">
        <input type='submit' value='LogOut' name="submit">
      </form>
    </body>
  </html>
<?php }
}else if(isset($_POST['username']) && isset($_POST['userpwd']))
  {
    $userid=$_POST['username'];
    $userpw=$_POST['userpwd'];

    if($userid=='HD' && $userpw=='master')
    {
      $_SESSION["user"]=$userid;
      goto logged_in;
    }else {
      goto login;
      }
    }else {
      login:
      ?>
            <form method="POST" action="design_login.php<?php if(isset($_GET['ori_log'])) echo '?ori_log='. $_GET['ori_log'];?> ">
              User ID: <input type="text" id='username' name='username'><br>
              Password: <input type="password" id='userpwd' name="userpwd"><br>
              <input type="submit" name="submit" value="Submit">
            </form>
      <?php

    }


 ?>
