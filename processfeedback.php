<?php 

// create variable names
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

// set up static information
$toaddress = "mrjaygervais@gmail.com";

$subject = "Feedback from website";

$mailcontent = "Customer name: ".str_replace("\r\n", "", $name)."\n".
				"Customer email ".str_replace("\r\n", "", $email)."\n".
				"Customer comments:\n".str_replace("\r\n", "", $feedback)."\n";

$fromaddress = "From: www.jaygervaisdesign.com";

// invoke mail() function to send mail
mail($toaddress, $subject, $mailcontent, $fromaddress);

?>

<!DOCTYPE html>
<head>
<title>Feedback Submitted</title>
</head>
<body>

<h1>Feedback Submitted</h1>
<p>Your Feedback has been sent, mother fucker</p>
<p><?php echo n12br(htmlspecialchars($feedback)); ?></p>
</body>
</html>