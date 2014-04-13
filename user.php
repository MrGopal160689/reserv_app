<?php include "view/template/overall/header.php";?>

<?php
	$contact_no = getUserContact($session_id);
	$location = getUserLocation($session_id);
	$email = getUserEmail($session_id);
	$profile_pic = getProfilePicUrl($session_id);
?>

<div id="usersection_body">
	<div id="userdetails_section">
		<div id="user_image" style="background-image:url('view/image/profile_pic/<?php echo $profile_pic?>');background-size:auto 100%;width:100%;height:150px;">
			<div id="nothing"></div>
			<div id="change_photo">
			<input type="file" value="change photo"/>
			</div>
		</div>
		<div id="userdetails">
			<div id="username"><?php echo $username ?></div>
			<ul>
				<li><img src="view/image/contact_icon.png"/><span class="userdetails_list"><?php echo $contact_no ?></span></li>
				<li><img src="view/image/location_icon.png"/><span class="userdetails_list"><?php echo $location ?></span></li>
				<li><img src="view/image/email_icon.png"/><span class="userdetails_list"><?php echo $email ?></span></li>
			</ul>
			<ul>
				<li>contact list</li>
				<li>booking history</li>
				<li>advise panel</li>
			</ul>
		</div>
		<a href="logout.php"><span id="logout_btn">Logout</span></a>
	</div>
	<div id="userfeed_section">
		<div id="newsfeed_section">
		</div>
		<div id="offersection">
		</div>
	</div>
</div>

<?php include "view/template/overall/footer.php"; ?>