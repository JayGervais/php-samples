<?php 
$page_title = 'Playing Around';
include ('include/header.php');
?>
<h1 align="center">Playing Around</h1>

<?php 
/* function create_table($data) {
	echo '<table>';
	reset($data);
	$value = current($data);
	while($value) {
		echo "<tr><td style=\"border: 2px solid black; padding: 10px;\">$value</td></tr>\n";
		$value = next($data);
	}
	echo '</table>';
}
$my_data = ['first data', 'two on top of the cake', 'four pickup sticks', 'fuckin eh', 'what else?'];
create_table($my_data); */

?>

<?php 

function create_table($data, $header=NULL, $caption=NULL) {
	echo '<table>';
	if ($caption) {
		echo "<caption>$caption</caption>";
	}
	if ($header) {
		echo "<tr><th>$header</th></tr>";
	}
	reset($data);
	$value = current($data);
	while ($value) {
		echo "<tr><td>$value</tr></td>";
		$value = $next($data);
	}
	echo '</table>';
}

$my_data = ['first data', 'two on top of the cake', 'four pickup sticks', 'fuckin eh', 'what else?'];
$my_header = 'DATA';
$my_caption = 'YEEEEHAWWW';
create_table($my_data, $my_header, $my_caption);
?>



<?php include ('include/footer.php'); ?>