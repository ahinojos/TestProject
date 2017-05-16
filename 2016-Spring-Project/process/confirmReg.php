<!DOCTYPE html>

<!--
confirm registration - final project
confirmReg.php
Spring 2016
Aaron Hinojos
-->

<?php
	// db connection variables (LOCAL or SERVER)
	include('../connect/server-connect.php');
	//include('../connect/local-connect.php');
	
	//php code file
	include('../process/confirmRegPHP.php'); 

?>

<html lang="en">
  	
  <head>
	<!-- estable correct base based on uri --> 
		<!-- estable correct base based on uri --> 
		<?php
			if (substr($_SERVER['HTTP_HOST'],0,9)=='localhost')
			{
				echo '<base href="http://localhost/CIS-425/2161-Spring/2016-Spring-Project/">';
				include('../connect/local-connect.php');
			}
			else
			{
				echo '<base href="http://cis425a.wpcarey.asu.edu/afhinojo/2016-Spring-Project/">';
				include('../connect/server-connect.php');
			}
		?>
		
    <!-- Meta tag -->
    <meta charset="utf-8" />
	<!-- The following meta tag allows us to not appear on the web -->
	<meta name="robots" content="noindex,nofollow" />
	<meta http-equiv="refresh" content="5; url=process/login.php" />

    <!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="stylesheets/register.css" />
	
	<!-- Favicon tag -->
	<link type="image/gif" rel="icon" href="images/magpieFavicon.ico" />

    <!-- Web Page Title -->
    <title>Ms. Magpie</title>
	
	

  </head>
	<!-- the onload command below is implmented with JS to allow focus on name" -->
  <body>
	<div id="wrapper">
	
		<?php include ('../php/header.php'); ?>
		
		<div id ="main">
			<p>
				<?php
					$time = date("G");
					if ($time <"12")
							echo 'Morning, ' . $oname;
					elseif ($time < "17")
							echo 'Good Afternoon, ' . $oname;
					else
							echo 'Good Evening, ' . $oname;
				?>
			</p>
			<p>Thank you for registering to Miss Magpie's Collection!</p>
			<p>You will be redirected to the Login page.</p>
			<p id ="confirmPic"> <img src="images/ahriPoster.png" alt="ahri Poster"/> </p>
		</div>
		

		
	</div>
  </body>

</html>