<!--
specified home header for final project
homeHeader.php
Spring 2016
Aaron Hinojos
-->
<?php
//check global session variable
	if(!isset ($_SESSION))
	{
		session_id('user');
		session_name('user');
		session_start('user');
	}
?>

<header>
	<ul>
		<li><a href="aboutPage/">ABOUT</a></li>
		<li><a href="productPage/">WORK</a></li>
		<li><a href="contactPage/">CONTACT</a></li>
		<li><a href="registerPage/">REGISTER</a></li>
		<?php
			if (isset($_SESSION['user']) && $_SESSION['user'] != "")
				echo '<li><a href="process/logout.php">logout ('. $_SESSION['user'] .')</a></li>';
			else
				echo '<li><a href="process/login.php">login</a></li>';
		?>
	</ul>
</header>