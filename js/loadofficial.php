<?php
require_once '../connect.php';

if(isset($_POST["input_tab"]) && isset($_POST["input_val"]))
{
$tab = $_POST["input_tab"];
$sym = $_POST["input_val"];

if($tab == 'name')
{
  $res=mysqli_query($conn,"SELECT * FROM officials WHERE fname LIKE '%$sym%' OR mname LIKE '%$sym%' OR fname LIKE '%$sym%';") or die(mysqli_error($conn));
}
else {
    $res = mysqli_query($conn,"SELECT * FROM officials WHERE $tab LIKE '%$sym%';") or die(mysqli_error($conn));
}

while($row=mysqli_fetch_array($res))
{

  if($row['mname'] != ""){
    $name=$row['fname']." ".$row['mname']." ".$row['lname'];
  }else {
      $name=$row['fname']." ".$row['lname'];
  }
 echo "<tr>";
 echo "<td class='text-left'>".$name."</td>";
 echo "<td class='text-left'>".$row['office']."</td>";
 echo "<td class='text-left'>".$row['designation']."</td>";
 echo "<td class='text-left'>".$row['area']."</td>";
 echo "<td class='text-left'>".$row['ph']."<br>".$row['email']."<br>".$row['address']."</td>";
 echo "</tr>";
}

}


?>
