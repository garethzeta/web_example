<?php require_once("db_connection.php"); ?>
<?php require_once("functions.php"); ?>
<?php include("header.php"); ?>


<?php
$message = "Please log in.";

 if (isset($_POST['submit'])) {
	 
		$username = $_POST["username"];
		$password = $_POST["password"];

		$query = "SELECT * FROM registered WHERE username = '$username' and password = '$password'";
	 	$result = mysqli_query($connection, $query);
	  if(mysqli_fetch_assoc($result) != null) {
			$output1 = $username;
			$output2 = $password;
		  redirect_to("welcome.html.php");
		} else {
		  echo "Either the username or password is incorrect";
		}
 }

	if (isset($_POST['register'])) {
		redirect_to("register.php");
	}


?>

	
<html lang="en">
	<head>
		<title>Form</title>
	</head>
	<body>
		<div id="main">
			<div id="navigation">
				<a href="sign_in.php">Login</a>
			</div>
			<div id="page">
				<?php echo $message; ?><br />

				<form action="sign_in.php" method="post">
					Username: <input type="text" name="username" value="" /><br />
					Password: <input type="password" name="password" value="" /><br />
					<br />
					<input type="submit" name="submit" value="Submit" />
					<input type="submit" name="register" value="Register" />
				</form>
			</div>
		</div>
	</body>
</html>

<?php require_once("close_connection.php"); ?>
<?php include("footer.php"); ?>
