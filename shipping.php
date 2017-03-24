<?php 
$page_title = 'Shipping';
include ('include/header.php');
?>


<h1 align="center">Shipping</h1>

<table style="border: 0px; padding: 3px;">
	<tr>
		<td style="background: #cccccc; text-align: center;">Distance</td>
		<td style="background: #cccccc; text-align: center;">Cost</td>
	</tr>
</table>
<?php 
for ($distance = 50; $distance <= 250; $distance += 50) {
	echo "<tr>
			<td style=\"text-align: right;\">".$distance."</td>
			<td style=\"text-align: right;\">".($distance / 10)."</td>
			</tr>\n";
}


?>


<?php include ('include/footer.php'); ?>