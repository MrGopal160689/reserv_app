<?php include "model/common/initialize.php"; ?>

<div id="top_header">
	<div id="logo_section" class="header_section">
		<img id="logo" src="view/image/reserv-logo.png"/>
	</div>
	<div id="search_section" class="header_section">
		<?php include "view/template/widget/parlour_search_widget.php"; ?>
	</div>
	<div id="link_section" class="header_section">
		<?php 
			if(loggedin()){
					$session_id = $_SESSION['user_id'];
					$username = getUserName($session_id);
					
					echo "<span><a class=\"span_link\" href=\"user.php\">Hi,"." "."{$username}</a></span>";
			}
			else{
				include "view/template/widget/login_register_link_widget.php";
			}
		?>
	</div>
</div>