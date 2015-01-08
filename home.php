<?php
	if($_GET["firsttime"] == true && !is_null($_SESSION["username"])){
		echo "You have successfully logged in";
	}

	if(!is_null($_GET)){
		if($_GET["city"] == "london"){
			header('Location: london/');
		}
		if($_GET["city"] == "paris"){
			header('Location: paris/');
		}
		if($_GET["city"] == "rome"){
			header('Location: rome/');
		}
		if($_GET["city"] == "vienna"){
			header('Location: vienna/');
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<?php include './templates/jqueryTemplate.php'; ?>
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script>
			$(document).ready(function(){
				$("#welcome").fadeIn(2000);
			});
		
			function printResult()
			{
				document.getElementById("info").innerHTML = "Thank you for answering!";
			}
		</script>
	</head>
	
	<body>
		<?php include 'templates/headerTemplate.php'; ?>

		<div id="welcome">
			<?php 
				if($_GET["firsttime"] == true && !is_null($_SESSION["username"]))
					echo '<p>You have successfully logged in!</p>'; 
			?>
			<h1>Welcome!</h1>
			<h3>This site will take you on a journey through Europe, and give the curious traveler an idea of what to do, eat, and see while at each destination.</h3>
		</div>
		
		<form name="questioniare" id="questionaire" action='#' method="GET">
			<h3>What city should have a page next?</h3>
			<div id="info">
				<input type="radio" name="city" value="barcelona">Barcelona<br>
				<input type="radio" name="city" value="amsterdam">Amsterdam<br>
				<input type="radio" name="city" value="dublin">Dublin<br>
				<input type="radio" name="city" value="athens">Athens
				
				<p>
					<button type="button" class="buttonMenu" id="submitButton" onclick="printResult()">Submit</button>
				</p>
			</div>
		</form>
	</body>
</html>