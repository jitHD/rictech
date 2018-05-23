<?php
require_once '../connect.php';

if(isset($_POST["input_tab"]) && isset($_POST["input_val"]))
{
$tab = $_POST["input_tab"];
$sym = $_POST["input_val"];
echo $sym;
$res = mysqli_query($conn,"SELECT * FROM schemes WHERE $tab LIKE '%$sym%';") or die(mysqli_error($conn));

while($row=mysqli_fetch_array($res))
{

 echo "<a href='".$row['url']."'><tr>";
 echo "<td class='text-left'>".$row['scheme']."</td>";
 echo "<td class='text-left'>".$row['ministry']."</td>";
 echo "<td class='text-left'>".$row['sector']."</td>";
 echo "<td class='text-left'>".$row['provision']."</td>";
 echo "</tr></a>";
}

}


?>
