<?php
	session_start();
	if (!isset($_SESSION["username"])){
		echo '<div id="wrapper" class="group">
				<a href="/~ampwd6/Project/home.php?city=london" class="buttonMenu" id="london">London</a>
				<a href="/~ampwd6/Project/home.php?city=paris" class="buttonMenu" id="paris">Paris</a>
				<a href="/~ampwd6/Project/home.php?city=rome" class="buttonMenu" id="rome">Rome</a>
				<a href="/~ampwd6/Project/home.php?city=vienna" id="vienna" class="buttonMenu">Vienna</a>
				<a href="/~ampwd6/Project/home.php" id="homeButton" class="buttonMenu">Home</a>
			</div>
			
			<div id="wrapper" class="group">
				<a href="/~ampwd6/Project/login.php" id="login" class="buttonMenu">Login</a>
			</div>';
	}
	else{
		echo '<div id="wrapper" class="group">
				<a href="/~ampwd6/Project/home.php?city=london" class="buttonMenu" id="london">London</a>
				<a href="/~ampwd6/Project/home.php?city=paris" class="buttonMenu" id="paris">Paris</a>
				<a href="/~ampwd6/Project/home.php?city=rome" class="buttonMenu" id="rome">Rome</a>
				<a href="/~ampwd6/Project/home.php?city=vienna" id="vienna" class="buttonMenu">Vienna</a>
				<a href="/~ampwd6/Project/home.php" id="homeButton" class="buttonMenu">Home</a>
			</div>
			
			<div id="wrapper" class="group">
				<a href="/~ampwd6/Project/logout.php" id="login" class="buttonMenu">Logout</a>
			</div>';
	}
?>