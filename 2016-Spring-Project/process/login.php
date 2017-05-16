<!DOCTYPE html>

<!--
login page for final project
login.php
spring 2016
Aaron Hinojos
-->

<html  lang="en">
  	
	<head>
		<!-- estable correct base based on uri --> 
		<?php
			if (substr($_SERVER['HTTP_HOST'],0,9)=='localhost'){
				echo '<base href="http://localhost/CIS-425/2161-Spring/2016-Spring-Project/">';
				include('../connect/local-connect.php');}
			else{
				echo '<base href="http://cis425a.wpcarey.asu.edu/afhinojo/2016-Spring-Project/">';
				include('../connect/server-connect.php');}
		?>
		
		 <!-- Meta tag -->
		<meta charset="utf-8" /> 
		<!-- The following meta tag allows us to not appear on the web -->
		<meta name="robots" content="noindex,nofollow" />
	
		<!-- Link tag for CSS -->
		<link type="text/css" rel="stylesheet" href="stylesheets/register.css" />
		
		<!-- javascript tags -->
		<script type="text/javascript" src="js/messages.js"></script>

		<!--Favicon tag -->
		<link type="image/gif" rel="icon" href="images/magpieFavicon.ico" /> 
	
		<!-- Web Page Title -->
		<title>Ms. Magpie</title>
	
	</head>
	
	<body>

		<div id="d1">
			<?php include ('../php/header.php'); ?>
			<div id ="main">
			</div>
			
			 <!-- Form tags have 3 parameters: ID, ACTION, METHOD  -->
		<form id="regform" action="process/process.php" method="post">
		
			<p>Login to Miss Magpie's Collections!</p>
			<?php
				//check to see return code from process.php
				if (isset($_GET['rc']))
				{
					if ($_GET['rc'] == 1)
						echo '<p class="loginerror">INVALID EMAIL!</p>';
					if ($_GET['rc'] == 2)
						echo '<p class="loginerror">INVALID PASSWORD!</p>';
					if ($_GET['rc'] == 3)
						echo '<p class="loginerror">Returned from process.php!</p>';
				}
			
			?>
					
				<!-- Email --> <!-- set the ID and Name = "email" -->
				<label for="email">Email Address:</label>
				<input type="email" id="email" name="email" 
				autofocus
				required
				title="Email: Valid Email Only! 6-50 chars"
				pattern="[a-zA-Z0-9-_.$!]+@[a-zA-Z0-9-_.]+\.[a-zA-Z]{2,16}"
				maxlength="50"
				onfocus="message(this.id)"
				/>
				<br />
				
				<!-- Password --> <!-- set the for, ID, and Name = "pword" -->    
				<label for="pword">Password:</label>
				<!-- input type password allows for the password "dots"  -->
				<input type="password" id="pword" name="pword" 
				required
				title="Password: 5-15 chars; U/l case letters, 0-9, and -, _, !, $ only! No spaces!."
				pattern="[a-zA-Z0-9-_!$]{5,15}"
				onfocus="message(this.id)"
				/>
				<br />
							
			<p class="submit">
				<!-- Value below is what appears on the button -->
				<input type="submit" value="Login" />
				<!-- Span to provide an area that we can style -->
				<span class="reset">
				<!-- onclick="history.go(0) indicates to go back to the very beginning of page. -->
					<input type="reset" value="Reset" onclick="history.go(0)"/>
				</span>	
			
			</p>
			
		
		</form>
		
		<p id="jsmsgs"><p>
		</div>
	</body>
	
</html>