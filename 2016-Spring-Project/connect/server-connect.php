<?php
/*Server connect for final project
  sever-connect.php
  spring 2161
  Aaron hinojos*/

	//define variables
	$host = 'localhost';
	$user = 'afhinojo';
	$pw = 'cis425';
	$db = 'afhinojo';
	
	//set up db connection
	$dbc = mysqli_connect($host, $user, $pw, $db) or die('unable to connect - Sever: '.mysqli_connect_error());
	
?>