<?php
	echo '			
		<script>
			$(function() {
				$( "#accordion" ).accordion({
					collapsible: true,
					heightStyle: "content"
				});
				
				$.ajax({
					url:"info/places.html"
				}).done(function(text){
					$("#visit").html(text);
				})
				
				$.ajax({
					url:"info/food.html"
				}).done(function(text){
					$("#eat").html(text);
				})
				
				$.ajax({
					url:"info/trips.html"
				}).done(function(text){
					$("#dayTrips").html(text);
				})
			});
		 </script>';
?>