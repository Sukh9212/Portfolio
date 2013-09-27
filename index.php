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
              <h1>Web Development.</h1>
              <p>Working as a Web developer is always something very creative. The visual Element of the Web always makes me do something unique and build something creative.</p>
              <p><a class="btn btn-large btn-primary" href="projects.php#ab">View Work</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <!--<img src="data:image/png;base64," data-src="holder.js/100%x500/auto/#777:#7a7a7a/text:Second slide" alt="Second slide">-->
          <div class="container">
            <div class="carousel-caption">
              <h1>Software Development.</h1>
              <p>Building Standalone Desktop Softwares using Java &amp; C# is what i've always enjoyed developing. Working with Java is always so Comfortable for me.</p>
              <p><a class="btn btn-large btn-primary" href="projects.php#jchat">See Work</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <!--<img src="data:image/png;base64," data-src="holder.js/100%x500/auto/#777:#7a7a7a/text:Third slide" alt="Third slide">-->
          <div class="container">
            <div class="carousel-caption">
              <h1>App Development.</h1>
              <p>Building Android apps with Java again is the Language that I love the most is fun to do and additionaly I've worked with new Windows 8,8.1 app developments as well.</p>
              <p><a class="btn btn-large btn-primary" href="projects.php">See Work</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



   
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
		<h1>Creating thoughtful user experinces</h1>
		<h2>It's all about Code</h2>
		<p>Computer Programming as a profession is what I enjoy doing the most. It's really fun working with System oriented languages
			such as Java,C#,C,C++ and the Web oriented Languages such as HTML5,CSS3,PHP,JavaScript. While I find the Visual element 
			of the Web very attractive, visually Stunning and engaging, the System Programming enables me to create powerful
			System and Mobile Apps.</p>
			
		<!-- Keep Connected Panel-->
		<div id="connect_panel">
		<h4>Keep Connected...</h4>
		<a class="connect_icons" href="https://www.facebook.com/Sukh9212" target="_blank"><div id="icons" data-icon="a"></div></a>
		<a class="connect_icons" href="https://twitter.com/Sukh9212" target="_blank"><div id="icons" data-icon="b"></div></a>
		<a class="connect_icons" href="ca.linkedin.com/pub/sukhdeep-singh/74/309/574/" target="_blank"><div id="icons" data-icon="c"></div></a>
		<a class="connect_icons" href="http://www.youtube.com/channel/UCVamaOWXDn0HdEZCJj5595Q" target="_blank"><div id="icons" data-icon="d"></div></a>
		<a class="connect_icons" href="https://github.com/Sukh9212" target="_blank"><div id="icons" data-icon="e"></div></a>
		</div>
		<!--include the footer.php page-->
    <?php
    include_once 'footer.php';
    ?>
