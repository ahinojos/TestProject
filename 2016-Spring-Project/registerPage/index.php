<!DOCTYPE html>

<!--
register pageb final project
index.php
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
				<p>If you would want to purchase products or sign up for commissions please register in order to do so!</p>
			</div>
			
			<form id="regform" action="process/confirmReg.php" method="post">
		
			<p id="fTitle">Register to Miss Magpie</p>
			<p>
				<!-- Name -->
				<!-- Label for tag ids the label -->
				<label for="name">Name:</label>
				<!-- Input has 3 things: type, ID, Name; type requires a matching ID -->
				<!-- autofocus and required are easier to use for HTML5. -->
				<input type="text" id="name" name="name" 
				autofocus 
				required 
				title="Name: 3-30 chars; U/l case letters and - or ' only!"
				pattern="[a-zA-Z-' ]{3,30}"
				onfocus="message(this.id)"
				/>
				<!-- pattern indicates pattern, the { , } indicates length-->
				<!-- the line below is a break -->
				<br />
				
				
				<!-- Password --> <!-- set the for, ID, and Name = "pword" -->
				<label for="pword">Password:</label>
				<!-- input type password allows for the password "dots"  -->
				<input type="password" id="pword" name="pword" 
				required
				title="Password: 5-15 chars; U/l case letters, 0-9, and -, _, !,$ only! No spaces!."
				pattern="[a-zA-Z0-9-_$!]{5,15}"
				onchange="form.reenter.pattern=this.value"
				onfocus="message(this.id)"
				/>
				<br />
				
				<!-- Reenter --> 
				<label for="reenter">Re-Enter Password:</label>
				<!-- input type password allows for the password "dots"  -->
				<input type="password" id="reenter" name="reenter"
				required
				title="Passwords much match!"
				onfocus="message(this.id)"
				/>
				<br />
				
				<!-- Email --> <!-- set the ID and Name = "email" -->
				<label for="email">Email Address:</label>
				<input type="email" id="email" name="email" 
				required
				title="Email: Valid Email Only! 6-50 chars"
				pattern="[a-zA-Z0-9-_.$!]+@[a-zA-Z0-9-_.]+\.[a-zA-Z]{2,16}"
				maxlength="50"
				onfocus="message(this.id)"
				/>
				<br />
			</p>
			
			<p class="submit">
				<!-- Value below is what appears on the button -->
				<input type="submit" value="Register" />
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