<?php

	function redirect_to($new_location) {
		header("Location: " . $new_location);
		exit;
		
	}
	
	function check_existance($username, $password) {
		global $connection;
			
		$username = mysqli_real_escape_string($connection, $username);
		$password = mysqli_real_escape_string($connection, $password);	

			
		$query = "SELECT * ";
		$query .= "FROM logins ";
		$query .= "WHERE username = '$username' and password = '$password'";
		$username_set = mysqli_query($connection, $query);
		confirm_query($username_set);
		if($username = mysqli_fetch_assoc($username_set)) {
			return $username_set;
	} else {
			
			return;
		}
}

	function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed.");
		}
	}

	function add_user($new_user, $new_password, $phone, $email) {
		global $connection;
		
		$new_user = mysqli_real_escape_string($connection, $new_user);
		$new_password = mysqli_real_escape_string($connection, $new_password);
		$mobile = mysqli_real_escape_string($connection, $mobile);
		$email = mysqli_real_escape_string($connection, $email);

	
		$query = "INSERT INTO registered (username, password, mobile, email) ";
		$query .= "VALUES ('$new_user', '$new_password', '$mobile', '$email')";
		return $query;
	}

?>