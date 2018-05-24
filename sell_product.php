
<?php
if(isset($_GET['type']))
{
  session_start();
  //echo $_SESSION['phone'];
  $_SESSION['product_type']=$_GET['type'];
  //echo $_SESSION['product_type'];
?>

<html>
<head>
</head>
<body>

  <div class="col-1 empty"></div>
  <div class="col-1 button t_center" onclick="goBack();"><h4><b>Back</b></h4></div>
  <div class="col-3 empty"></div>
  <div class="col-2 empty" ></div>
  <div class="col-3 empty"></div>
  <div class="col-1 button t_center" onclick="loadPage('index.php')"> <h4><b>Home</b></h4></div>
  <div class="col-1 empty"></div>
<div class="col-12">
  <!-- <form action="sell_product_action.php" method="post"> -->
  <form id="product_input" method="post">
    <table align="center">
      <tr><td>Product Name:</td><td><input id="pruduct_name" type="text" name="product" required></td></tr>

      <tr><td>Quantity:</td><td><input id="quantity" type="number" name="quantity" required>
        <select id="unit" name="unit" required>
          <option value="g">Grams</option>
          <option value="Kg">Kilograms</option>
          <option value="P">Piece</option>
        </select>
        </td></tr>
      <tr><td>Price per quantity: </td><td><input id="price" type="float" name="price"></td></tr>
      <tr><td colspan="2" align="center" onclick="return req_form_action();"><input type="submit" value="Submit">&nbsp;<input type="reset" value="Clear">
        <p style="color:Red;font-size:30px;" id="add_product"></p></td></tr>
  </form>
</div>
</body>

</html>

<?php

}
else {
  header("location:sell_index.php?msg=Please select the type of product");
}
 ?>
