<!--Include the header.php-->
<?php
include_once 'header.php';
?>
<!--
File Name: index.php
Author's Name: Sukhdeep Singh
Website Name: My Portfolio
Desc : this is a index.php file which is the home page of the website.
-->
<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="item active">
			<!-- <img src="data:image/png;base64," data-src="holder.js/100%x500/auto/#777:#7a7a7a/text:First slide" alt="First slide">-->
			<div class="container">
				<div class="carousel-caption">
					<h1>Web Development</h1>
					<p>
						Working as a Web developer is always something very creative. Web is the most alive and open platform for Developers and Designers. I specialize in both php and ASP.NET while utilizing Twitter's Bootstrap front-end Framework.
					</p>
					<p>
						<a class="btn btn-large btn-primary" href="projects.php#ab">View Work</a>
					</p>
				</div>
			</div>
		</div>
		<div class="item">
			<!--<img src="data:image/png;base64," data-src="holder.js/100%x500/auto/#777:#7a7a7a/text:Second slide" alt="Second slide">-->
			<div class="container">
				<div class="carousel-caption">
					<h1>Software Development</h1>
					<p>
						Software Development using Java or Microsoft C# programming language.
					</p>
					<p>
						<a class="btn btn-large btn-primary" href="projects.php">See Work</a>
					</p>
				</div>
			</div>
		</div>
		<div class="item">
			<!--<img src="data:image/png;base64," data-src="holder.js/100%x500/auto/#777:#7a7a7a/text:Third slide" alt="Third slide">-->
			<div class="container">
				<div class="carousel-caption">
					<h1>Powershell Scripting</h1>
					<p>
						I specialize in developing scripts using Windows Powershell and VMware PowerCLI.
					</p>
					<p>
						<a class="btn btn-large btn-primary" href="projects.php">See Work</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div><!-- /.carousel -->

<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">
	<h1 class="text-center">Creating thoughtful user experiences</h1>
	<span class="text-muted"><h3 class="text-center">Writing efficient code!</h3></span>
	<p class="text-center">
		Computer Programming is a passion to me. My main focus always is to build user-friendly, modern premium user interfaces as well as clean, high performance back-ends. I value premium build quality of products and I love having immense attention to detail in every aspect of the development process. I have had only one objective so far and that is to become highly knowledgeable and well established Computer Programmer/Developer.
	</p>
	<!-------------Featured Work Slider----------------->
	<span class="text-muted"><h3>Featured Work</h3></span>	
	<div class="fotorama" data-transition="crossfade" data-allowfullscreen="native" data-autoplay="true" data-stopautoplayontouch="false" data-width="100%" data-ratio="700/467" data-minwidth="400" data-maxwidth="1000" data-minheight="300" data-maxheight="100%">
		<img src="img/gplus.jpg">
		<img src="img/abee.jpg">
		<img src="img/SRGSem4.png">		
		<img src="img/smartphones.jpg">
	</div>

	<!-- Keep Connected Panel-->
	<div id="connect_panel">
		<span class="text-muted"><h3>Keep Connected</h3></span>
		<a class="connect_icons" href="http://ca.linkedin.com/pub/sukhdeep-singh/74/309/574/" target="_blank"><div id="icons" data-icon="c"></div></a>
		<a class="connect_icons" href="https://github.com/Sukh9212" target="_blank"><div id="icons" data-icon="e"></div></a>		
		<a class="connect_icons" href="https://twitter.com/Sukh9212" target="_blank"><div id="icons" data-icon="b"></div></a>
		<a class="connect_icons" href="https://www.facebook.com/Sukh9212" target="_blank"><div id="icons" data-icon="a"></div></a>
		<a class="connect_icons" href="http://www.youtube.com/channel/UCVamaOWXDn0HdEZCJj5595Q" target="_blank"><div id="icons" data-icon="d"></div></a>
		
	</div>
	</div>
	<!--include the footer.php page-->
	<?php
	include_once 'footer.php';
	?>
