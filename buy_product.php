<?php
if(isset($_GET['type']))
{
  //echo $_GET['type'];
  session_start();
  $product_type=$_GET['type'];
  $_SESSION['product_type']=$product_type;

  $buyer=$_SESSION['phone'];
require_once 'connect.php';

$data=mysqli_query($conn,"SELECT * FROM $product_type WHERE seller != $buyer ORDER BY add_date DESC") or die(mysqli_error($conn));

/*
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";
*/

?>
<div class="col-1 empty"></div>
<div class="col-1 button button1" onclick="goBack();"><h4><b>Back</b></h4></div>
<div class="col-3 empty"></div>
<div class="col-2 empty"></div>
<div class="col-3 empty"></div>
<div class="col-1 button button1" onclick="loadPage('index.php')"><h4><b>Home</b></h4></div>
<div class="col-1 empty"></div>

<div class="col-12 buy_product">
<?php
echo "<table id='buy_product' align='center'>";
while($data1=mysqli_fetch_array($data))
{
  echo "<tr>
  <td><h3>".$data1['product_name']."</h3></td>
  <td><h3> Total:".$data1['quantity'].$data1['unit']."</h3></td>
  <td><h3>Rs.".$data1['price']." per ".$data1['unit']."</h3></td>
  <td><button id='buy' onclick='confirmBuy(this.value);' value='".$data1['id']."'>Buy</button></td>
  </tr>";
  echo "<tr>
  <td><img src='".$data1['photo_1']."'></td>
  <td><img src='".$data1['photo_2']."'></td>
  <td><img src='".$data1['photo_3']."'></td>
  <td><img src='".$data1['photo_4']."'></td>
  </tr>";
  echo "<tr><td colspan='4'><hr size='10' color='brown'><br></td></tr>";
}

echo "</table>";

}




 ?>
</div>
