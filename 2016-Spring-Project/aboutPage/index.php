<!DOCTYPE html>

<!--
about index final project
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
		<link type="text/css" rel="stylesheet" href="stylesheets/about.css" />

		<!--Favicon tag -->
		<link type="image/gif" rel="icon" href="images/magpieFavicon.ico" /> 
	
		<!-- Web Page Title -->
		<title>Ms. Magpie</title>
	
	</head>
	
	<body>
		<div id="d1">
		
			<?php include ('../php/header.php'); ?>
			
			<div id="d2">
				<p> Miss Magpie Collections is about an Arizona local artist Maggie Rome
					going under the alias "Miss Magpie". Magpie has been following her passion for art and graphic
					design for over 11 years and while in high school even earned accolades through local art shows.
					Magpie's vision is to create content that has inspired her and hopefully can share through the
					continuum that is the World Wide Web. Her imagery is based mostly off Japanese-manga,
					Anime, and videogame subculture and extends as far as highly technical and clean web-standard
					graphic design. When she is not pursuing art Magpie works diligently as a graphic designer for
					ASU's many webpages and applications. Her hope is doing what she loves to live and share her
					enthusiasm through her own personal work. 
				</p>
			</div>
			<div id="d3">
				<img src="images/RomeLogo.png" alt="magpie logo"/>
			</div>
			
			<div id="icons">
				<div id="i1">
					<a href="http://missmagpiecollections.tumblr.com/" target="_blank"><img src="images/tumblerIcon.png" alt="Click to Tumblr"/></a>
					<br />
					<span class="pink">Follow on Tumblr...</span>				
				</div>
				<div id="i2"> 
					<a href="https://twitter.com/MissMagpieArt" target="_blank"><img src="images/twitterIcon.jpg" alt="Click to Tumblr"/></a>
					<br />
					<span class="pink"> and Twitter!</span>	
				</div>
			</div>
		
			<div id="prefooter"></div>
		
		</div>
	
	</body>
	
</html>