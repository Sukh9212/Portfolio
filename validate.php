<!--
File Name: validate.php

Author's Name: Sukhdeep Singh

Web Site Name: My Portfolio

File Description: This page takes the credentials entered by the user in the login.php page
and checks in the database if the credentials are correct and logs the user in otherwise gives
and error message showing that email or password is incorrect
-->
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title></title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/bootbox.js"></script>
	</head>
	<body>

		<?php
		$email = $_POST['email'];
		//hash the password
		$password = sha1($_POST['password']);
		//check that the email entered is a proper valid email address
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

			$conn = mysqli_connect('webdesign4', 'dbxxxxxxxxx', 'xxxxx', 'dbxxxxxx') or die('Error connecting to MySQL server');

			$sql = "SELECT id FROM admin WHERE email = '$email' AND password = '$password'";
			$result = mysqli_query($conn, $sql) or die('Error querying database.');
			$count = mysqli_num_rows($result);
			if ($count == 1) {
				while ($row = mysqli_fetch_array($result)) {
					//access the existing session created by the web server
					session_start();
					//store the user id in the session object
					$_SESSION['user_id'] = $row['id'];
					header('Location:business.php');
				}
			} else {
		?>
		<script type="text/javascript">
			bootbox.alert("Username or Password is Incorrect..!!!", function() {
				history.back();
			});

		</script>
		<?php
		}
		}
		else {
		?>
		<script type="text/javascript">
			bootbox.alert("Email Address is Incorrect..!!!", function() {
				history.back();
			});
		</script>
		<?php
		}
		?>
	</body>
</html>
