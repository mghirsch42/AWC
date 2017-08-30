<!DOCTYPE html>
<html lang="en">

<?php

$from_name = $_POST["name"];
$from_email = $_POST["email"];
$message = $_POST["message"];
$success = "There was an error. Please try again.";

require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.awc.oucreate.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'default@awc.oucreate.com';                 // SMTP username
$mail->Password = 'Boomsoonawc17';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($from_email, $from_name);
$mail->addAddress('default@awc.oucreate.com', 'AWC Exec');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo($from_email, $from_name);
$mail->addCC('awc@ou.edu');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "Contact from Website";
$mail->Body    = $message;

if($mail->send()) {
    $success = "Message sent!";
}


?>


<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>OU AWC</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <!--<link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css"> -->

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/AWC%20cropped.jpg">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  
<div class="container">
    
    <!-- Header Image -->
    <div id="headerImg">
        <img src="images/AWC%20cropped.jpg">
    </div> <!-- /header-->
    
    <!-- Nav Bar -->
    <div id="nav">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a class="active" href="contact.html">Contact</a></li>
            <li><a href="calendar.html">Calendar</a></li>
        </ul>
    </div> <!-- /nav -->
    
    <!-- Content -->
    <div id="content">
        
        <h3>Send us an email!</h3>
        <?php echo $success ?>
        <p>Thank you for contacting us, we will get back to you as soon as possible! </p>
        
    </div> <!-- /content -->
    
    <!-- Footer -->
    <div id="footer">
        <small>The Association for Women in Computing is a registered student organization at the University of Oklahoma.</small>
    </div>  <!-- /footer -->
</div>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
