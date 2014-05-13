<?php

require_once("../common/database_connection.php");

$area = $_POST['area'];

if(!empty($area)){
	
	$area_search_query = "select area.area_id , area.name as areaname, city.name as cityname from ref_area as area inner join ref_city as city on area.city_id = city.city_id where area.name like '{$area}%' limit 5";
	
	$result=mysql_query($area_search_query,$connection);
	
	if(mysql_num_rows($result)>0){
	
		while($row=mysql_fetch_array($result)){
			echo "<li class=\"area_list\"><input type=\"hidden\" class=\"fetched_areaid\" value=\"{$row['area_id']}\" />{$row['areaname']}, {$row['cityname']}</li>";
		}
	}
	else{
		echo "<li>no such area exists!</li>";
	}
}


require_once("../common/close_connection.php");

?>