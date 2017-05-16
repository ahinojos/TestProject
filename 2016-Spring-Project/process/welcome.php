<!DOCTYPE html>

<!--
welcome page for final project
welcome.php
spring 2016
Aaron Hinojos
-->

<?php
//Start PHP session
session_name("user");
session_start("user");

//check to see if user is already logged in
if(!isset($_SESSION["user"]))
{
	header('Location: login.php');
	exit;
}
?>


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
			<p class="bold">Welcome back 
				<?php echo $_SESSION['user']; ?>! Thank's for being part of the Magpie Community.
			</p>
		</div>
		
		</div>
	</body>
	
</html>