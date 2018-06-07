
<?php
require_once '../connect.php';

if(isset($_POST["id"]) && isset($_POST['input_val']))
{

$id=$_POST['id'];
$sym=$_POST["input_val"];
$res=mysqli_query($conn,"SELECT * FROM common_ailments WHERE $id LIKE '%$sym%'") or die(mysqli_error($conn));


while($row=mysqli_fetch_array($res))
{
 echo "<tr>";
 echo "<td id='sickness'>".$row['sickness_name']."</td>";
 echo "<td id='symptoms'>".$row['symptoms']."</td>";
 echo "<td id='best_practice'>".$row['best_practice']."</td>";
 echo "</tr>";
}

}
?>
