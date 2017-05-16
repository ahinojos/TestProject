<?php

//logout page for final project
//Logout.php
//Spring 2016

session_id('user');
session_name('user');
session_start('user');
session_unset('user');
session_destroy('user');
$_SESSION = array();
header('Location: login.php');
exit;

?>