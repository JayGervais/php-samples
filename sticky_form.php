<?php 
$page_title = 'Sticky Form';
include ('include/header.php');
?>
<h1 align="center">Sandbox</h1>

<input type="text" name="city" value="<?php echo $city ?>" />
<input type="radio" name="gender" value="F" <?php if($gender == 'F') {
  echo 'checked="checked"'; } ?> />
<textarea name="comments" rows="10" cols="50"><?php echo $comments; ?></textarea>
<?php 

echo '<select name="year">';
for ($y = 2011; $y <= 2021; $y++) {
  echo "<option value=\"$y\"";
  if ($year == $y) {
    echo ' selected="selected"';
  } echo ">$y</option>";
} echo 
'</select>';

?>







<?php include ('include/footer.php'); ?>