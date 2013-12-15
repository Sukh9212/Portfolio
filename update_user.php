<!--
File Name: update_user.php

Author's Name: Sukhdeep Singh

Web Site Name: My Portfolio

File Description: This page takes the input from the edit.php page and makes the updation in the databse
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            session_start();
            //to make sure that this page cannot be accesed without logging into the control panel
            if (empty($_SESSION['user_id'])) {
                    header('Location:login.php');
            }
            else {
                $conn = mysqli_connect('webdesign4', 'dbxxxxxxxxx', 'xxxxx', 'dbxxxxxxxx') or die('Error connecting to MySQL server.');
                $email = $_POST['email'];
                $id = $_POST['id'];
                //make sure the id is valid numeric
                if (is_numeric($id)) {
                    //write the update statement
                    $sql = "UPDATE admin SET email = '$email' WHERE id = $id";
                    //excecute the query
                    mysqli_query($conn, $sql) or die('Error updating database.');
                    mysqli_close($conn);
                    //redirect back to the admins page
                    header('Location: business.php');
                    }
                    else {
                         echo 'Invalid ID.  Click <a href="javascript:history.go(-1)">HERE</a> to go back.';
                    }
            }
        ?>
    </body>
</html>
