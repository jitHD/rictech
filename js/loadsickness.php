
<?php
require_once '../connect.php';

if(isset($_POST["symptoms"]))
{

$sym=$_POST["symptoms"];
$res=mysqli_query($conn,"SELECT * FROM common_ailments WHERE symptoms LIKE '%$sym%'") or die(mysqli_error($conn));


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

