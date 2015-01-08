<!DOCTYPE html>
<html>
	<head>
		<title>Paris</title>
		<?php include '../templates/jqueryTemplate.php'; ?>
		<?php include '../templates/ajaxTemplate.php'; ?>
	</head>
	
	<body>
		<?php include '../templates/headerTemplate.php'; ?>

		<h1 class="title">Travel to Paris!</h1>
		
		<div class="picWrap">
			<img src="pictures/eiffeltower.jpg" alt="Eiffel Tower" class="image"> 
			<img src="pictures/louvre.jpg" alt="Louvre" class="image"> 
			<img src="pictures/notredame.jpg" alt="Notre Dame" class="image"> 
			<img src="pictures/versailles.jpg" alt="Versailles" class="image"> 
		<div>
		
		<?php include '../templates/accordianTemplate.php'; ?>
		
		<div class="videoDiv">
			<embed width="420" height="315" src="http://www.youtube.com/v/AQ6GmpMu5L8">
		</div>
	</body>
</html>