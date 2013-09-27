<?php
	include_once 'header.php';
	?>
	<!--
	File Name: projects.php
	Author's Name: Sukhdeep Singh
	Website Name: My Portfolio
	Desc : This is a projects.php file that show the list of all the projects and assignments that I have done.
			It includes brief description of all the work and link to the project code or live sites or to demo videos.
	-->
	 <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
    	<h1>Projects</h1>
    	<hr class="featurette-divider">
    	<h2>Buzzwords</h2>
		<p>JAVA, HTML5, CSS3, PHP, C#, C, C++, SQL, JavaScript.</p>
		 <!-- Marketing messaging and featurettes
    ================================================== -->
     <!-- START THE FEATURETTES -->

      <div class="row featurette">
        <div class="col-md-7">
        	<div id="jchat">
          <h2 class="featurette-heading">The Java Chat Server. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">This is a Chat Server designed as a open chat room. I built this project two years ago using Swing, Multithreading, RMI and Socket Programming of Java. </p>
          </div>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/jchat.jpg" width="500", height="500" alt="Java Chat Server image">
        </div>
        <p><a class="btn btn-large btn-primary" href="https://github.com/Sukh9212/Chat-Server" target="_blank">Get the Code</a></p>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/abee.jpg" width="500", height="500" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
        <div id="ab">
          <h2 class="featurette-heading">Abee Concrete. <span class="text-muted">Company Website.</span></h2>
          <p class="lead">A Website for a concrete company from Brampton,Ontario. This was a first Contract work I did just after the Semester one of my Program. This site covers the basic needs of the company and represents their work.</p>
        </div>
        </div>
        <p><a class="btn btn-large btn-primary" href="http://abeeconc.com" target="_blank">Visit Site</a></p>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Tic Tac Toe Game. <span class="text-muted">Running on Hackvision.</span></h2>
          <p class="lead">I built this game during the Semester one of my program for the Computer Architecture Course. It Runs on Hackvision Which is a Modified Version of Arduino designed specifically for Games.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/Tictactoe.jpg" width="500", height="500" alt="Generic placeholder image">
        </div>
        <p><a class="btn btn-large btn-primary" href="http://www.youtube.com/watch?v=LjqEQH7oU7s" target="_blank">View Gameplay</a></p>
        <p><a class="btn btn-large btn-primary" href="https://github.com/Sukh9212/Tic-Tac-Toe-Hackvision" target="_blank">Get the Code</a></p>
      </div>

      <hr class="featurette-divider">
      
      <div class="row featurette">
      	 <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/smartphones.jpg" width="500", height="500" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Smartphones Today. <span class="text-muted">Check it out.</span></h2>
          <p class="lead">Wanna buy a New Phone??. Check this site out first to know every specific detail about the Current Smartphones available in the market. This site is built using php and uses a dynamic content stored in database.</p>
        </div>
        <p><a class="btn btn-large btn-primary" href="http://webdesign4.georgianc.on.ca/~200245935/comp1006/assign2/default.php" target="_blank">Visit Site</a></p>
      </div>

      <!-- /END THE FEATURETTES -->
	<?php
    include_once 'footer.php';
    ?>
