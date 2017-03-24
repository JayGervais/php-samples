<?php 
$page_title = 'Front Page - Image Rotation';
include ('include/header.php');
?>

<?php 
$pictures = array('img/adventure-time-season-5-post.jpg', 'img/adwords2.png', 'img/atd_logo2.png', 'img/opi.png', 'img/tcd_logo.jpg', 'img/pixels_logo_purple-cropped.jpg', 'img/tcd_logo.png');
shuffle($pictures);
?>

<h1 align="center">Front Page - Image Rotation</h1>

<div align="center">
<table style="width: 100%; border: 0;">
<tr>
<?php 
for ($i = 0; $i < 3; $i++) {
	echo "<td style=\"width: 100%; text-align: center\">
	<img src=\"";
	echo $pictures[$i];
	echo "\"/></td>";
}
?>
</tr> 

</div>



<?php include ('include/footer.php'); ?>