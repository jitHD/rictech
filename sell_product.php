<?php
if(isset($_GET['type']))
{
  session_start();
  echo $_SESSION['phone'];
  $_SESSION['product_type']=$_GET['type'];
  echo $_SESSION['product_type'];
?>

<html>
<head>
</head>
<body>
  <form action="sell_product_action.php" method="post">
    <table>
      <tr><td>Product Name:</td><td><input type="text" name="product" required></td></tr>

      <tr><td>Quantity:</td><td><input type="number" name="quantity" required>
        <select name="unit" required>
          <option value="g">Grams</option>
          <option value="Kg">Kilograms</option>
          <option value="P">Piece</option>
        </select>
        </td></tr>
      <tr><td>Price per quantity: </td><td><input type="float" name="price"></td></tr>
      <tr><td colspan="2" align="center"><input type="submit" value="Submit">&nbsp;<input type="reset" value="Clear"></td></tr>
  </form>
</body>

</html>

<?php

}
else {
  header("location:sell_index.php?msg=Please select the type of product");
}
 ?>
