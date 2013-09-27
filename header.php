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
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.png">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200' rel='stylesheet' type='text/css'>

    <title>Sukhdeep Singh</title>

    <!-- Bootstrap core CSS -->
    
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  
  <!-- Inline Script for Showing the active page in the nav bar-->
  <script>
     $(function() {
        $('.navbar-nav li a').click(function() {
           $('.navbar-nav li').removeClass();
           $($(this).attr('href')).addClass('active');
        });
     });
  </script>
<!-- NAVBAR
================================================== -->
  <body>
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
              <img class="navbar-brand" src="img/developer.jpg" width="80" height="70"/>
              <a class="navbar-brand" href="#">My Portfolio</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Me</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="https://github.com/Sukh9212" target="_blank">GitHub</a></li>
                <li><a href="contact.php">Contact Me</a></li>
              <!--  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
              </li>-->
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

