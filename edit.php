<!--
File Name: edit.php

Author's Name: Sukhdeep Singh

Web Site Name: My Portfolio

File Description: This page edits the details of the selected contact from the database
-->
<?php
include_once('header.php');

            session_start();
            //so that the page cannot be accessed without logging into the control panel
            if (empty($_SESSION['user_id'])) {
                header('Location:login.php');
            }

            else{
                $conn = mysqli_connect('webdesign4', 'dbxxxxxxxxx', 'xxxxx', 'dbxxxxxxxxx') or die('Error connecting to MySQL server.');
                //grab the selected is from the url
                $id = $_GET['id'];
                //sql statement to select the user to edit based on the id passed in the url
                $sql = "SELECT * FROM business_contacts WHERE id = $id";
                $result = mysqli_query($conn, $sql) or die('Error querying database.');
                //fetch the information from the database and hold it in variables to display later
                while ($row = mysqli_fetch_array($result)) {
                    $name = $row['name'];
					$phone = $row['phone'];
					$address = $row['address'];
					$position = $row['position'];
                    $id = $row['id'];
                } 

                mysqli_close($conn);
             }
        ?>
		<div class="container">
        <form method="post" class="form-signin" action="update.php">
        	<h2 class="form-signin-heading">Edit User</h2> 
        
                <label>Name</label>
                <input name="name" type="text" class="input-block-level" value="<?php echo $name?>">
        
        
                <label>Phone</label>
                <input name="phone" type="text" class="input-block-level" value="<?php echo $phone?>">
        
                        <label>Address</label>
                <input name="address" type="text" class="input-block-level" value="<?php echo $address?>">
        
        
                <label>Position</label>
                <input name="position" type="text" class="input-block-level" value="<?php echo $position?>">
        
        <!--This is required to send the id to the next page, this should be hidden because we don't want to change the id-->
        <input type="hidden" name="id" value="<?php echo $id?>">
        <button class="btn btn-large btn-primary" type="submit">Save</button>

        </form>
        </div>
        <div>
<?php
include_once('footer.php');
?>
