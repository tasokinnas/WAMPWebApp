<?php
	session_start();
	require_once('DAO.php');
	require_once('form-helper.php');
	require_once('session-helper.php');
	
	$fName = $_POST['fname'];
	$lName = $_POST['lname'];
	$email = $_POST['email'];
	$userid = $_POST['userid'];
	$psword = $_POST['psword'];
	$psword_match = $_POST['psword_match'];
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
	
	if(!valid_length($userid, 1, 50)) {
		$errors['userid'] = "UserID is required. Must be less than 50 characters.";
	}
	
	if(!valid_length($psword, 10, 72)) {
		$errors['psword'] = "Please enter a password of at least length 10.";
	} else if($psword != $psword_match) {
		$errors['psword_match'] = "Passwords dont match.";
	} 		
	
 	if(empty($errors)) {
		try {
			$dao = new Dao();
			if($dao->userExists($userid)) {
				redirectError("../register-fail.php", $errors, $presets);
				die;
			} else if($dao->emailExists($email)) {
				redirectError("../register-fail.php", $errors, $presets);
				die;
			} else {
				$dao->addUser($lName, $fName, $email, $userid, $psword);
				redirectSuccess("../register-success.php");
				die;
			}
		} catch (Exception $e) {
			$errors['submit_error'] = "Hmmm, something went wrong.  Please try again.";
			redirectError("../register.php", $errors, $presets);
			die;
		}
	} else {
		$_SESSION['errors'] = $errors;
		$_SESSION['presets'] = array('fname' => htmlspecialchars($fName), 'lname' => htmlspecialchars($lName), 'email' => htmlspecialchars($email), 'userid' => htmlspecialchars($userid));
		header('Location: ../register.php');
		die;
	}
	
?>	