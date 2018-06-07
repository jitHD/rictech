
<?php
require_once '../connect.php';

if(isset($_POST["val"]) && isset($_POST['input_val']))
{

$tab=$_POST["val"];
$sym=$_POST['input_val'];
$res=mysqli_query($conn,"SELECT * FROM hospitals WHERE $tab LIKE '%$sym%'") or die(mysqli_error($conn));

while($row=mysqli_fetch_array($res))
{
 echo "<tr>";
 echo "<td id='show_name'>".$row['name']."</td>";
 echo "<td id='show_phone'>".$row['phone']."</td>";
 echo "<td id='show_address'>".$row['address']."</td>";
 echo "<td id='show_pin'>".$row['pin']."</td>";
 echo "</tr>";
}
}
?>
