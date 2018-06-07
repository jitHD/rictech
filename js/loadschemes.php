<?php
require_once '../connect.php';

if(isset($_POST["input_tab"]) && isset($_POST["input_val"]))
{
$tab = $_POST["input_tab"];
$sym = $_POST["input_val"];

$res = mysqli_query($conn,"SELECT * FROM schemes WHERE $tab LIKE '%$sym%';") or die(mysqli_error($conn));

while($row=mysqli_fetch_array($res))
{

 echo "<tr>";
 echo "<td id='scheme1'><a href='".$row['url']."'>".$row['scheme']."</a></td>";
 echo "<td id='scheme2'><a href='".$row['url']."'>".$row['ministry']."</a></td>";
 echo "<td id='scheme3'><a href='".$row['url']."'>".$row['sector']."</a></td>";
 echo "<td id='scheme4'><a href='".$row['url']."'>".$row['provision']."</a></td>";
 echo "</tr>";
}

}


?>
