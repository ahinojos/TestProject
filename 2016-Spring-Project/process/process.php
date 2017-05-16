<?php

//Process login final project
//Process.php
//Spring 2016
//Aaron Hinojos

//Connect to DataBase - LOCAL or SERVER
include('../connect/server-connect.php');
//include('../connect/local-connect.php');

//variable for clashes
$chars ='_%';

//get username from HTML
$email = mysqli_real_escape_string($dbc, $_POST['email']);

// escape the entry again(_)
$email = addcslashes($email, $chars);

//get password from HTML
$pword = mysqli_real_escape_string($dbc, $_POST['pword']);

// escape the entry again(_)
$pword = addcslashes($pword, $chars);



//build query
$query = "select * from finalproject where email = '$email'";

//run query
$result = mysqli_query($dbc, $query) or die('Email read error: '.mysqli_error($dbc));

//check to see if we got any rows
	if (mysqli_num_rows($result) == 0)
	{
		//username invalid - pass rc=1 back to login.php
		header('Location: login.php?rc=1');
		exit;
	}

//If we got to here, we can verify username. Yay!

//Store results of query for password verification
$row = mysqli_fetch_array($result);

//salt and hash the password for comparison
	//if(password_verify($pword, $row['pword']) == $row['pword'])
	if (crypt($pword, $row['pword']) == $row['pword'])
	{
		//passwords matched - populate session variable, and send to welcome.php page
		session_id('user');
		session_name('user');
		session_start('user');
		$_SESSION['user'] = $row['name'];
	
		//close database connection
		mysqli_close($dbc);
	
		//transfer to welcome.php page
		header('Location: welcome.php');
		exit;
	}
	else
	{
		//password invalid
		header('Location: login.php?rc=2');
		exit;
	}

//Pass a 3 back to login.php for testing
//MAKE SURE THIS CODE STAYS AT THE BOTTOM!
header('Location: login.php?rc=3');
exit;

?>