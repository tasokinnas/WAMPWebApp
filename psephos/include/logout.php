
<?php
	require_once('form-helper.php');
	require_once('session-helper.php');
	$user = $_SESSION['username'];
?>
	
<div id="logout">
	<h3>Welcome <?= $user ?>!</h3>
	<form  method="POST" action="include/logout-handler.php" id="logout-form">
		<p>         
			<input type="submit" value="Logout" />
			<!--TODO: make an error handler... -->
		</p>	
	</form>
</div>
