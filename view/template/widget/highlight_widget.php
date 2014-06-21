<link rel="stylesheet" href="view/css/style_highlight_widget.css" type="text/css"/>
<?php 
	$highlight_list = getHighlightList();
?>
<div id="body_wrapper">
	<ul id="highlight_wrapper">
		<?php
			while($row = mysql_fetch_array($highlight_list)){
				echo "
				<li class=\"highlight_item\">
					<div class=\"item_wrapper\">
						<div class=\"highlight_brief\">
							<form class=\"parlour_form\" action=\"parlour.php\" method=\"GET\">
								<input name=\"parlour_id\" type=\"hidden\" value=\"{$row['id']}\" />
								<strong class=\"parlour_link\">{$row['name']}</strong>
							</form>
							<br>{$row['address']}
							<br>{$row['contact']}
						</div>
						<div class=\"img_wrapper\" style=\"background-image:url('view/image/parlour_gallery/{$row['file']}')\">
						</div>
						<div class=\"img_description\">{$row['description']}</div>
					</div>
				</li>
				";
			}
		?>
	</ul>
	<div id="cta_wrapper">
		<ul id="cta_list">
			<li>
				<strong>Are you a Parlour or Individula Beauty Specialist ?</strong>
				<br>We advertise you for free !!
				<!--form-->
					<br><input class="input_box" id="parlour_mobile" type="tel" maxlength="10" pattern="[0-9]{10}" placeholder="Mobile number e.g. 9836627261" required/>
					<br><input class="input_box" id="parlour_email" type="email" placeholder="E-mail address" required/>
					<br><input type="button" id="cta_btn_interested" value="I'm interested"/><span id="parlour_interested_status"></span>
				<!--form-->
				<script type="text/javascript">
					document.getElementById("cta_btn_interested").addEventListener('click',function(e){
						var mobile = document.getElementById("parlour_mobile").value;
						var email = document.getElementById("parlour_email").value;
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
								document.getElementById("parlour_interested_status").innerHTML=xmlhttp.responseText;
							}
						}
						xmlhttp.open("POST","model/helper/register_parlour.php",true);
						xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
						xmlhttp.send("parlour_mobile="+mobile+"&parlour_email="+email);
					});
				</script>
			</li>
			<li>
				<strong>Are you seeking beauty services ?</strong>
				<br>Keep yourself updated about latest parlours, services,
				<br>offers and many more
				<br><input class="input_box" id="user_email" type="email" placeholder="Enter your e-mail address"/>
				<br><input id="cta_btn_subscribe" type="button" value="Subscribe"/><span id="user_registration_status"></span>
			</li>
			<script type="text/javascript">
				document.getElementById("cta_btn_subscribe").addEventListener('click',function(e){
					var email = document.getElementById("user_email").value;
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
							document.getElementById("user_registration_status").innerHTML=xmlhttp.responseText;
						}
					}
					xmlhttp.open("POST","model/helper/register_user.php",true);
					xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
					xmlhttp.send("user_email="+email);
				});
			</script>
			<li>
				<strong>Just Launched !!</strong>
				<br><textarea id="txt_area" cols="45" rows="5" placeholder="Your feedback is valueable to us. Ask anything, suggest new features, post remarks .."></textarea>
				<br><input id="cta_btn_submit" type="button" value="Submit"/><span id="feedback_status"></span>
			</li>
			<script type="text/javascript">
				document.getElementById("cta_btn_submit").addEventListener('click',function(e){
					var feedback = document.getElementById("txt_area").value;
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
							document.getElementById("feedback_status").innerHTML=xmlhttp.responseText;
						}
					}
					xmlhttp.open("POST","model/helper/feedback.php",true);
					xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
					xmlhttp.send("feedback="+feedback);
				});
			</script>
		</ul>
	</div>
</div>
<script>
document.addEventListener('click',function(e){
	if (e.target.className.toLowerCase() == 'parlour_link') {
		e.target.parentNode.submit();
	}
});
</script>