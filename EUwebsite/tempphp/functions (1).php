<?php

	
	function check_existance($username, $password) {
		global $connection;
			
		$username = mysqli_real_escape_string($connection, $username);
		$password = mysqli_real_escape_string($connection, $password);	

			
		$query = "SELECT * ";
		$query .= "FROM logins ";
		$query .= "WHERE username = '$username' and password = '$password'";
		$query .= "LIMIT 1";
		$username_set = mysqli_query($connection, $query);
		confirm_query($username_set);
		if($username = mysqli_fetch_assoc($username_set)) {
			return $username_set;
	} else {
			
			return null;
		}
}

	function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed.");
		}
	}

	function add_user($new_user, $new_password,$email) {
		global $connection;
		
		$new_user = mysqli_real_escape_string($connection, $new_user);
		$new_password = mysqli_real_escape_string($connection, $new_password);
		$email = mysqli_real_escape_string($connection, $email);

	
		$query = "INSERT INTO  User_tbl (username, password, email) ";
		$query .= "VALUES ('$new_user', '$new_password', '$email')";
		return $query;
	}
	function check_options_chosen($username){
		
		query = "SELECT nochosen ";
		query .= "FROM catoptions_tbl"
		query .= "WHERE username = '$username'";
		
		$cat_chosen_num = mysqli_query($connection, $query);
		confirm_query($cat_chosen_num);
		return $cat_chosen_num;		
	}
	function edit_option($username,$option,$typeofchange){
		if ($typeofchange = "add"){
		
			query = "Update catoptions_tbl ";
			query .= "SET '$option' = 1";
			query .= "WHERE username = '$username'"
			}
		elseif ($typeofchange = "delete){
			
			query = "Update catoptions_tbl ";
			query .= "SET '$option' = 0";
			query .= "WHERE username = '$username'"
			}
		
	}
	function add_emot($Categories_ID,$User_ID,$Card_ID,$Option_chosen){
			query = "INSERT INTO Foot_Print_tbl ";
			query .= "(User_ID,Card_ID,Categories_tbl,Option_chosen)";
			query .= "VALUES('$User_ID','$Card_ID','$Categories_tbl','$Option_chosen')";
			}
	}

?>