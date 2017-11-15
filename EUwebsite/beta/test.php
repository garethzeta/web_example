
<?php


function get_redirect($session_ID, $type){
	$redirect_array = array("defence-and-secuirty","immigration","jobs","results","sovereignty-and-law-making","trade");
	$options_array = array("Econ","Imo","SovandLaw","Jobs","DefenceandSecurity");
	$arr_length = count($options_array);
	$immi, $sov,$trade,$job,$def = get_chosen($session_ID, $type,$arr_length);
	if (strcmp($type,"Imo") == 0){
		$temp = check_Imo("immigration",$immi);
	} 
	elseif ((strcmp($type,"SovandLaw") == 0) || ($temp == 1)){
		$temp = checkSovandLaw("sovereignty-and-law-making",$sov);
	}
	elseif ((strcmp($type,"Econ") == 0)|| ($temp == 1)){
		$temp =  checkEcon("trade",$eco);
	} 
	elseif ((strcmp($type,"Jobs") == 0)|| ($temp == 1)){
		$temp =  checkJobs("jobs",$job);
	}
	elseif ((strcmp($type,"DefenceandSecurity") == 0)|| ($temp == 1)){
		$temp = checkDefenceandSecurity("defence-and-secuirty","results",$def);
	}	
	return ($temp);
}
function get_chosen($session_ID, $type,$arr_length){
	$def = 0;
	$immi = 0;
	$job = 0;
	$sov = 0;
	$trade = 0;
	for ($x = 0; $x < $arr_length, $x++){
		$temp = $option_array[$x];
		query = "SELECT '$temp' ";
		query .= "FROM User_tbl";
		query .= "WHERE MUser = '$username';";	
		$icon_chosen_num = mysqli_query($connection, $query);
		confirm_query($icon_chosen_num);
		if($icon_chosen_num = 1) {
				switch $x:
					case 0:
						$def = 1;
						break;
					case 1:
						$immi = 1;
						break;
					case 2:
						$job = 1;
						break;
					case 3:
						$sov = 1;
						break;
					case 4:
						$trade = 1;
						break;
					default:
						$trade = 1;
			}
	}
	return ($immi, $sov,$trade,$job,$def);


function check_Imo($link,$immi){
	if ($immi == 1){
		return ("immigration");
	}
	else{
		return 1;	
	}
}

function checkEcon($link,$trade){
	if ($trade == 1){
		return ("trade");
	}
	else{
		return 1;	
	}
}

function checkSovandLaw($link,$sov){
	if ($sov == 1){
		return ("sovereignty-and-law-making");
	}
	else{
		return 1;	
	}
}

function checkJobs($link,$job){
	if ($job == 1){
		return ("jobs");
	}
	else{
		return 1;	
	}
}

function checkDefenceandSecurity($link,$link2,$def){
	if ($def == 1){
		return ("defence-and-secuirty");
	}
	else{
		return ("results");	
	}
}
}



?>

