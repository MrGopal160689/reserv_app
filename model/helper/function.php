<?php include "model/common/database_connection.php" ; ?>

<?php

	function loggedin(){
		return (isset($_SESSION['user_id'])) ? true : false ;
	}
	function secure($data){
		return mysql_real_escape_string($data);
	}
	function user_exists($email){
		$email = secure($email);
		$find_user_query = mysql_query("select count('user_id') from user_details where email='{$email}'");
		return (mysql_result($find_user_query,0)==1) ? true : false ;
	}
	function get_user_id($email){
		$get_userid_query = mysql_query("select user_id from user_details where email='{$email}'");
		return (mysql_result($get_userid_query,0));
	}
	function correct_authentication($email,$password){
		$email = secure($email);
		$password = md5(secure($password));
		$user_id = get_user_id($email);
		$check_user_authentication_query = mysql_query("select count('user_id') from user_details where email = '{$email}' and password = '{$password}'");
		return (mysql_result($check_user_authentication_query,0)==1) ? $user_id : false ;
	}
	function getUserName($session_id){
		$user_id = $session_id;
		$get_username_query = mysql_query("select name from user_details where user_id = {$user_id}");
		return mysql_result($get_username_query,0);
	
	}
	function getUserContact($session_id){
		$user_id = $session_id;
		$get_usercontact_query = mysql_query("select phone from user_details where user_id = {$user_id}");
		return mysql_result($get_usercontact_query,0);
	}
	function getUserEmail($session_id){
		$user_id = $session_id;
		$get_useremail_query = mysql_query("select email from user_details where user_id = {$user_id}");
		return mysql_result($get_useremail_query,0);
	}
	function getUserLocation($session_id){
		$user_id = $session_id;
		$get_user_location_query = mysql_query("select concat(c.name,', ',a.name) as location from user_details as u inner join ref_area as a on u.location = a.area_id inner join ref_city as c on a.city_id = c.city_id where u.user_id = {$user_id};");
		return mysql_result($get_user_location_query,0);
	}
	function getProfilePicUrl($session_id){
		$user_id = $session_id;
		$get_userpic_url = mysql_query("select profile_pic from user_details where user_id = {$user_id};");
		return mysql_result($get_userpic_url,0);
	}
	function getNearestParlorList($service_id,$area_id){
		//get the zone(x,y) given the area_id
		$get_zone = mysql_fetch_array(mysql_query("select x,y from ref_area where area_id = {$area_id} limit 1"));
		$get_x = $get_zone['x'];
		$get_y = $get_zone['y'];

		//get the surrounding zone by calculating
		//implement the zone calculation through loops
		$cell_arr = array();
		$cell_count = 3;
		$row = 0;
		$col = 0;
		$start_x = $get_x - 1;
		$start_y = $get_y - 1;
		
		while($row < $cell_count){
			while($col < $cell_count){
				$tmp = "(".($start_x+$row).",".($start_y+$col).")";
				$col++;
				$cell_arr[] = $tmp;
			}
			$row++;
			$col = 0;
		}
		
		//put that surrounding zone list in an array
		$zone_list = implode(",",$cell_arr);
		//error_log($zone_list);
		
		//get all the area_id in that zone, and then find the parlours
		$get_nearest_parlor_query = "select z.profile_id, z.name, z.block_number, z.areaname, z.zip_code, z.land_line, z.service_id, z.parlor_package_name, z.price, z.approx_time, rate_tab.rate_average as rating from ( select y.profile_id, y.name, y.block_number, a.name as areaname, y.zip_code, y.land_line, y.service_id, y.parlor_package_name, y.rate as price, y.approx_time from ( select p.profile_id, p.name, p.block_number, p.area_id, p.zip_code, p.land_line, x.service_id, x.parlor_package_name, x.rate, x.approx_time from ( select pl.package_id, pl.service_id, ps.parlor_package_name, ps.parlor_id, ps.rate, ps.approx_time from parlor_service_link as pl inner join parlor_service ps on pl.package_id = ps.package_id where pl.service_id = {$service_id} ) as x inner join parlor as p on x.parlor_id = p.profile_id where p.area_id in ( select area_id from ref_area where (x,y) in ({$zone_list}) ) ) as y inner join ref_area as a on y.area_id = a.area_id ) as z inner join ( select  p.parlor_id, round(avg(r.points),2) as rate_average from ref_parlor_rating as p inner join ref_rating as r on p.rate_id = r.id group by p.parlor_id ) as rate_tab on z.profile_id = rate_tab.parlor_id";
		
		return mysql_query($get_nearest_parlor_query);
		
	}
	function getServiceName($service_id){
		$service_name = mysql_query("select name from service_list where service_id={$service_id}");
		return mysql_result($service_name,0);
	}
	function getAreaName($area_id){
		$area_name = mysql_query("select name from ref_area where area_id={$area_id}");
		return mysql_result($area_name,0);
	}
	function roundOffRating($rate){
		$whole = floor($rate) ;
		$fraction = ($rate - $whole)*100 ;
		
		if($fraction>=0 && $fraction <=25){
			$fraction = 0;
		}
		else if($fraction>25 && $fraction <=75){
			$fraction = 5;
		}
		else if($fraction>75){
			$fraction = 0;
			$whole = $whole + 1 ;
		}
		else{}
		$rate = $whole.".".$fraction;
		return $rate;
	}
	function getRatePercent($rating){
		return ($rating/5)*100;
	}
	function getParlourDetails($id){
		$query = "select parlour.name, concat(parlour.block_number,', ',area.name,', ',city.name,'-',parlour.zip_code) as address, land_line as contact, concat(start_hour,'am to ',end_hour,'pm') as timing, rate_average as rate, parlour.logo_url from parlor as parlour inner join ref_area as area on parlour.area_id = area.area_id inner join ref_city as city on area.city_id = city.city_id inner join (select p.parlor_id, avg(r.points) as rate_average from ref_parlor_rating as p inner join ref_rating as r on p.rate_id = r.id group by p.parlor_id ) as rate_chart on parlour.profile_id = rate_chart.parlor_id where parlour.profile_id = {$id} limit 1";
		
		return mysql_fetch_array(mysql_query($query));
	}
	function getServiceList($id){
		$query = "select if(count(psl.service_id) > 1, 'p', 's') as type, ps.parlor_package_name as service_name, ps.rate as price, ps.approx_time as time from parlor_service as ps inner join parlor_service_link as psl on ps.package_id = psl.package_id where ps.parlor_id = {$id} group by psl.package_id";
		
		return mysql_query($query);
	}
	function getExpertList($id){
		$query = "select name, image, designation, description from expert where parlour_id = {$id}";
		
		return mysql_query($query);
	}
	function getGalleryImageList($id){
		$query = "select filename from gallery where parlour_id = {$id}";
		
		return mysql_query($query);
	}
	function getHighlightList(){
		$query = "select p.profile_id as id, p.name, concat(p.block_number,', ',a.name,', ',c.name,'-',p.zip_code) as address, p.land_line as contact, g.filename as file, g.description from highlight as h inner join gallery as g on h.link = g.id inner join parlor as p on g.parlour_id = p.profile_id inner join ref_area as a on p.area_id = a.area_id inner join ref_city as c on a.city_id = c.city_id";
		
		return mysql_query($query);
	}
?>

