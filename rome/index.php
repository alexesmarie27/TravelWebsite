<!DOCTYPE html>
<html>
	<head>
		<title>Rome</title>
		<?php include '../templates/jqueryTemplate.php'; ?>
		<?php include '../templates/ajaxTemplate.php'; ?>
	</head>
	
	<body>
		<?php include '../templates/headerTemplate.php'; ?>
		
		<h1 class="title">Travel to Rome!</h1>
		
		<div class="picWrap">
			<img src="pictures/colosseum.jpg" alt="Colosseum" class="image"> 
			<img src="pictures/forum.jpg" alt="Roman Forum" class="image"> 
			<img src="pictures/pantheon.jpg" alt="Pantheon" class="image"> 
			<img src="pictures/trevifountain.jpg" alt="Trevi Fountain" class="image"> 
		</div>
		
		<?php include '../templates/accordianTemplate.php'; ?>
		
		<div class="videoDiv">
			<embed width="420" height="315" src="http://www.youtube.com/v/DEJx0CYrDHk">
		</div>
	</body>
</html>