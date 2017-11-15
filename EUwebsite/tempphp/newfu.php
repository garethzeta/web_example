<?php
function edit_option($username,$option,$typeofchange){
	if ($typeofchange = "add"){
	
		query = "Update User_tbl ";
		query .= "SET '$option' = 1";
		query .= "WHERE MUser = '$username'"
		}
	elseif ($typeofchange = "delete"){
		
		query = "Update User_tbl ";
		query .= "SET '$option' = 0";
		query .= "WHERE MUser = '$username'"
		}
	}
			
function check_options_chosen($username){
		
	query = "SELECT nochosen ";
	query .= "FROM User_tbl"
	query .= "WHERE MUser = '$username'";
		
	$cat_chosen_num = mysqli_query($connection, $query);
	confirm_query($cat_chosen_num);
	if (valid > 0){
		valid = true;
	}
	else{
		valid = false;
	}
	return $cat_chosen_num, valid;		
	}

	
	
	
	
	
function get_icons_fc ($username){
	$icon_array = array("Econ","Imo","SovandLaw","Jobs","DefenceandSecurity");
	$arr_length = count($count);
	$return_icon = "";
	for ($x = 0; $x < $arr_length, $x++){
		$temp = $icon_array[$x]
		query = "SELECT '$temp' ";
		query .= "FROM User_tbl"
		query .= "WHERE MUser = '$username';";	
		$icon_chosen_num = mysqli_query($connection, $query);
		confirm_query($icon_chosen_num);
		$return_icon += $icon_chosen_num;
	}
	return $return_icon;	
}

			?>