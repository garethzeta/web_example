<?php require_once("db_connection.php"); ?>
<?php require_once("functions.php"); ?>
<?php include("header.php"); ?>

<?php
$message = "Please sign up top acces the referendum.";

 if (isset($_POST['register'])) {
	 
	 $password = $_POST['password'];
	 $email = $_POST['email'];

	 $query = "INSERT INTO registered (email, password) VALUES ('$email', '$password')";
	 $result = mysqli_query($connection, $query);
	 redirect_to("sign_in.php");
 }
?>

<html lang="en">
	<head>
		<title>Register Form</title>
	</head>
	<body>
		<div id="main">
			<div id="navigation">
				<a href="sign_in.php">Login</a>
			</div>
			<div id="page">
				<h2>Please enter your details to sign up for the referendum.</h2>

				<form action="register.php" method="post">
					Password: <input type="password" name="password" value="" /><br />
					Email: <input type="email" name="email" value="" /><br />
					<br />
					<input type="submit" name="register" value="Register" />
				</form>
			</div>
		</div>
	</body>
</html>


<?php require_once("close_connection.php"); ?>
<?php include("footer.php"); ?>