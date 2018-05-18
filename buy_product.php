<?php
if(isset($_GET['type']))
{
  echo $_GET['type'];
  $product_type=$_GET['type'];
require_once 'connect.php';

$data=mysqli_query($conn,"SELECT * FROM $product_type ORDER BY add_date DESC") or die(mysqli_error($conn));

echo "<table>";
while($data1=mysqli_fetch_array($data))
{
  echo "Testing";
  echo "<tr><td><h3>".$data1['product_name']."</h3></td><td><h3> Total:".$data1['quantity'].$data1['unit']."</h3></td><td><h3>Rs.".$data1['price']." per ".$data1['unit']."</h3></td><td><button onclick='confirmBuy(this.value);' value='".$data1['id']."'>Buy</button></td></tr>";
  echo "<tr><td><img src='".$data1['photo_1']."' height='100px'></td><td><img src='".$data1['photo_2']."' height='100px'></td><td><img src='".$data1['photo_3']."' height='100px'></td><td><img src='".$data1['photo_4']."' height='100px'></td></tr>";
  echo "<tr><td colspan='4'><hr></td></tr>";
}

echo "</table>";

}




 ?>
<p id="demo"></p>
 <script>
 function confirmBuy(val) {
     var txt;
     var r = confirm("Are you interested in buying this item?");
     if (r == true) {

         txt = "<?php echo 'id: '; ?>"+val;
     } else {
         txt = "<?php echo "How are you?"; ?>";
     }
     document.getElementById("demo").innerHTML = txt;
 }
 </script>
