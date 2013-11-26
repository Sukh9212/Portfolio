<!--
File Name: edit_users.php

Author's Name: Sukhdeep Singh

Web Site Name: My Portfolio

File Description: This page edits the details of the selected user from the database
-->
<?php require_once 'header.php'; ?>

      
        <?php
            session_start();
            //so that the page cannot be accessed without logging into the control panel
            if (empty($_SESSION['user_id'])) {
                header('Location:login.php');
            }

            else{
                $conn = mysqli_connect('webdesign4', 'db200245935', '37949', 'db200245935') or die('Error connecting to MySQL server.');
                //grab the selected is from the url
                $id = $_GET['id'];
                //sql statement to select the user to edit based on the id passed in the url
                $sql = "SELECT * FROM admin WHERE id = $id";
                $result = mysqli_query($conn, $sql) or die('Error querying database.');
                //fetch the information from the database and hold it in variables to display later
                while ($row = mysqli_fetch_array($result)) {
                    $email = $row['email'];
                    $id = $row['id'];
                } 

                mysqli_close($conn);
             }
        ?>

        <form method="post" class="form-signin" action="update_user.php">
        	<h2 class="form-signin-heading">Edit User</h2>  
             <label>Email</label>
                <input name="email" class="input-block-level" value="<?php echo $email?>">       
        <!--This is required to send the id to the next page, this should be hidden because we don't want to change the id-->
        <input type="hidden" name="id"  class="input-block-level"value="<?php echo $id?>">     
        <button class="btn btn-large btn-primary" type="submit">Save</button>

        </form>
 <?php require_once'footer.php'; ?>
