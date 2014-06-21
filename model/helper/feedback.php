<?php
	
	include "../common/database_connection.php" ;

	function submit_feedback($feedback){
		$query = "insert into feedback(feedback) values('{$feedback}')";
		return (mysql_query($query)) ? true : false ;
	}
	$feedback = filter_var($_POST['feedback'],FILTER_SANITIZE_STRING);

	if(!empty($feedback)){
		if(submit_feedback($feedback)){
			echo "Feedback submitted!!";
		}else{
			echo "Submission failed!!";
		}
	}
?>