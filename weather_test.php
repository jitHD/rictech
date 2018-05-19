<?php
if(isset($_SESSION['user']))
{
echo "you are already logged in";
}else {


if(isset($_POST['username']) && isset($_POST['userpwd']))
{
$userid=$_POST['username'];
$userpw=$_POST['userpwd'];

if($userid='HD' && $userpwd='master')
{

session_start();
$_SESSION["user"]=$userid;



}else {
login:

  echo "Your credentials are not valid";
  ?>
<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
User ID: <input type="text" name='username'><br>
Password: <input type="password" name="userpwd"><br>
<input type="submit" name="submit" value="Submit">

</form>
  <?php
}
}else {
  goto login;
}
}
 ?>
