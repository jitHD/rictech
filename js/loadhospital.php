
<?php
require_once '../connect.php';

if(isset($_POST["pin_code"]))
{

$pin=$_POST["pin_code"];
$res=mysqli_query($conn,"SELECT * FROM hospitals WHERE pin LIKE '$pin%'") or die(mysqli_error($conn));


while($row=mysqli_fetch_array($res))
{
 echo "<p>".$row['name']."</p>";
 echo "<p>".$row['pin']."</p>";
}

}
?>

