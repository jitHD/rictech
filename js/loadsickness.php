
<?php
require_once '../connect.php';

if(isset($_POST["symptoms"]))
{

$sym=$_POST["symptoms"];
$res=mysqli_query($conn,"SELECT * FROM common_ailments WHERE symptoms LIKE '%$sym%'") or die(mysqli_error($conn));
 echo "<tr>";
 echo "<th class='text-left'>Sickness</th>";
 echo "<th class='text-left'>Symptoms</th>";
 echo "<th class='text-left'>Best Practices</th>";
 echo "</tr>";

while($row=mysqli_fetch_array($res))
{
 echo "<tr>";
 echo "<td class='text-left'>".$row['sickness_name']."</td>";
 echo "<td class='text-left'>".$row['symptoms']."</td>";
 echo "<td class='text-left'>".$row['best_practice']."</td>";
 echo "</tr>";
}

}
?>

