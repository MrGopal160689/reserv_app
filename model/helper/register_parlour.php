<?php

	include "../common/database_connection.php" ;
	
	function parlour_email_exists($email){
		$query = "select id from interested_parlour where email = '{$email}'";
		$rows = mysql_num_rows(mysql_query($query));
		return ($rows > 0) ? true : false ;
	}
	function parlour_mobile_exists($mobile){
		$query = "select id from interested_parlour where mobile = '{$mobile}'";
		$rows = mysql_num_rows(mysql_query($query));
		return ($rows > 0) ? true : false ;
	}
	function register_parlour($mobile,$email){
		$query = "insert into interested_parlour(email,mobile) values('{$email}','{$mobile}')";
		return (mysql_query($query)) ? true : false ;
	}

	$mobile = trim($_POST['parlour_mobile']);
	$email = trim($_POST['parlour_email']);

	if(!empty($mobile) && !empty($email)){

		$sanitized_mobile = filter_var($mobile,FILTER_SANITIZE_NUMBER_INT);
		$sanitized_email = filter_var($email,FILTER_SANITIZE_EMAIL);
		
		if(filter_var($sanitized_email,FILTER_VALIDATE_EMAIL)){

			if(preg_match("/[0-9]{10}/",$sanitized_mobile)){
		
				if(!parlour_email_exists($sanitized_email)){
					if(!parlour_mobile_exists($sanitized_mobile)){
						if(register_parlour($sanitized_mobile,$sanitized_email)){
							echo "You have been registered!!";
						}
						else{
							echo "Registration failed!!";
						}
					}
					else{
						echo "Mobile number already in use.";
					}
				}
				else{
					echo "E-mail already exists!";
				}

			}
			else{
				echo "Mobile number not valid";
			}
		}
		else{

			echo "E-mail not valid";
		}
	}
?>