<?php
	require_once('form-helper.php');
	require_once('session-helper.php');
	session_start();
	session_unset();
	session_regenerate_id(true);
	session_destroy();
	redirectSuccess("../index.php");
	die;
?>
<pre><?php /* var_dump($_SESSION); */ ?></pre>