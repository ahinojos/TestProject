<!DOCTYPE html>

<!--
work/product index
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
		<link type="text/css" rel="stylesheet" href="stylesheets/product.css" />

		<!--Favicon tag -->
		<link type="image/gif" rel="icon" href="images/magpieFavicon.ico" /> 
	
		<!-- Web Page Title -->
		<title>Ms. Magpie</title>
	
	</head>
	
	<body>
		<?php include ('../php/header.php'); ?>
		<table id="t1">
			<tr class="rTitle">
				<th>Posters</th>
				<td></td>
				<td></td>
			</tr>
			<tr id ="r1">
				<td><img src="images/madokaPoster.png" alt="madoka Poster"/></td>
				<td><img src="images/shinonPoster.png" alt="madoka Poster"/></td>
				<td></td>
			</tr>
			<tr class="rTitle">
				<th>Bookmarks</th>
				<td></td>
				<td></td>
			</tr>
			<tr id ="r2">
				<td><img src="images/akalibookmark.png" alt="madoka Poster"/></td>
				<td><img src="images/nogamebookmark.png" alt="madoka Poster"/></td>
				<td><img src="images/homubookmark.png" alt="madoka Poster"/></td>
			</tr>
			<tr class="rTitle">
				<th>Straps and Keychains</th>
				<td></td>
				<td></td>
			</tr>
			<tr id ="r3">	
				<td><img src="images/killstrap.png" alt="madoka Poster"/></td>
				<td><img src="images/allstraps.png" alt="madoka Poster"/></td>
				<td></td>
			</tr>
		</table>
	
	</body>
	
</html>