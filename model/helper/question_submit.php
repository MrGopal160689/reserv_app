<?php

	include "../common/database_connection.php" ;

	$title = filter_var($_POST['title'],FILTER_SANITIZE_STRING);
	$body = filter_var($_POST['body'],FILTER_SANITIZE_STRING);
	$id = filter_var($_POST['parlour_id'],FILTER_SANITIZE_STRING);
	$user_name = filter_var($_POST['user_name'],FILTER_SANITIZE_STRING);
	$user_email = filter_var($_POST['user_email'],FILTER_SANITIZE_STRING);

	function submit_question($user_email,$user_name,$title,$body,$id){
		$query = "insert into question(email,username,title,body,parlour_id) values('{$user_email}','{$user_name}','{$title}','{$body}',{$id})";
		return (mysql_query($query)) ? true : false ;
	}

	if(!empty($user_name) && !empty($user_email) && !empty($title) && !empty($body) && !empty($id)){
		if(filter_var($user_email,FILTER_VALIDATE_EMAIL)){
			if(submit_question($user_email,$user_name,$title,$body,$id)){
				echo "Your question is successfully submitted!!";
			}else{
				echo "Problem in submitting the question!!";
			}
		}
		else{
			echo "Email is not valid!";
		}
	}
	else{
		echo "One or more value is empty";
	}
?>