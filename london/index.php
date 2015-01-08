<!DOCTYPE html>
<html>
	<head>
		<title>London</title>
		<?php include '../templates/jqueryTemplate.php'; ?>
		<?php include '../templates/ajaxTemplate.php'; ?>
	</head>
	
	<body>
		<?php include '../templates/headerTemplate.php'; ?>

		<h1 class="title">Travel to London!</h1>
		
		<div class="picWrap">
			<img src="pictures/toweroflondon.jpg" alt="Tower of London" class="image"> 
			<img src="pictures/buckinghampalace.jpg" alt="Buckingham Palace" class="image"> 
			<img src="pictures/westminsterabbey.jpg" alt="Westminster Abbey" class="image"> 
			<img src="pictures/bigben.jpg" alt="Big Ben" class="image"> 
		<div>
		
		<?php include '../templates/accordianTemplate.php'; ?>
				
		<div class="videoDiv">
			<embed width="420" height="315" src="http://www.youtube.com/v/45ETZ1xvHS0">
		</div>
	</body>
</html>