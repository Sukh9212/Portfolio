<!--
File Name: footer.php
Author's Name: Sukhdeep Singh
Website Name: My Portfolio
Desc : This is a footer file that includes all the footer information which is required to be consistent throughout the site.
-->

<hr class="featurette-divider">
</div><!-- /.container -->

<!-- FOOTER -->
<footer>
	<p class="pull-right">
		<a href="#">Back to top</a>
	</p>
	<p>
		&copy;Sukhdeep Singh 2015 &middot; All Rights Reserved &middot; <a href="legal.php#privacy">Privacy</a> &middot; <a href="legal.php#terms">Terms</a>
	</p>
	<p>
		<a href="mailto:sukhdeepsaini12@gmail.com">sukhdeepsaini12@gmail.com</a>
	</p>
</footer>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script async="" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script async="" src="js/holder.js"></script>
<script async="" src="js/bootstrap.js"></script>
<!-- fotorama js-->
<script async="" src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.3/fotorama.js"></script>
<!-- bootbox code -->
<script async="" src="js/bootbox.js"></script>    
    <script>
        $(document).on("click", ".alert", function(e) {
           bootbox.alert(<?php echo 'Name: ' . $row['name'];?>);
            });
    </script>
</body>
</html>
