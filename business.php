<!--
File Name: business.php

Author's Name: Sukhdeep Singh

Web Site Name: My Portfolio

File Description: This page show the list of my business contacts and registered users and has the ability to edit or delete 
contacts and the registered users
-->
<!--Include the header.php-->
<?php
include_once 'header.php';
?>
<div class="container marketing">

<h1>Business Contacts</h1>
<a href="logout.php"><h3>Logout</h3></a>
<hr class="featurette-divider">
<?php

        //access current session
        session_start();

        //evaluate the user_id stored in the session that was set on validate.php
        if(empty($_SESSION['user_id']))
        {
                header('Location:login.php');
        }
        else{
        //1 Write our sql command to get the list of admins
        $sql = "SELECT * FROM business_contacts order by name;";
        //2. Connect to the databse
        $conn = mysqli_connect('webdesign4','db200245935','37949','db200245935') or die(mysqli_error());
        //3. excecute our query & store the results in a variable
        $result = mysqli_query($conn,$sql);
        //4. crate our table and header row with html tags
        echo '<table><tr><th>Name</th><th class="padded">Edit</th><th class="padded">Delete</th></tr>';
        //5 Loop through the result from the query and output them 1 at a time to the page
        //<tr> creates a new row
        //<td> creates a new column
        while ($row = mysqli_fetch_array($result)) {
                echo '<tr><td><a href="#" class="alert" onclick="alert(\'Name: ' . $row['name'] . ',  Phone:  ' . $row['phone'] . ',  Address:  ' . $row['address'] . ',  Position:  '. $row['position'] . '\');">' . $row['name'] . '</a></td><td class="padded"><a href="edit.php?id=' . $row['id'] . '">Edit</a></td><td class="padded"><a href="delete.php?id=' . $row['id'] . '" onclick="return confirm(\'Are You Sure You Want To Delete This Contact?\');">Delete</a></td></tr>';
        }
        //6. close the table
        echo'</table>';
		
		echo'<h1>Registered Admins</h1>';
		echo '<hr class="featurette-divider">';
		
		 $sql = "SELECT * FROM admin";
      
       
        $result = mysqli_query($conn,$sql);
       
        echo '<table><tr><th>Email</th><th class="padded">Edit</th><th class="padded">Delete</th></tr>';
       
        while ($row = mysqli_fetch_array($result)) {
                echo '<tr><td>' . $row['email'] . '</td><td class="padded"><a href="edit_users.php?id=' . $row['id'] . '">Edit</a></td><td class="padded"><a href="delete_users.php?id=' . $row['id'] . '" onclick="return confirm(\'Are You Sure You Want To Delete This User?\');">Delete</a></td></tr>';
        }
        //6. close the table
        echo'</table>';
		
		mysqli_close($conn);


include_once 'footer.php';
}
?>