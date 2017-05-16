<!DOCTYPE html>

<!--
home index
index.php
spring 2016
Aaron Hinojos
-->

<html  lang="en">
  	
	<head>
		<!-- estable correct base based on uri --> 
		<?php
			if (substr($_SERVER['HTTP_HOST'],0,9)=='localhost')
				echo '<base href="http://localhost/CIS-425/2161-Spring/2016-Spring-Project/">';
			else
				echo '<base href="http://cis425a.wpcarey.asu.edu/afhinojo/2016-Spring-Project/">';
		?>
		
		 <!-- Meta tag -->
		<meta charset="utf-8" /> 
		<!-- The following meta tag allows us to not appear on the web -->
		<meta name="robots" content="noindex,nofollow" />
	
		<!-- Link tag for CSS -->
		<link type="text/css" rel="stylesheet" href="stylesheets/home.css" />

		<!--Favicon tag -->
		<link type="image/gif" rel="icon" href="images/magpieFavicon.ico" /> 
	
		<!-- Web Page Title -->
		<title>Ms. Magpie</title>
	
	</head>
	
	<body>
		<?php include ('php/homeHeader.php'); ?>
	
	</body>
	
</html>