<div id="login">
	<form  method="POST" action="include/login-handler.php" id="login-form">
		<fieldset>
			<legend>Login</legend>
				<p>		
					<label for="userid">User ID:</label>
					<input type="text" id="userid" name="userid" size="20" <?php preset('loginid'); ?> required>
				</p>

				<p>
					<label for="psword">Password:</label>
					<input type="password" id="psword" name="psword" size="20" required>
				</p>
				<p>         
					<?php displayError('accessfail'); ?>
					<input type="submit" value="Login" />
				</p>
		</fieldset>
	</form>
</div>
