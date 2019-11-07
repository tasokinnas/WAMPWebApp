<?php
	session_start();
	require_once('session-helper.php');
	require_once('form-helper.php');
	require_once('DAO.php');	
	$userid = $_POST['userid'];
	$psword = $_POST['psword'];
	$errors	= array();
	
	if( (!valid_length($userid, 1, 50)) || (!valid_length($psword, 10, 72)) ) {
		$errors['accessfail'] = "This uiserid or password is incorrect.  Please Try again.";
	}
	
	if(empty($errors)) {
		try {
			$dao = new Dao();
			$user = $dao->validateUser($userid, $psword);
			if($user){
				loginUser($user);
				redirectSuccess("../query.php");
				die;
			} else {
				$errors['message'] = "This uiserid or password is incorrect.  Please Try again.";
				redirectError("../index.php", $errors, $presets);
				die;
			}
		} catch (Exception $e) {
			$errors['message'] = "Hmmm, something went wrong.  Please try again.";
			redirectError("../index.php", $errors, $presets);
			die;
		}
	} else {
		$_SESSION['errors'] = $errors;
		$_SESSION['presets'] = array('loginid' => htmlspecialchars($userid));
		redirectError("../index.php", $errors, $presets);
		die;
	}
?>