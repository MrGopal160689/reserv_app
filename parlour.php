<?php include "view/template/overall/header.php";?>

<style>
	.profile-body{
		padding:80px 0px 0px 20px;
	}
	.float-left{
		float:left;
	}
	.left-section,.right-section{
		background-color:#fff;
		height:550px;
		margin:0px 15px;
		box-shadow:0px 0px 2px rgba(0,0,0,0.5);
		border-radius:2px;
	}
	.left-section,.profile-pic-dynamic{
		width:200px;
	}
	.right-section{
		width:1050px;
	}
	.profile-pic-dynamic{
		height:150px;
		border-radius:2px 2px 0px 0px;
	}
	.parlour-pic-image{
		background-image:url('view/image/parlour_pic/default.jpg');
		background-size:100%;
	}
	.question-highlight,.left-wrapper{
		height:100%;
	}
	.question-highlight{
		width:180px;
		border-radius:0px 2px 2px 0px;
		background-color:#ec1a3b;
		color:#fff;
	}
	.left-wrapper{
		width:870px;
	}
	.navigation{
		width:100%;
	}
	.navigation{
		padding:10px 5px;
		height:20px;
		font-size:14px;
	}
	.nav-page{
		padding:10px 20px;
	}
	.navigation li{
		padding:0px 15px;
		cursor:pointer;
	}
	.selected{
		color:#ec1a3b;
		border-bottom:1px solid #ec1a3b;
	}
	#search-box{
		width:350px;
		height:32px;
		padding:0px 10px;
		text-align:right;
		border:0px;
		background-color:#c1c1c1;
		background-image:url('view/image/search_icon.png');
		background-repeat:no-repeat;
		background-position:2% 50%;
		color:#fff;
	}
	.price-list{
		padding:20px 0px;
	}
	.price-list li{
		line-height:30px;
		height:30px;
		clear:both;
		border:1px solid #fff;
	}
	.price-list li:hover{
		color:#ec1a3b;
	}
	.package{
		background-color:#feffcc;
	}
	.single{
		background-color:#f2f2f2;
	}
	.list-item{
	}
	.icon{
		padding:5px;
	}
	.name{
		width:420px;
		height:100%;
	}
	.time{
		width:200px;
		height:100%;
	}
	.price{
		width:125px;
		height:100%;
	}
	.book-btn{
		width:100%;
		height:100%;
		background-color:#ec1a3b;
		border:0px;
		color:#fff;
	}
	.profile-detail{
		width:100%;
		height:200px;
	}
	.personal-detail{
		font-size:12px;
		width:150px;
	}
	.parlour-name{
		font-size:18px;
		color:#ec1a3b;
	}
	.clear-float{
		clear:both;
	}
	.detail-icon{
		width:20px;
		height:20px;
		padding:1px;
	}
	.sub-detail{
		padding-top:5px;
	}
	
	
	
/***************  rating  ***********************/
	.rating-wrapper{
		width:120px;
		margin:0px auto;
	}
	.x,.x-wrapper-left,.x-wrapper-right{
		position:absolute;
		width:120px;
		height:120px;
		border-radius:60px;
	}
	.hole{
		position:absolute;
		width:100px;
		height:100px;
		border-radius:50px;
		background-color:#fff;
		margin-top:10;
		margin-left:10;
		color:#ec1a3b;
		font-size:32px;
		text-align:center;
		line-height:100px;
	}
	.x{
		background-color:#ec1a3b;
	}
	.x-wrapper-right{
		background-color:#FFADAD;
		clip:rect(0px,120px,120px,60px);
	}
	.x-wrapper-left{
		background-color:#FFADAD;
		clip:rect(0px,60px,120px,0px);
	}
	.right{
		clip:rect(0px,60px,120px,0px);
	}
	.left{
		clip:rect(0px,120px,120px,60px);
	}
	.r-value-0{
		transition:transform 0.5s;
		transform:rotate(0deg);
		-webkit-transform:rotate(0deg);
	}
	.r-value-10{
		transition:transform 0.5s;
		transform:rotate(36deg);
	-webkit-transform:rotate(36deg);
	}
	.r-value-20{
		transition:transform 0.5s;
		transform:rotate(72deg);
		-webkit-transform:rotate(72deg);
	}
	.r-value-30{
		transition:transform 0.5s;
		transform:rotate(108deg);
		-webkit-transform:rotate(108deg);
	}
	.r-value-40{
		transition:transform 0.5s;
		transform:rotate(144deg);
		-webkit-transform:rotate(144deg);
	}
	.r-value-50{
		transition:transform 0.5s;
		transform:rotate(180deg);
		-webkit-transform:rotate(180deg);
	}
	.l-value-0{
		transition:transform 0.5s;
		transform:rotate(0deg);
		-webkit-transform:rotate(0deg);
	}
	.l-value-10{
		transition:transform 0.5s;
		transform:rotate(36deg);
		-webkit-transform:rotate(36deg);
	}
	.l-value-20{
		transition:transform 0.5s;
		transform:rotate(72deg);
		-webkit-transform:rotate(72deg);
	}
	.l-value-30{
		transition:transform 0.5s;
		transform:rotate(108deg);
		-webkit-transform:rotate(108deg);
	}
	.l-value-40{
		transition:transform 0.5s;
		transform:rotate(144deg);
		-webkit-transform:rotate(144deg);
	}
	.l-value-50{
		transition:transform 0.5s;
		transform:rotate(180deg);
		-webkit-transform:rotate(180deg);
	}
	
	
	
	.hidden{
		display:none;
	}
	
	.expert-item{
		padding:15px 5px;
	}
	.expert-detail{
		width:150px;
		padding:0px 10px;
	}
	.expert-experience{
		font-size:12px;
	}
	.expert-image{
		width:80px;
		height:100px;
		background-color:#ccc;
	}
	#expert-page{
		height:450px;
		overflow-y:scroll;
	}
	.question{
		padding:20px 0px 0px 0px;
		margin:0px;
	}
	.question li{
		padding:0px;
		width:100%;
		height:80px;
		background-color:#E2E2E2;
		margin:5px 0px;
	}
	.user-thumbnail{
		height:100%;
		width:9%;
		background-color:#ccc;
	}
	.question-right-section{
		width:76%;
		height:100%;
	}
	.question-metadata{
		width:14%;
		height:99%;
		padding-top:1%;
		padding-left:1%;
	}
	.divide-fifty{
		width:99%;
		height:49%;
		padding-top:1%;
		padding-left:1%;
	}
	.reply-number{
		width:20px;
		height:20px;
		border-radius:10px;
		background-color:#ec1a3b;
		color:#fff;
		font-size:12px;
		text-align:center;
		line-height:20px;
	}
	.time-stamp{
		font-size:14px;
		color:#666666;
	}
	.question-input{
		background-color:#F2F2F2;
		max-width:830px;
		min-width:830px;
		border:0px;
		margin-top:10px;
		padding:5px;
		
	}
	.question-body{
		min-height:60px;
	}
	.question-title{
		height:30px;
		resize:none;
	}
	.ask-btn-wrapper{
		width:100%;
		text-align:right;
	}
	.ask-btn{
		margin-top:-45px;
		border:none;
		width:60px;
		padding:5px;
		background-color:#ec1a3b;
		color:#fff;
	}
	.btn{
		margin-top:10px;
		border:none;
		padding:5px;
		background-color:#ec1a3b;
		color:#fff;
	}
	#hide-btn{
		background-color:#A3A3A3;
	}
	
	#search-box::-webkit-input-placeholder {
	   color: #FFF;
	}
	.gallery_thumbnail_list{
		padding:0px;
		margin:0px;
		width:820px;
		overflow-x:scroll;
	}
	
	.gallery_thumbnail_list li{
		display:table-cell;
		padding:0px 5px;
		opacity:0.5;
	}
	.gallery_thumbnail_list li:hover{
		opacity:1;
	}
	
	.gallery_thumbnail_list li img{
		height:100px;
	}
	
	.gallery-main{
		width:800px;
		height:330px;
		padding:10px;
	}
	.gallery-main img{
		height:300px;
	}
</style>

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
			<ul class="navigation">
				<li class="float-left"><span class="selected">Price list</span></li>
				<li class="float-left"><span class="">Experts</span></li>
				<li class="float-left"><span class="">Gallery</span></li>
				<li class="float-left"><span class="">Video</span></li>
				<li class="float-left"><span class="">Map</span></li>
				<li class="float-left"><span class="">Advice</span></li>
			</ul>
			<div id="pages">
			<div class="nav-page" id="price-list-page">
				<input id="search-box" type="text" placeholder="search service"/>
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
					<ul class="gallery_thumbnail_list">
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
				<button class="ask-btn">ASK</button>
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
			<div>Ask for advice ?</div>
			<div>24 questions</div>
			<div>14 replies</div>
			<div>Recent Questions</div>
			<ul>
				<?php
					$count = 0 ;
						while($count<4){
				?>
				<li>How do I get rid of my acne ?<br> 9 replies</li>
				<?php
						$count++;
						}
				?>
			</ul>
		</div>
	</div>
</div>
<script type="text/javascript" src="view/js/jquery.js"></script>
<script>
	$('.ask-btn').on('click',function(){
		$('#question-section').attr('class','');
	});
	$('#hide-btn').on('click',function(){
		$('#question-section').attr('class','hidden');
	});
	
	$('.navigation li').on('click',function(){
		var selected = $(this).index();
		//highlight selected link
		$(this).children().eq(0).attr('class','selected');
		$('.navigation').children('li').each(function(){
			if($(this).index() != selected){
				$(this).children().eq(0).attr('class','');
			}
		});
		//highlight selected page
		$('#pages').children().eq(selected).attr('class','nav-page');
		$('#pages').children('div').each(function(){
			if($(this).index() != selected){
				$(this).attr('class','hidden');
			}
		});
	});
	$('.gallery_thumbnail_list li').on('click',function(){
		var selected_img = $(this).children().eq(0).attr('src');
		// var selected_img_index = $(this).index();
		// $(this).children().eq(0).attr('id','image-selected');
		// $('.gallery_thumbnail_list').children('li').each(function(){
			// if($(this).index()!=selected_img_index){
				// $(this).children().eq(0).attr('id','');
			// }
		// });
		$('#gallery-main-image').attr('src',selected_img);
	});
	$(document).ready(function(){
		var selected_img = $('.gallery_thumbnail_list').children().eq(0).children().eq(0).attr('src');
		$('#gallery-main-image').attr('src',selected_img);
	});
</script>

