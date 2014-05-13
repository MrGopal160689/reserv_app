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
				<br><input class="input_box" type="number" placeholder="Enter your mobile number"/>
				<br><input class="input_box" type="email" placeholder="Enter your e-mail address"/>
				<br><input id="cta_btn_interested" type="submit" value="I'm interested"/>
			</li>
			<li>
				<strong>Are you seeking beauty services ?</strong>
				<br>Keep yourself updated about latest parlours, services,
				<br>offers and many more
				<br><input class="input_box" type="email" placeholder="Enter your e-mail address"/>
				<br><input id="cta_btn_subscribe" type="submit" value="Subscribe"/>
			</li>
			<li>
				<strong>Just Launched !!</strong>
				<br><textarea id="txt_area" cols="45" rows="5" placeholder="Your feedback is valueable to us. Ask anything, suggest new features, post remarks .."></textarea>
				<br><input id="cta_btn_submit" type="submit" value="Submit"/>
			</li>
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