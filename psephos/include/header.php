<?php
	session_start();
	require_once('session-helper.php');
	require_once('form-helper.php');
	
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?= $siteName ?> - <?= $thisPage; ?></title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Taso's Idaho voter analysis webpage">
		<meta name="author" content="Taso Constantine Kinnas">
		<link rel="icon" type="image/jpeg" href="images/stones.jpg" />
		<link href="include/psephos.css" type="text/css" rel="stylesheet" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" async></script>
		<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.2.min.js"></script>
		<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js" async></script>
		<script src="js/my_jquery_functions.js" async></script>
	</head>
	<body>	
		<header>
			<img id="logo" src="images/resize.jpg" alt="logo">
			<h1><?= $siteName ?></h1>
			<h2>The Voting People</h2>

<?php

if( !isAccessGranted() ) {
	$errors['message'] = "You must login first.";
	require_once('include/login.php');
} else {
	require_once('include/logout.php');
}

?>