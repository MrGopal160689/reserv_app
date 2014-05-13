<?php include "view/template/overall/header.php";?>
<link rel="stylesheet" href="view/css/style_parlour.css" type="text/css"/>
<?php
	if(isset($_GET['parlour_id'])){
	$id = $_GET['parlour_id'];
	$details = getParlourDetails($id);
	$name = $details['name'];
	$address = $details['address'];
	$contact = $details['contact'];
	$rate = roundOffRating($details['rate']);
	
	$percent = getRatePercent($rate);			
	$rval = "";
	$lval = "";
	
	if($percent<=50){
		$rval = "r-value-".$percent;
		$lval = "l-value-"."0";
	}
	else if($percent>50){
		$rval = "r-value-"."50";
		$lval = "l-value-".($percent - 50);
	}
	else{}
	
	$service_list = getServiceList($id);
	$expert_list = getExpertList($id);
	$gallery_list = getGalleryImageList($id);
	
	}
	else{
		header('Location: index.php');
		exit();
	}
	
?>

<div class="profile-body">
	<div class="left-section float-left">
		<div class="profile-pic-dynamic parlour-pic-image">
		</div>
		<div class="profile-detail">
			<ul>
				<li class="clear-float parlour-name"><?php echo $name; ?></li>
				<li class="clear-float sub-detail">
					<div class="float-left detail-icon"><img src="view/image/location_icon.png"/></div>
					<div class="float-left personal-detail"><?php echo $address; ?></div>
				</li>
				<li class="clear-float sub-detail">
					<div class="float-left detail-icon"><img src="view/image/contact_icon.png"/></div>
					<div class="float-left personal-detail"><?php echo $contact; ?></div>
				</li>
				<li class="clear-float sub-detail">
					<div class="float-left detail-icon"><img src="view/image/time_icon.png"/></div >
					<div class="float-left personal-detail">Monday to Sunday<br>10am to 11pm</div>
				</li>
			</ul>
		</div>
		<div class="profile-rate">
			<div class="rating-wrapper">
				<div class="x-wrapper-left">
					<div class="x left <?php echo $lval ; ?>">
					</div>
				</div>
				<div class="x-wrapper-right">
					<div class="x right <?php echo $rval ; ?>">
					</div>
				</div>
				<div class="hole">
					<?php echo $rate ; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="right-section float-left">
		<div class="float-left left-wrapper">
			<ul id="navigation">
				<li class="float-left"><span class="selected">Price list</span></li>
				<li class="float-left"><span class="">Experts</span></li>
				<li class="float-left"><span class="">Gallery</span></li>
				<li class="float-left"><span class="">Video</span></li>
				<li class="float-left"><span class="">Map</span></li>
				<li class="float-left"><span class="">Advice</span></li>
			</ul>
			<div id="pages">
			<div class="nav-page" id="price-list-page">
				<input id="search-box" class="float-left" type="text" placeholder="search service"/>
				<div id="indicator" class="float-left"><img src="view/image/single_icon.png"/>&nbsp;single service&nbsp;&nbsp;<img src="view/image/package_icon.png"/>&nbsp;package</div>
				<div class="clear-float"></div>
				<ul class="price-list">
					<?php
						
						while($item = mysql_fetch_array($service_list)){
							if($item['type']=='p'){
								$icon = "package_icon.png";
								$color = 'package';
							}
							else if($item['type']=='s'){
								$icon = "single_icon.png";
								$color = 'single';
							}
							else{}
						echo 
						"
						<li class=\"{$color}\">
							<div class=\"float-left list-item icon\"><img src=\"view/image/{$icon}\"/></div>
							<div class=\"float-left list-item name\">{$item['service_name']}</div>
							<div class=\"float-left list-item time\">{$item['time']} mins.</div>
							<div class=\"float-left list-item price\">Rs. {$item['price']}</div>
							<div class=\"float-left list-item\"><button class=\"book-btn\">BOOK</button></div>
						</li>
						";
							
						}
					?>
				</ul>
			</div>
			<div class="hidden" id="expert-page">
				<ul>
					<?php
						
						while($item = mysql_fetch_array($expert_list)){
						
						echo "
						<li class=\"float-left expert-item\">
							<div class=\"float-left expert-image\" style=\"background-image:url('view/image/expert_pic/{$item['image']}');background-size:auto 100%\">
							</div>
							<div class=\"float-left expert-detail\">
								<div>{$item['name']}</div>
								<div class=\"expert-experience\"><br>{$item['designation']}<br>{$item['description']}</div>
							</div>
						</li>
						";
						}
					?>
				</ul>
			</div>
			<div class="hidden" id="gallery-page">
				<div class="gallery-main">
						<img id="gallery-main-image" src=""/>
				</div>
				<div>
					<ul id="gallery_thumbnail_list">
					<?php
						
						while($item = mysql_fetch_array($gallery_list)){
							echo "
							<li><img src=\"view/image/parlour_gallery/{$item['filename']}\"></li>
							";
						}
					?>
					</ul>
				</div>
			</div>
			<div class="hidden" id="video-page">
			</div>
			<div class="hidden" id="map-page">
			</div>
			<div class="hidden" id="advice-page">
				<div class="ask-btn-wrapper">
				<button id="ask-btn">ASK</button>
				</div>
				<div id="question-section" class="hidden">
					<textarea class="question-input question-title" wrap="off" cols="50" rows="1" placeholder="Type your question title.."></textarea>
					<textarea class="question-input question-body" wrap="off" cols="50" rows="3" placeholder="Explain what you are asking.."></textarea>
					<button class="btn">SUBMIT</button>
					<button class="btn" id="hide-btn">HIDE</button>
				</div>
				<ul class="question">
					<?php
						$count = 0 ;
						while($count<3){
					?>
					<li >
						<div class="float-left user-thumbnail ">
							<img src=""/>
						</div>
						<div class="float-left question-right-section">
							<div class="divide-fifty">
								How do I get rid of my acne ?
							</div>
							<div class="divide-fifty time-stamp">
								Posted: 24th April 2014, 11.34 pm
							</div>
						</div>
						<div class="float-left question-metadata">
							<div class="reply-number float-left">34</div><div class=" float-left">&nbsp;replies</div>
						</div>
					</li>
					<?php
							$count++;
						}
					?>
				</ul>
			</div>
			</div>
		</div>	
		<div class="float-left question-highlight">
			<div class="rt-advise-section"><strong>Ask for advice ?</strong></div>
			<div class="advise-panel-padding"><div class="reply-number float-left color">24</div> &nbsp;&nbsp;questions</div>
			<div class="advise-panel-padding"><div class="reply-number float-left color">14</div> &nbsp;&nbsp;replies</div>
			<div class="rt-advise-section"><strong>Recent Questions</strong></div>
			<ul>
				<?php
					$count = 0 ;
						while($count<4){
				?>
				<li class="question-list"><i>How do I get rid of my acne ?</i><br><div class="reply-number float-left color">9</div> &nbsp;&nbsp;replies</li>
				<?php
						$count++;
						}
				?>
			</ul>
		</div>
	</div>
</div>
<script type="text/javascript" src="view/js/parlour.js"></script>