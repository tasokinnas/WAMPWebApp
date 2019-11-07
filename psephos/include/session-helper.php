<?php

/**
 * set access_granted to true
 * stores userid info
 * regenerates a new sesison id
 */
function loginUser($user) {
	$_SESSION['access_granted'] = true;
	$_SESSION['username'] = $user['fname'];
	$_SESSION['userid'] = $user['loginid'];
	session_regenerate_id(true);	
}

/**
 * Function to flag if user is logged in or not.
 **/
function isAccessGranted() {
	if( isset($_SESSION['access_granted']) && ($_SESSION['access_granted'] === true) ) {
		return true;
	} else {
		return false;
	}
}


?>