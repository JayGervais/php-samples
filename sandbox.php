<?php 
$page_title = 'Sandbox';
include ('include/header.php');
?>
<h1 align="center">Sandbox</h1>
<?php 
// create function for ad
function create_ad() {
  echo '<p class="ad">Strippers! Cocaine! Everything you need! Strippers! Cocaine! Everything you need!</p>';
}
// show ad
create_ad();
?>

<h2 align="center">Trip Calculator</h2>
<form action="" method="post">
  <p>Distance (in KM): <input type="text" name="distance" /></p>
  <p>Average price per gallon: <span class="input">
    <input type="radio" name="gallon_price" value="3.00" /> 3.00
    <input type="radio" name="gallon_price" value="3.50" /> 3.50
    <input type="radio" name="gallon_price" value="4.00" /> 4.00
  </span></p>
  <p>Fuel Efficiency: <select name="efficiency">
    <option value="10">Terrible</option>
    <option value="20">Decent</option>
    <option value="30">Very Good</option>
    <option value="50">Amazing</option>
  </select></p>
  <p><input type="submit" name="submit" value="Calculate!" /></p>
</form>


<?php 
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
    <p>The total cost of driving ' . $_POST['distance'] . ' miles, averaging ' . $_POST['efficiency'] . ' miles per gallon, and paying an average of $' . $_POST['gallon_price'] . ' per gallon, is $' . number_format($dollars, 2) . '. if you drive at an average of 65 miles per hour, the trip will take approximately ' . number_format($hours, 2) . ' hours.</p>'; 
  } else {

    //invalid submission
    echo '<h1>Go fuck yourself!</h1>
    <p class="error">Enter some real values.</p>';
}}



?>

<?php 
// call ad
create_ad();
?>



<?php include ('include/footer.php'); ?>