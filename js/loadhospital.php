
<?php
require_once '../connect.php';

if(isset($_POST["pin_code"]))
{
echo "<table style='table-layout:fixed; width:100%;'>";
echo "<tr>";
 echo "<td style='font-weight:bold;text-align:center;'>Hospital Name</td>";
 echo "<td style='font-weight:bold; text-align:center;'>Phone</td>";
 echo "<td style='font-weight:bold;text-align:center;'>Full Address</td>";
 echo "<td style='font-weight:bold;text-align:center;'>PIN Code</td>";
 echo "</tr>";
echo "</table>";
$pin=$_POST["pin_code"];
$res=mysqli_query($conn,"SELECT * FROM hospitals WHERE pin LIKE '$pin%'") or die(mysqli_error($conn));
echo "<table style='table-layout:fixed; width:100%;'>";

while($row=mysqli_fetch_array($res))
{
 echo "<tr>";
 echo "<td>".$row['name']."</td>";
 echo "<td>".$row['phone']."</td>";
 echo "<td>".$row['address']."</td>";
 echo "<td>".$row['pin']."</td>";
 echo "</tr>";
}
echo "</table>";
}
?>
  
