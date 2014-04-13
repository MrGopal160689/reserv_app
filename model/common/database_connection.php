<?php

	$connection = mysql_connect("localhost","root","basu@64171535");
	if(!$connection){
		die("database connection failed: ".mysql_error());
	}
	
	$select_database = mysql_select_db("reserv",$connection);
	if(!$select_database){
		die("database selection failed: ".mysql_error());
	}

?>
