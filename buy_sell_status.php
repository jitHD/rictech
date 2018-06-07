<?php
session_start();
if(isset($_SESSION['buy_sell']) && ($_SESSION['buy_sell']=='authenticated'))
{
$id=$_SESSION['phone'];
require_once 'connect.php';

$cereals=mysqli_query($conn,"SELECT * FROM cereals WHERE seller='$id'") or die(mysqli_error($conn));
$fruits=mysqli_query($conn,"SELECT * FROM fruits WHERE seller='$id'") or die(mysqli_error($conn));
$livestock=mysqli_query($conn,"SELECT * FROM livestock WHERE seller='$id'") or die(mysqli_error($conn));
$oil_seeds=mysqli_query($conn,"SELECT * FROM oil_seeds WHERE seller='$id'") or die(mysqli_error($conn));
$spices=mysqli_query($conn,"SELECT * FROM spices WHERE seller='$id'") or die(mysqli_error($conn));
$vegetables=mysqli_query($conn,"SELECT * FROM vegetables WHERE seller='$id'") or die(mysqli_error($conn));

?>
<div class="col-12 index">
  <h1>RICTech: Buy and Sell Status</h1>
</div>
<div class="col-1 empty"></div>
<div class="col-1 button button1" onclick="goBack();"><h4><b>Back</b></h4></div>
<div class="col-3 empty"></div>
<div class="col-2 button button1" onclick="loadPage('buy_sell.php')"><h4><b>Buy & Sell</b></h4></div>
<div class="col-3 empty"></div>
<div class="col-1 button button1" onclick="loadPage('index.php')"><h4><b>Home</b></h4></div>
<div class="col-1 empty"></div>

<div class="col-12 buy_sell_status">
  <h3>Sell Status</h3>
<?php
echo "<table align='center' id='sell_status'>";
if(mysqli_num_rows($cereals)>0){
while($data1=mysqli_fetch_array($cereals))
{
  echo "<tr>
  <td><h3>".$data1['product_name']."</h3></td>
  <td><h3> Total:".$data1['quantity'].$data1['unit']."</h3></td>
  <td><h3>Rs.".$data1['price']." per ".$data1['unit']."</h3></td>
  </tr>";
  echo "<tr>
  <td><img src='".$data1['photo_1']."'></td>
  <td><img src='".$data1['photo_2']."'></td>
  <td><img src='".$data1['photo_3']."'></td>
  <td><img src='".$data1['photo_4']."'></td>
  </tr>";
  echo "<tr><td colspan='4'><hr></td></tr>";
}
}

if(mysqli_num_rows($fruits)>0){
while($data1=mysqli_fetch_array($fruits))
{
  echo "<tr>
  <td><h3>".$data1['product_name']."</h3></td>
  <td><h3> Total:".$data1['quantity'].$data1['unit']."</h3></td>
  <td><h3>Rs.".$data1['price']." per ".$data1['unit']."</h3></td>
  </tr>";
  echo "<tr>
  <td><img src='".$data1['photo_1']."'></td>
  <td><img src='".$data1['photo_2']."'></td>
  <td><img src='".$data1['photo_3']."'></td>
  <td><img src='".$data1['photo_4']."'></td>
  </tr>";
  echo "<tr><td colspan='4'><hr></td></tr>";
}
}

if(mysqli_num_rows($livestock)>0){
while($data1=mysqli_fetch_array($livestock))
{
  echo "<tr>
  <td><h3>".$data1['product_name']."</h3></td>
  <td><h3> Total:".$data1['quantity'].$data1['unit']."</h3></td>
  <td><h3>Rs.".$data1['price']." per ".$data1['unit']."</h3></td>
  </tr>";
  echo "<tr>
  <td><img src='".$data1['photo_1']."'></td>
  <td><img src='".$data1['photo_2']."'></td>
  <td><img src='".$data1['photo_3']."'></td>
  <td><img src='".$data1['photo_4']."'></td>
  </tr>";
  echo "<tr><td colspan='4'><hr></td></tr>";
}
}

if(mysqli_num_rows($oil_seeds)>0){
while($data1=mysqli_fetch_array($oil_seeds))
{
  echo "<tr>
  <td><h3>".$data1['product_name']."</h3></td>
  <td><h3> Total:".$data1['quantity'].$data1['unit']."</h3></td>
  <td><h3>Rs.".$data1['price']." per ".$data1['unit']."</h3></td>
  </tr>";
  echo "<tr>
  <td><img src='".$data1['photo_1']."'></td>
  <td><img src='".$data1['photo_2']."'></td>
  <td><img src='".$data1['photo_3']."'></td>
  <td><img src='".$data1['photo_4']."'></td>
  </tr>";
  echo "<tr><td colspan='4'><hr></td></tr>";
}
}

if(mysqli_num_rows($spices)>0){
while($data1=mysqli_fetch_array($spices))
{
  echo "<tr>
  <td><h3>".$data1['product_name']."</h3></td>
  <td><h3> Total:".$data1['quantity'].$data1['unit']."</h3></td>
  <td><h3>Rs.".$data1['price']." per ".$data1['unit']."</h3></td>
  </tr>";
  echo "<tr>
  <td><img src='".$data1['photo_1']."'></td>
  <td><img src='".$data1['photo_2']."'></td>
  <td><img src='".$data1['photo_3']."'></td>
  <td><img src='".$data1['photo_4']."'></td>
  </tr>";
  echo "<tr><td colspan='4'><hr></td></tr>";
}
}

if(mysqli_num_rows($vegetables)>0){
while($data1=mysqli_fetch_array($vegetables))
{
  echo "<tr>
  <td><h3>".$data1['product_name']."</h3></td>
  <td><h3> Total:".$data1['quantity'].$data1['unit']."</h3></td>
  <td><h3>Rs.".$data1['price']." per ".$data1['unit']."</h3></td>
  </tr>";
  echo "<tr>
  <td><img src='".$data1['photo_1']."'></td>
  <td><img src='".$data1['photo_2']."'></td>
  <td><img src='".$data1['photo_3']."'></td>
  <td><img src='".$data1['photo_4']."'></td>
  </tr>";
  echo "<tr><td colspan='4'><hr></td></tr>";
}

}
echo "</table>";



$buy=mysqli_query($conn,"SELECT * FROM buy_requests WHERE buyer='$id'") or die(mysqli_error($conn));

if(mysqli_num_rows($buy)>0){
  echo "<h3>Buy Status</h3><table align='center' id='buy_status'>";
  while($data1=mysqli_fetch_array($buy))
  {

    $id=$data1['product_id'];
    $cereals=mysqli_query($conn,"SELECT * FROM cereals WHERE id='$id'") or die(mysqli_error($conn));
    $fruits=mysqli_query($conn,"SELECT * FROM fruits WHERE id='$id'") or die(mysqli_error($conn));
    $livestock=mysqli_query($conn,"SELECT * FROM livestock WHERE id='$id'") or die(mysqli_error($conn));
    $oil_seeds=mysqli_query($conn,"SELECT * FROM oil_seeds WHERE id='$id'") or die(mysqli_error($conn));
    $spices=mysqli_query($conn,"SELECT * FROM spices WHERE id='$id'") or die(mysqli_error($conn));
    $vegetables=mysqli_query($conn,"SELECT * FROM vegetables WHERE id='$id'") or die(mysqli_error($conn));


    if(mysqli_num_rows($cereals)>0){
    while($data1=mysqli_fetch_array($cereals))
    {
      echo "<tr>
      <td><h3>".$data1['product_name']."</h3></td>
      <td><h3> Total:".$data1['quantity'].$data1['unit']."</h3></td>
      <td><h3>Rs.".$data1['price']." per ".$data1['unit']."</h3></td>
      </tr>";
      echo "<tr>
      <td><img src='".$data1['photo_1']."'></td>
      <td><img src='".$data1['photo_2']."'></td>
      <td><img src='".$data1['photo_3']."'></td>
      <td><img src='".$data1['photo_4']."'></td>
      </tr>";
      echo "<tr><td colspan='4'><hr></td></tr>";
    }
    }

    if(mysqli_num_rows($fruits)>0){
    while($data1=mysqli_fetch_array($fruits))
    {
      echo "<tr>
      <td><h3>".$data1['product_name']."</h3></td>
      <td><h3> Total:".$data1['quantity'].$data1['unit']."</h3></td>
      <td><h3>Rs.".$data1['price']." per ".$data1['unit']."</h3></td>
      </tr>";
      echo "<tr>
      <td><img src='".$data1['photo_1']."'></td>
      <td><img src='".$data1['photo_2']."'></td>
      <td><img src='".$data1['photo_3']."'></td>
      <td><img src='".$data1['photo_4']."'></td>
      </tr>";
      echo "<tr><td colspan='4'><hr></td></tr>";
    }
    }

    if(mysqli_num_rows($livestock)>0){
    while($data1=mysqli_fetch_array($livestock))
    {
      echo "<tr>
      <td><h3>".$data1['product_name']."</h3></td>
      <td><h3> Total:".$data1['quantity'].$data1['unit']."</h3></td>
      <td><h3>Rs.".$data1['price']." per ".$data1['unit']."</h3></td>
      </tr>";
      echo "<tr>
      <td><img src='".$data1['photo_1']."'></td>
      <td><img src='".$data1['photo_2']."'></td>
      <td><img src='".$data1['photo_3']."'></td>
      <td><img src='".$data1['photo_4']."'></td>
      </tr>";
      echo "<tr><td colspan='4'><hr></td></tr>";
    }
    }

    if(mysqli_num_rows($oil_seeds)>0){
    while($data1=mysqli_fetch_array($oil_seeds))
    {
      echo "<tr>
      <td><h3>".$data1['product_name']."</h3></td>
      <td><h3> Total:".$data1['quantity'].$data1['unit']."</h3></td>
      <td><h3>Rs.".$data1['price']." per ".$data1['unit']."</h3></td>
      </tr>";
      echo "<tr>
      <td><img src='".$data1['photo_1']."'></td>
      <td><img src='".$data1['photo_2']."'></td>
      <td><img src='".$data1['photo_3']."'></td>
      <td><img src='".$data1['photo_4']."'></td>
      </tr>";
      echo "<tr><td colspan='4'><hr></td></tr>";
    }
    }

    if(mysqli_num_rows($spices)>0){
    while($data1=mysqli_fetch_array($spices))
    {
      echo "<tr>
      <td><h3>".$data1['product_name']."</h3></td>
      <td><h3> Total:".$data1['quantity'].$data1['unit']."</h3></td>
      <td><h3>Rs.".$data1['price']." per ".$data1['unit']."</h3></td>
      </tr>";
      echo "<tr>
      <td><img src='".$data1['photo_1']."'></td>
      <td><img src='".$data1['photo_2']."'></td>
      <td><img src='".$data1['photo_3']."'></td>
      <td><img src='".$data1['photo_4']."'></td>
      </tr>";
      echo "<tr><td colspan='4'><hr></td></tr>";
    }
    }

    if(mysqli_num_rows($vegetables)>0){
    while($data1=mysqli_fetch_array($vegetables))
    {
      echo "<tr>
      <td><h3>".$data1['product_name']."</h3></td>
      <td><h3> Total:".$data1['quantity'].$data1['unit']."</h3></td>
      <td><h3>Rs.".$data1['price']." per ".$data1['unit']."</h3></td>
      </tr>";
      echo "<tr>
      <td><img src='".$data1['photo_1']."'></td>
      <td><img src='".$data1['photo_2']."'></td>
      <td><img src='".$data1['photo_3']."'></td>
      <td><img src='".$data1['photo_4']."'></td>
      </tr>";
      echo "<tr><td colspan='4'><hr></td></tr>";
    }

    }

}
echo "</table>";

}
}





 ?>
