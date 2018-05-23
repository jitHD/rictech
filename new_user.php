
<?php
 ?>
 <html>
 <head>
 </head>
 <body>
<form action="add_user.php" method="post">
  <table>
    <tr><td>Name: </td><td><input type="text" name="name" required></td></tr>
    <tr><td>Village: </td><td><input type="text" name="village" required></td></tr>
    <tr><td>Post Office: </td><td><input type="text" name="post_office" required></td></tr>
    <tr><td>District: </td><td><input type="text" name="district" required></td></tr>
    <tr><td>Pin: </td><td><input type="text" name="pin" required></td></tr>
    <tr><td colspan="2" align="right"><input type="submit" name="Submit"> &nbsp;<input type="reset" name="Clear"></td></tr>
  </table>
</form>
</body>
</html>
