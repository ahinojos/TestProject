<?php
/*Local connect for final project
  local-connect.php
  spring 2161
  Aaron hinojos*/

	//define variables
	$host = 'localhost';
	$user = 'root';
	$pw = '';
	$db = 'spring2161';
	
	//set up db connection
	$dbc = mysqli_connect($host, $user, $pw, $db) or die('unable to connect - Local" '.mysqli_connect_error());

?>