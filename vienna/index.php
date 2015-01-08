<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Vienna</title>
		<?php include '../templates/jqueryTemplate.php'; ?>
		<?php include '../templates/ajaxTemplate.php'; ?>
	</head>
	
	<body>
	<?php
		if (isset($_SESSION["username"])){
			include "../templates/headerTemplate.php";

			echo '<h1 class="title">Travel to Vienna!</h1>';
			
			echo '<div class="picWrap">
				<img src="pictures/schonbrunn.jpg" alt="Schonbrunn Palace" class="image"> 
				<img src="pictures/stephenscathedral.JPG" alt="St. Stephens Cathedral" class="image"> 
				<img src="pictures/operahouse.jpg" alt="Opera House" class="image"> 
				<img src="pictures/salzburg.jpg" alt="Salzburg" class="image"> 
			</div>';
		
			include "../templates/accordianTemplate.php";
			
			echo '<div class="videoDiv">
				<embed width="420" height="315" src="http://www.youtube.com/v/MRI8ffYKA8c">
			</div>';
		}
		else{
			echo 
				'
				<a href="/~ampwd6/Project/home.php" id="homeButton" class="buttonMenu">Home</a>
				<a href="/~ampwd6/Project/login.php" id="login" class="buttonMenu">Login</a>
				<script>
					alert("You must be logged in to see this page!");
				</script>';
		}
	?>
		
	</body>
</html>