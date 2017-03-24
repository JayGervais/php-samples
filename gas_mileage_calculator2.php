<?php 
$page_title = 'Gas Mileage Calculator';
include ('include/header.php');
?>
<h1 align="center">Sandbox</h1>
<?php 

?>

<h2 align="center">Trip Calculator</h2>
<form action="" method="post">
  <p>Distance (in KM): <input type="text" name="distance" value="<?php if (isset($_POST['distance'])) { echo $_POST['distance']; } ?>" /></p>
  <p>Average price per gallon: <span class="input">
    

<?php 
create_gallon_radio('3.00');
create_gallon_radio('3.50');
create_gallon_radio('4.00');
?>


  </span></p> 
  <p>Fuel Efficiency: <select name="efficiency">
    <option value="10" <?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '10')) { echo 'selected="selected"'; } ?>>Terrible</option>
    <option value="20" <?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '20')) { echo 'selected="selected"'; } ?>>Decent</option>
    <option value="30" <?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '30')) { echo 'selected="selected"'; } ?>>Very Good</option>
    <option value="50" <?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '50')) { echo 'selected="selected"'; } ?>>Amazing</option>
  </select></p>
  <p><input type="submit" name="submit" value="Calculate!" /></p>
</form>


<?php 
// creates radio button
function create_gallon_radio($value) {
  // start element
  echo '<input type="radio" name="gallon_price" value="' . $value . '"';
  // check sticky
  if (isset($_POST['gallon_price']) && ($_POST['gallon_price'] == $value)) {
    echo ' checked="checked"';
  } echo " /> $value ";
}

// trip calculator example
// check for form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  // validate form
  if (isset($_POST['distance'], $_POST['gallon_price'], $_POST['efficiency']) && is_numeric($_POST['distance']) && is_numeric($_POST['gallon_price']) && is_numeric($_POST['efficiency']) ) {

    //calculate results
    $gallons = $_POST['distance'] / $_POST['efficiency'];
    $dollars = $gallons * $_POST['gallon_price'];
    $hours = $_POST['distance']/65;

    //print results
    echo '<h2>Total Estimate Cost</h2>
    <p>The total cost of driving ' . $_POST['distance'] . ' miles, averaging ' . $_POST['efficiency'] . ' miles per gallon, and paying an average of $' . $_POST['gallon_price'] . ' per gallon, is $' . number_format($dollars, 2) . '. If you drive at an average of 65 miles per hour, the trip will take approximately ' . number_format($hours, 2) . ' hours.</p>'; 
  } else {

    //invalid submission
    echo '<h1>Go fuck yourself!</h1>
    <p class="error">Enter some real values.</p>';
}}



?>





<?php include ('include/footer.php'); ?>