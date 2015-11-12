<?php
require 'vendor/autoload.php';
include_once 'header.php';
?>
<!--
File Name: contact.php
Author's Name: Sukhdeep Singh
Website Name: My Portfolio
Desc : This is a Contact.php file that include My contact information .
-->

<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">
<h1 class="text-center">Get in Touch</h1>
<hr class="featurette-divider">

<?php
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

//Sendgrid Login credentials
$username = 'azure_05257da9c707444ca60d20778077daf0@azure.com';
$password = 'MaA3K6Y7Ji9t1rG';

//Define variables and set to empty values
$nameErr = $emailErr = "";
$name = $email = $msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$msg = $_POST["message"];
$msg = test_input($msg);

if (empty($_POST["inputName"])) {
$nameErr = "Name is required";
} else {
$name = test_input($_POST["inputName"]);
}

if (empty($_POST["inputEmail"])) {
$emailErr = "Email is required";
} else {
$email = test_input($_POST["inputEmail"]);
}

if (!((empty($name)) and (empty($email))))
{

$sendgrid = new SendGrid($username, $password);
$gridEmail = new SendGrid\Email();
$gridEmail->addTo('sukhdeepsaini12@gmail.com')->

setFrom($email)->
setFromName($name)->
setSubject('E-mail from portfolio Website')->
setText('Hello Sukhdeep!')->
setHtml($msg);

$sendgrid->send($gridEmail);

?>

<div class="alert alert-success alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<p>Thank you. You message has been successfully received.</p>
</div>
<?php
}
}
?>

<form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<div class="form-group">
<label for="inputName" class="col-sm-2 control-label">Full Name*</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="inputName" name="inputName" placeholder="Full Name">
<span class="text-danger"><?php echo $nameErr; ?></span>
</div>
</div>
<div class="form-group">
<label for="inputEmail" class="col-sm-2 control-label">Email*</label>
<div class="col-sm-6">
<input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
<span class="text-danger"><?php echo $emailErr; ?></span>
</div>
</div>

<div class="form-group">
<label for="inputMessage" class="col-sm-2 control-label">Message</label>
<div class="col-sm-6">
<textarea class="form-control" rows="3" id="message" name="message"></textarea>
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-6">
<button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
</div>
</div>
</form>

<!-- Keep Connected Panel-->
<div id="connect_panel">
<span class="text-muted"><h3>Keep Connected</h3></span>
<a class="connect_icons" href="http://ca.linkedin.com/pub/sukhdeep-singh/74/309/574/" target="_blank"><div id="icons" data-icon="c"></div></a>
<a class="connect_icons" href="https://github.com/Sukh9212" target="_blank"><div id="icons" data-icon="e"></div></a>
<a class="connect_icons" href="https://twitter.com/Sukh9212" target="_blank"><div id="icons" data-icon="b"></div></a>
<a class="connect_icons" href="https://www.facebook.com/Sukh9212" target="_blank"><div id="icons" data-icon="a"></div></a>
<a class="connect_icons" href="http://www.youtube.com/channel/UCVamaOWXDn0HdEZCJj5595Q" target="_blank"><div id="icons" data-icon="d"></div></a>

</div>
<?php
include_once 'footer.php';
?>