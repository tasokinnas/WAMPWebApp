<?php

/**
 * Redirects user to a specified page, if there was an error
 * with user provided inputs. 
 */
function redirectError($location, $errors, $presets=NULL) {
	$_SESSION['errors'];
	if($presets) {
		$_SESSION['presets'] = $presets;
	}
	header("Location: $location");
	die;
}

/**
 * Redirects user to a specified page, if there were no errors
 * with user provided inputs. 
 */
function redirectSuccess($location, $user = NULL) {
	if($user) {
		$_SESSION['user'] = $user;
	}
	header("Location: $location");
	die;
}

/**
 * Prints preset for given key (if one exists).
 */
function preset($key) {
	if(isset($_SESSION['presets'][$key]) && !empty($_SESSION['presets'][$key])) { 
		echo 'value="' . $_SESSION['presets'][$key] . '" '; 
	}
}

/**
 * Prints error for given key (if one exists).
 */
function displayError($key) {
	if(isset($_SESSION['errors'][$key])) { ?>
		<span id="<?= $key . "Error" ?>" class="error"><?= $_SESSION['errors'][$key] ?></span>
	<?php }
}

/**
 * Clears error data from session when we are done so they don't show
 * up on refresh or if user submits correct info next time around.
 */
function clearErrors() {
	unset($_SESSION['errors']);	
	unset($_SESSION['presets']);	
}

/**
 * Set min and max lengths for field values.
 **/
function valid_length($field, $min, $max) {
	$trimmed =trim($field);
	return (strlen($trimmed) >= $min && strlen($trimmed) <= $max);
}

?>