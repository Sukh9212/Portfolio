<?php
  header("Cache-Control: max-age=2592000");

 $offset = 60 * 60 * 24 * 3;
 $ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
 Header($ExpStr);
?>
<!--
File Name: header.php
Author's Name: Sukhdeep Singh
Website Name: My Portfolio
Desc : This is a header file that includes commen elements required in each page of website
such as starting html tags(!Doctype,html,head,body), css and font links, and a nav bar which will be similar in each page.
-->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Sukhdeep Singh Web Portfolio, Sukhdeep Singh Web Developer, Sukhdeep Singh Full Stack Developer, Sukhdeep Singh Barrie, Sukhdeep Singh Georgian College">
		<meta name="author" content="Sukhdeep Singh">
		<meta name="theme-color" content="#3F51B5">
		<link rel="shortcut icon" href="img/favicon.png">
	<!--	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200' rel='stylesheet' type='text/css'>-->

		<title>Sukhdeep Singh - Full Stack Developer</title>
<!--		<script src="js/redirection-mobile.js"></script>
		<script>
			SA.redirection_mobile({
				mobile_url : "webdesign4.georgianc.on.ca/~200245935/advweb/portfolioMobile/",
				mobile_prefix : "http"
			});
		</script>
		<!-- fotorama.css-->
		<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.3/fotorama.css" rel="stylesheet">
		<!-- Bootstrap core CSS -->
			
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/print.css" rel="stylesheet" media="print">
		<link href="css/desktop.css" rel="stylesheet" media="(min-width: 768px)">
		<link href="css/mobile.css" rel="stylesheet" media="(max-width: 768px)">
	

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="../../assets/js/html5shiv.js"></script>
		<script src="../../assets/js/respond.min.js"></script>
		<![endif]-->

		<!-- Custom styles for this template -->
		<link href="css/carousel.css" rel="stylesheet">
		<script async src="js/bootbox.js"></script>
	</head>

	<!-- NAVBAR
	================================================== -->
	<body>
		<header>
		<div class="navbar-wrapper">
			
			<div class="container">
				
				<div class="navbar navbar-inverse navbar-static-top">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="index.php">My Portfolio</a>
						</div>
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav">
								
								<li>
									<a href="about.php">About Me</a>
								</li>
								<li>
									<a href="projects.php">Projects</a>
								</li>
								<li>
									<a href="services.php">Services</a>
								</li>
								<li>
									<a href="https://github.com/Sukh9212" target="_blank">GitHub</a>
								</li>
								<li>
									<a href="contact.php">Contact Me</a>
								</li>
								<li>
									<a href="login.php">Business Contacts</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
		</header>

