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
	$question_list = getQuestionList($id);
	
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
<input type="hidden" id="parlour_id" value="<?php echo $id ; ?>"/>
<div class="profile-body">
	<div class="left-section float-left">
		<div class="profile-pic-dynamic parlour-pic-image">
		</div>
		<div class="profile-detail">
			<ul id="profile_detail_ul">
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
				<div id="q_details">
					<div id="q_title">
						
					</div>
					<div id="q_replies">
						<span id="reply_header">Replies</span>
						<ul style="margin:10px 0px 0px 0px;padding:0px;height:330px;overflow-y: scroll; overflow-x: hidden;">
							<li style="display:table-row;background-color:#e5e5e4;">
								<div style="display:table-cell;border-top:5px solid #fff;"><img src="view/image/user_pic/default.png"/></div>
								<div style="display:table-cell;border-top:5px solid #fff;width:800px;padding:10px;vertical-align:top;">As a describer of life and manners, he must be allowed to stand perhaps the first of the first rank. His humour, which, as Steele observes, is peculiar to himself, is so happily diffused as to give the grace of novelty to domestic scenes and daily occurrences. He never "o'ersteps the modesty of nature," nor raises merriment or wonder by the violation of truth. His figures neither divert by distortion nor amaze by aggravation. He copies life with so much fidelity that he can be hardly said to invent; yet his exhibitions have an air so much original, that it is difficult to suppose them not merely the product of imagination.<p style="text-align:right;font-size:12px;padding:0px 10px;"><strong style="color:#ec1a3b">Gopal Ojha</strong> | posted on 21st May 2014, 8:34 PM</p></div>								
							</li>
							<li style="display:table-row;background-color:#e5e5e4;">
								<div style="display:table-cell;border-top:5px solid #fff;"><img src="view/image/user_pic/default.png"/></div>
								<div style="display:table-cell;border-top:5px solid #fff;width:800px;padding:10px;vertical-align:top;">As a describer of life and manners, he must be allowed to stand perhaps the first of the first rank. His humour, which, as Steele observes, is peculiar to himself, is so happily diffused as to give the grace of novelty to domestic scenes and daily occurrences. He never "o'ersteps the modesty of nature," nor raises merriment or wonder by the violation of truth. His figures neither divert by distortion nor amaze by aggravation. He copies life with so much fidelity that he can be hardly said to invent; yet his exhibitions have an air so much original, that it is difficult to suppose them not merely the product of imagination.<p style="text-align:right;font-size:12px;padding:0px 10px;"><strong style="color:#ec1a3b">Gopal Ojha</strong> | posted on 21st May 2014, 8:34 PM</p></div>								
							</li>
							<li style="display:table-row;background-color:#e5e5e4;">
								<div style="display:table-cell;border-top:5px solid #fff;"><img src="view/image/user_pic/default.png"/></div>
								<div style="display:table-cell;border-top:5px solid #fff;width:800px;padding:10px;vertical-align:top;">As a describer of life and manners, he must be allowed to stand perhaps the first of the first rank. His humour, which, as Steele observes, is peculiar to himself, is so happily diffused as to give the grace of novelty to domestic scenes and daily occurrences. He never "o'ersteps the modesty of nature," nor raises merriment or wonder by the violation of truth. His figures neither divert by distortion nor amaze by aggravation. He copies life with so much fidelity that he can be hardly said to invent; yet his exhibitions have an air so much original, that it is difficult to suppose them not merely the product of imagination.<p style="text-align:right;font-size:12px;padding:0px 10px;"><strong style="color:#ec1a3b">Gopal Ojha</strong> | posted on 21st May 2014, 8:34 PM</p></div>								
							</li>
						</ul>
					</div>
				</div>
				<div id="question-section" class="hidden">
					<input type="email" id="user_email" class="search-box" placeholder="Enter your E-mail" required/><br>
					<input type="text" id="user_name" class="search-box" placeholder="Enter your Name" required/><br>
					<textarea id="question_title" class="question-input question-title" wrap="hard" cols="1" rows="1" placeholder="Type your question title.."></textarea>
					<textarea id="question_body" class="question-input question-body" wrap="hard" cols="1" rows="3" placeholder="Explain what you are asking.."></textarea>
					<button class="btn" id="question_submit">SUBMIT</button>
					<button class="btn" id="hide-btn">HIDE</button>
					<span id="status"></span>
				</div>
				<script type="text/javascript">
					document.getElementById("question_submit").addEventListener('click',function(e){
						var user_email = document.getElementById("user_email").value;
						var user_name = document.getElementById("user_name").value;
						var title = document.getElementById("question_title").value;
						var body = document.getElementById("question_body").value;
						var parlour_id = document.getElementById("parlour_id").value;
						console.log(title+" "+body+" "+parlour_id);
						var xmlhttp;
						if (window.XMLHttpRequest)
						{
							// code for IE7+, Firefox, Chrome, Opera, Safari
							xmlhttp=new XMLHttpRequest();
						}
						else
						{
							// code for IE6, IE5
							xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange=function()
						{
							if (xmlhttp.readyState==4 && xmlhttp.status==200)
							{
								document.getElementById("status").innerHTML=xmlhttp.responseText;
							}
						}
						xmlhttp.open("POST","model/helper/question_submit.php",true);
						xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
						xmlhttp.send("user_name="+user_name+"&user_email="+user_email+"&title="+title+"&body="+body+"&parlour_id="+parlour_id);
					});
				</script>
				<ul class="question">
				<?php
					while($q = mysql_fetch_array($question_list)){
						echo 
						"
						<li>
							<span class=\"user-thumbnail\"></span>
							<span class=\"middle\">
								<input type=\"hidden\" value=".$q['id']."/>
								<strong class=\"q-title\">".substr($q['title'],0,150)."..</strong>
								<h6 class=\"q-metadata\"><strong class=\"posted_user_name\">".$q['username']."</strong> | posted on ".$q['postdate']." , ".$q['posttime']."</h6>
							</span>
							<span class=\"question_right\">
								<span class=\"reply-number\">347</span>&nbsp;replies
							</span>
						</li>
						";
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