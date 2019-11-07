<?php
	session_start();
	require_once('DAO.php');
	require_once('form-helper.php');
	require_once('session-helper.php');
	
	$fName = $_POST['fname'];
	$lName = $_POST['lname'];
	$email = $_POST['email'];
	$comments = $_POST['comments'];
	$errors = array();
	
	if(!valid_length($fName, 1, 50)) {
		$errors['fname'] = "First Name is required. Must be less than 50 characters.";
	}
	
	if(!valid_length($lName, 1, 50)) {
		$errors['lname'] = "Last Name is required. Must be less than 50 characters.";
	}
	
	if(!valid_length($email, 1, 50)) {
		$errors['email'] = "E-mail address is required. Must be less than 50 characters.";	
	} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = "This email address ($email) is not considered valid.";
	}	
	
	if(empty($errors)) {
		try {
			$dao = new Dao();
			$dao->submitComment($lName, $fName, $email, $comments);
			redirectSuccess("../contact-success.php");
			die;
		} catch (Exception $e) {
			$errors['submit_error'] = "Hmmm, something went wrong.  Please try again.";
			redirectError("../contact-fail.php", $errors, $presets);
			die;
		}
	} else {
		$_SESSION['errors'] = $errors;
		$_SESSION['presets'] = array('fname' => htmlspecialchars($fName), 'lname' => htmlspecialchars($lName), 'email' => htmlspecialchars($email), 'comments' => htmlspecialchars($comments));
		header('Location: ../contact-fail.php');
		die;
	}