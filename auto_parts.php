<?php 
$page_title = 'Examples 1';
include ('include/header.php');
?>
<h1 align="center">Examples 1</h1>


<form action="processorder.php" method="post">
  <table style="border: 0px;">
    <tr style="background: #cccccc;">
    <td style="width: 150px; text-align: center;">Item</td>
    <td style="width: 15px; text-align: center;">Quantity</td>
  </tr>
  <tr>
    <td>Tires</td>
    <td><input type="text" name="tireqty" size="3" maxlength="3" /></td>
  </tr>
  <tr>
    <td>Oil</td>
    <td><input type="text" name="oilqty" size="3" maxlength="3" /></td>
  </tr>  
  <tr>
    <td>Spark Plugs</td>
    <td><input type="text" name="sparkqty" size="3" maxlength="3" /></td>
  </tr>
  <tr>
    <td>Shipping Address</td>
    <td><input type="text" name="address" size="50" /></td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: center;"><input type="submit" value="Submit Order" /></td>
  </tr>
  
</table>
</form>




<?php include ('include/footer.php'); ?>