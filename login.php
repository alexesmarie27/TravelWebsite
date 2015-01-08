<?php
	session_start();

	if(!empty($_POST)){
		if($_POST["username"] == "test" && $_POST["password"] == "pass"){
			$_SESSION["username"] = $_POST["username"];
			header('Location: home.php?firsttime=true');
		}
		else{
			header('Location: login.php?incorrect=true');
		}
	}
?>

<!DOCTYPE html>
	<html>
	<head>
		<title>Login</title>
		<?php include './templates/jqueryTemplate.php'; ?>
	</head>
	<body>
		<?php include './templates/headerTemplate.php'; ?>
					
		<div id="loginDiv">
			<?php 
				if($_GET["incorrect"] == true)
					echo 
						'<div class="error">
							<h3>You have entered an incorrect username or password!</h3>
						</div>';
			?>
		
			<form id="loginForm" name="Login" action="#" method="POST">
				<p>
					<label for="username">Username:</label>
					<input type="text" name="username" id="username" value="<?php print $username; ?>">
				</p>
				<p>
					<label for="password">Password:</label>
					<input type="password" name="password" id="password">
				</p>
				<p>
					<input class="buttonMenu" type="submit" name="submit" value="Submit">
				</p>
			</form>
		</div>
	</body>
</html>
