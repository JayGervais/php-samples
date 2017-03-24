<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Jay Gervais Design</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta name="description" content="Web Developer, Graphic Designer, Online Marketer and Technical Writer located in Red Deer, AB">
    <meta name="keywords" content="web development, graphic design, technical writing, online marketing, social media marketing, Adwords, red deer, alberta">
  </head>
  <body>

<!-- Website Loader -->
<!--<body onload="myFunction()" style="margin:0;">
<div id="loader"></div>-->
<!-- End Website Loader -->

<!--<div style="display:none;" id="myDiv" class="animate-bottom">-->

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Jay Gervais</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="http://jaygervaisdesign.com/#about">About</a></li>
            <li><a href="http://jaygervaisdesign.com/#services">Services</a></li>
            <li><a href="http://jaygervaisdesign.com/#samples">Samples</a></li>
            <li><a href="http://jaygervaisdesign.com/#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<div class="container">
<br /><br />
<?php
// check variables
$hidden = $_POST['hidden'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$comments = $_POST['comments'];

// add the date the form was submitted
$date = date('Y-m-d H:i:s');

// print a thank you
print "<p>Thank you $firstname $lastname. Your message has been sent.</p>";

// send this data to your email address

$to = "mrjaygervais@gmail.com";
$subject = "Contact Me";
$body = "Date: $date \n Form Request: $hidden \n First Name: $firstname \n Last Name: $lastname \n E-Mail: $email \n Comment: $comments \n\n";

mail($to,$subject,$body);

?>
<p><a href="http://jaygervaisdesign.com">Go back...</a></p>

</div><!-- /.container -->      
    <footer class="footer">
      <div class="container">
        <p class="text-muted">&copy Jay Gervais</p>
      </div>
    </footer>
 </div><!--Loader-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>

  </body>
</html>