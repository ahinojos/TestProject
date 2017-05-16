<!DOCTYPE html>

<!--
contact page finla project
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
		<link type="text/css" rel="stylesheet" href="stylesheets/register.css" />

		<!--Favicon tag -->
		<link type="image/gif" rel="icon" href="images/magpieFavicon.ico" /> 
	
		<!-- javascript tags -->
		<script type="text/javascript" src="js/messages.js"></script>
	
		<!-- Web Page Title -->
		<title>Ms. Magpie</title>
	
	</head>
	
	<body>
		<div id="d1">
			<?php include ('../php/header.php'); ?>
			
			<div id="main">
				<p>Fill out the information below and we will be sure to get back to you!</p>
			</div>
			
			<form id="regform" action="https://webapp4.asu.edu/pubtools/Mail" method="post">
			<p>Contact Magpie!</p>
			<p>
				<!-- 3 hidden elements to process SMTP mail -->
				<!-- Change value to professor email before you turn in-->
				<input type="hidden" name="sendto" value="dennis.anderson@asu.edu" />
				<input type="hidden" name="subject" value="Website Commnets" />
				<input type="hidden" name="location" value="http://cis425a.wpcarey.asu.edu/afhinojo/2016-Spring-Project/contactPage/thankYou.php" />
				
				<!--name-->
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" 
				autofocus
				required
				onfocus="message(this.id)"
				title="Name: 3-30 chars: U/L case letters and - or ' only!"
				pattern="[a-zA-Z-' ]{3,30}"
				/>
				<br />

				
				<!--email--> <!-- set the ID and name to "email" -->
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" 
				required
				onfocus="message(this.id)"
				title="Email: Valid emaily only! 6-50 chars."
				pattern="[a-z0-9_.$!]+@[a-z0-9-_.]+\.[a-z]{2,16}"
				maxlength="50"
				/>
				<br />

				<!-- comment box -->
				<label for="comments">Comments:</label>
				<!-- command below 'textarea' for comment box -->
				<textarea id="comments" name="comments"
					rows="3" cols="49"
					required
					onfocus="message(this.id)"
					title="please tell me about your issue/comment"
					maxlength="500"></textarea>
			</p>
			
			<p class="submit">
				<!-- Value below is what appears on the button -->
				<!--onclick return will make it so the JS gives the page brains, does not confirm until a3validate returns true-->
				<input type="submit" value="Send" />
				<!-- span to rpvoide an rea that we can style -->
				<span class="reset">
				<!--history.go(0) makes it go back to very beginging of page on click -->
					<input type="reset" value="Reset" onclick="history.go(0)" />
				</span>
			</p>
			</form>
		<p id="jsmsgs"></p>
		</div>
	
	</body>
	
</html>