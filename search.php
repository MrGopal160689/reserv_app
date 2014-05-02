<?php include "view/template/overall/header.php";?>
<link rel="stylesheet" href="view/css/style_search-page.css" type="text/css"/>
<?php
	$area_id = $_POST['area_id'];
	$service_id = $_POST['service_id'];
	if(!empty($area_id) && !empty($service_id)){
		$service_name = getServiceName($service_id);
		$area_name = getAreaName($area_id);
		$parlour_list = getNearestParlorList($service_id,$area_id);
		$result_count = mysql_num_rows($parlour_list);
		$suffix = "";
		if($result_count>0){
			$suffix = "s";
		}
		else{
			$suffix = "";
		}
?>
<div id="search_metadata_wrapper">
	<div id="search_metadata">
<?php
		
		echo "Searched for <strong>{$service_name}</strong> in/near <strong>{$area_name}</strong>.";
		echo " {$result_count} result{$suffix} found...";
		
?>
	</div>
</div>
<ul id="search_wrapper">
<?php
		while($row=mysql_fetch_array($parlour_list)){
		
			$rating = roundOffRating($row['rating']);
			$percent = getRatePercent($rating);
			
			$rval = "";
			$lval = "";
			/*
			1. Get the rating, calculated average from the database show on the header
			2. Calculate the percentage from the rating obtained
			3. Rating table and percentage
				rate	percentage	degree
				---------------------------
				0		0%			0
				0.5		10%			36
				1		20%			72
				1.5		30%			108
				2		40%			144
				2.5		50%			180
				3		60%			216
				3.5		70%			252
				4		80%			288
				4.5		90%			324
				5		100%		360
			4.Test with dummy rating graphic on every result for positioning
			5. Replace the class of every rating graphic with corresponding class
			*/
			if($percent<=50){
				$rval = "r-value-".$percent;
				$lval = "l-value-"."0";
			}
			else if($percent>50){
				$rval = "r-value-"."50";
				$lval = "l-value-".($percent - 50);
			}
			else{}
			
			echo
			"
			<li>
				<div class=\"parlour_service_brief\">
					<div class=\"rating\">
						<div class=\"rating-wrapper\">
							<div class=\"x-wrapper-left\">
								<div class=\"x left {$lval}\">
								</div>
							</div>
							<div class=\"x-wrapper-right\">
								<div class=\"x right {$rval}\">
								</div>
							</div>
							<div class=\"hole\">
								{$rating}
							</div>
						</div>
					</div>
					<div class=\"details\">
					
						<form action=\"parlour.php\" method=\"GET\">
							<input name=\"parlour_id\" type=\"hidden\" value=\"{$row['profile_id']}\" />
							<strong class=\"parlour_name\">{$row['name']}</strong>
						</form>
						
						
						
						<br>{$row['block_number']}, {$row['areaname']}
						<br>{$row['land_line']}
						<br>
						
						<br>Monday to Sunday
						<div class=\"parlour_logo_thumbnail\">
							<img src=\"view/image/parlour_logo/1.jpg\" alt=\"\"/>
						</div>
						{$row['parlor_package_name']}
						<br>".(float)$row['approx_time']." mins.
						<br><strong>Rs.".(float)$row['price']."</strong>
						<br>
						<div class=\"book_btn_wrapper\">
							<button class=\"book_brn\">BOOK</button>
						</div>
					</div>
				</div>
			</li>
			" ;
		}
	}
	
?>
</ul>		
<script>
	document.addEventListener('click',function(e){
		if (e.target.className.toLowerCase() == 'parlour_name') {
			e.target.parentNode.submit();
		}
	});
</script>
