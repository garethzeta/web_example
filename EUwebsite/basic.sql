

function get_results($Cat_ID,$Connection, $Session_ID_){
	if ( $Cat_ID != "Sumy")
	{
	$query = "SELECT Emoticon_Number FROM Card_tbl";
	$query .= "WHERE MUser_ID = '$Session_ID' AND Category_ID = '$Cat_ID'";
	$query .= "AND Card_tbl = i;";
	$answers_set= "";
	for (i = 0, i=100,i++){
		$tempanswers_set = mysqli_query($connection, $query);
		confirm_query($tempanswers_set);
		$answers_set+=$temmpanswers_set;
	
		
	}
	}
	
	else{
	
	$query = "SELECT Emoticon_Number FROM Card_tbl";
	$query .= "WHERE MUser_ID = '$Session_ID';"
	}
	$answers_set = mysqli_query($connection, $query);
	confirm_query($answers_set);
	
}



SELECT Emoticon_Number FROM Card_tbl 
WHERE MUser_ID = {'$Session_ID'} AND Category_ID = {'$Cat_ID'} 
AND Card_tbl = {'$Card_ID'};