
<?php
if(isset($_GET['area'])) {
  $area=$_GET['area'];
  require_once 'connect.php';

  $res = mysqli_query($conn,"SELECT * FROM kvk WHERE name LIKE '%$area';") or die(mysqli_error($conn));

  while($row=mysqli_fetch_array($res))
  {


   echo "<tr><td colspan='4'><a href='".$row['link']."'>".$row['name']."</a></td></tr>";
   echo "<tr><td colspan='4'>Profile Link: <a href='".$row['profile']."'>Profile</a></td></tr>";
   echo "<tr><td><font color='brown'>Address:</font> <br>".$row['address']."</td><td><font color='brown'>Pin:</font> <br>".$row['pin']."</td></tr>";
   echo "<tr><td><font color='brown'>Contact Person:</font> <br>".$row['contact_person']."</td><td><font color='brown'>Phone:</font> <br>".$row['phone_1']."</td></tr>";
   echo "<tr><td><font color='brown'>ATARI Address:</font> <br>".$row['atari_address']."</td><td> <font color='brown'>Host Institute Address:</font> <br>".$row['host_inst_add']."</td></tr>";
   echo "<tr><td><font color='brown'> Office Phone:</font> <br>".$row['phone_2']."</td><td><font color='brown'> Email:</font> <br>".$row['email_1']."<br>".$row['email_2']."</td></tr>";
  }

}
?>
