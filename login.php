<?php include "view/template/overall/no_search_header.php"; ?>

<?php
$error = array();

if(isset($_POST['email'])){
$email=$_POST['email'];
}
if(isset($_POST['password'])){
$password = $_POST['password'];
}

if(empty($email) || empty($password)){
	$error[] = "field is empty!";
}else{
	if(!user_exists($email)){
		$error[] = "no such user exists";
	}else{
		$login = correct_authentication($email,$password);
		if($login){
			
			$_SESSION['user_id'] = $login;
			header('Location: user.php');
			exit();
		}
		else{
			$error[] = "incorrect email/password combination";
		}
	}
}
?>
<body>
<div id="form_wrapper">
	<form action="login.php" method="post">
	<div id="login_section">
		<ul id="login_input">
			<li><input class="login_inputtext" name="email" type="text" placeholder="e-mail"/></li>
			<li><input class="login_inputtext" name="password" type="password" placeholder="password"/></li>
			<li><input class="login_submitbtn" type="submit" value="login"/></li>
			<li>
				<?php
					echo implode(" ",$error);
				?>
			</li>
		</ul>
	</div>
	</form>
</div>
</body>
<?php include "view/template/overall/footer.php"; ?>