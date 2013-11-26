<!--
File Name: login.php

Author's Name: Sukhdeep Singh

Web Site Name: My Portfolio

File Description: This is the login page for the business contacts page
-->
<!--Include the header.php-->
<?php
include_once 'header.php';

 session_start();
            //so that the page cannot be accessed without logging into the control panel
            if (!(empty($_SESSION['user_id']))) {
                header('Location:business.php');
            }
?>
    <div class="container">

      <form method="post" class="form-signin" action="validate.php">
        <h2 class="form-signin-heading">Please sign in</h2>        
        <input name="email" type="text" class="input-block-level" placeholder="Email address">     
        <input name="password" type="password" class="input-block-level" placeholder="Password">
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>