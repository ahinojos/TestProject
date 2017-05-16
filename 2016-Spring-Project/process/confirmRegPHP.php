<?php
	//php confirm code for final project
	//confirmRegPHP.php
	//spring2016
	//Aaron Hinojos
	//Set default timezone
	date_default_timezone_set('MST');
	
	//ss val variables
	$rub = '_';
	$perc = '%';
	$work = '';
	$chars = '_%';
	$bslash = '\\';
	$fslash = '/';
	
	//name
		//posting input from HTML
		$oname = $_POST['name'];
	
		// move HTML value into work variable
		$work = $oname;
		
		// ss val: / \ _ %
		if (strpos($work, $rub) > -1 || 
			strpos($work, $perc) > -1 ||
			strpos($work, $bslash) > -1 ||
			strpos($work, $fslash) > -1)
		{
			header("Location: ssval.php?&work=$work&field=NAME");
			exit;
		}
		
		// ss val: length
		if (strlen($work) < 3 || strlen($work) > 30)
		{
			header("Location: ssval.php?&work=$work&field=NAME");
			exit;
		}
		
		// escape entry
		$work = mysqli_real_escape_string($dbc, $work);
		
		// escape the chars real_escape_string misses
		$work = addcslashes($work, $chars);
		
		// entry ok = store in db
		$name = $work;
		
		
	//Password
	$work = $_POST['pword'];
		
		// ss val: / \ _ %
		if (strpos($work, $perc) > -1 ||
			strpos($work, $bslash) > -1 ||
			strpos($work, $fslash) > -1)
		{
			header("Location: ssval.php?&work=$work&field=PASSWORD");
			exit;
		}
		
		// ss val: length
		if (strlen($work) < 5 || strlen($work) > 15)
		{
			header("Location: ssval.php?&work=$work&field=PASSWORD");
			exit;
		}
		
		// escape entry
		$work = mysqli_real_escape_string($dbc, $work);
		
		// escape characters real_escape_string misses
		$work = addcslashes($work, $chars);
		
		//Salt and Hash pword before writing to DB
		//$work = password_hash($work, PASSWORD_DEFAULT);
		
		// entry ok = store in db
		$pword = crypt($work);
		
	//Email
	$work = $_POST['email'];
		
		// ss val: / \ %
		if (strpos($work, $perc) > -1 ||
			strpos($work, $bslash) > -1 ||
			strpos($work, $fslash) > -1)
		{
			header("Location: ssval.php?&work=$work&field=EMAIL");
			exit;
		}
		
		// ss val: length
		if (strlen($work) < 6 || strlen($work) > 50)
		{
			header("Location: ssval.php?&work=$work&field=EMAIL");
			exit;
		}
		
		// escape entry
		$work = mysqli_real_escape_string($dbc, $work);
		
		// escape characters real_escape_string misses
		$work = addcslashes($work, $chars);
		
		// verify email with PHP (RFC 822), "===" use incase of false positives, comparison operator that compares type that has to = false.
		if (filter_var($work, FILTER_VALIDATE_EMAIL) === false)
		{
			header("Location: ssval.php?&work=$work&field=EMAIL");
			exit;
		}
		
		// entry ok = store in db
		$email = $work;
		
	
	
	// Verify Unique email
	$verify = mysqli_query($dbc, "select id from finalproject where email = '$email'")
		or die('confirm7 read error'.mysqli_error($dbc));
		
	// Check to see if we got any rows
	if (mysqli_num_rows($verify) != 0)
	{
		header("Location: emailUnavail.php?&email=$email");
		exit;
	}
	
	//build query
	$query = "insert into finalproject(name,pword,email)" .
			 "values('$name','$pword','$email')";
			 
	// run query
	$result = mysqli_query($dbc, $query) 
	or die('DB write error: '.mysqli_error($dbc));
	
	//close database connection (dbc)
	mysqli_close($dbc);
?>