<?php
	include "../common/database_connection.php" ;
	
	function user_email_exists($email){
		$query = "select id from interested_user_email where email='{$email}'";
		$rows = mysql_num_rows(mysql_query($query));
		return ($rows > 0) ? true : false ;
	}
	function register_user_email($email){
		$query = "insert into interested_user_email(email) values('{$email}')";
		return (mysql_query($query)) ? true : false ;
	}

	$user_email = filter_var($_POST['user_email'],FILTER_SANITIZE_EMAIL);

	if(!empty($user_email) && filter_var($user_email,FILTER_VALIDATE_EMAIL)){
		if(!user_email_exists($user_email)){
			if(register_user_email($user_email)){
				echo "You've been regiestered!";
			}
			else{
				echo "Registration failed!";
			}
		}
		else{
			echo "E-mail already registered!";
		}
	}
?>