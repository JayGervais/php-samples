<?php 
$page_title = 'Examples 1';
include ('include/header.php');
?>


<?php 
// create variables
$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];
$address = preg_replace('/\t|R/',' ',$_POST['address']);
$document_root = $_SERVER['DOCUMENT_ROOT'];
$date = date('H:i, js F Y');
?>


<h1 align="center">Order's With Bob</h1>
<?php 
echo '<p>Thanks for your fucking order.';
echo ' Your order was made at ';
echo date('H:i, jS F Y');
echo '</p>';

echo '<h2>Your order is as follows:</h2><br />';

/*
echo htmlspecialchars($tireqty).' tires<br />';
echo htmlspecialchars($oilqty).' big old bottles of oil<br />';
echo htmlspecialchars($sparkqty).' god damn spark plugs.<br />';
*/ 

$totalqty = 0;
$totalqty = $tireqty + $oilqty + $sparkqty;
echo "<p>Items ordered: ".$totalqty."<br /><br /><br />";
$totalamount = 0.00;

// new part
if ($totalqty == 0) {
	echo "You did not order anything.<br />";
} else {
	if ($tireqty > 0) {
		echo htmlspecialchars($tireqty).' tires<br />';
	} if ($oilqty > 0) {
		echo htmlspecialchars($oilqty).' bottles of oil<br />';
	} if ($sparkqty > 0) {
		echo htmlspecialchars($sparkqty).' spark plugs<br />';
	}
}


define('TIREPRICE', 100);
define('OILPRICE', 10);
define('SPARKPRICE', 4);


$totalamount = $tireqty * TIREPRICE
			+ $oilqty * OILPRICE
			+ $sparkqty * SPARKPRICE;

echo "Subtotal: $".number_format($totalamount,2)."<br /><br /><br />";

$taxrate = 0.05;
$totalamount = $totalamount * (1 + $taxrate);
echo "Total including tax (5%): $".number_format($totalamount,2)."</p>";
 
echo "<p>Address to ship to is: ".htmlspecialchars($address)."</p>";

$outputstring = $date."\t".$tireqty." tires \t".$oilqty." oil\t".$sparkqty." spark plugs\t\$".$totalamount."\t". $address."\n";

// open file for appending
$fp = @fopen("document_root/../orders/orders.txt", 'ab');
if (!$fp) {
	echo "<p><strong>Your order could not be processed. The system is broken as fuck!</strong></p>";
	exit;
}
flock ($fp, LOCK_EX);
fwrite($fp, $outputstring, strlen($outputstring));
flock($fp, LOCK_UN);
fclose($fp);

echo "<p>Order Written</p>";

?>


<?php include ('include/footer.php'); ?>