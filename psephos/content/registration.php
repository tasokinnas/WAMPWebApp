<section id="register">
	<h3>Register Here</h3>
	<form method="POST" action="include/registration-handler.php">
		<fieldset>
			<legend>Registration</legend>
			<p>
				<label for="fname">First Name:</label>
				<input type="text" id="fname" name="fname" maxlength="50" <?php preset('fname'); ?> required>
				<?php displayError('fname'); ?>
			</p>
			<p>
				<label for="lname">Last Name:</label>
				<input type="text" id="lname" name="lname" maxlength="50"  <?php preset('lname'); ?> required>
				<?php displayError('lname'); ?>
			</p>
			<p>
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" maxlength="50" <?php preset('email'); ?> required>
				<?php displayError('email'); ?>
			</p>
			<p>
				<label for="userid">User ID:</label>
				<input type="text" id="userid" name="userid" maxlength="50" <?php preset('userid'); ?> required>
				<?php displayError('userid'); ?>
			</p>
			<p>
				<label for="psword">Password:</label>
				<input type="password" id="psword" name="psword" required>
				<?php displayError('psword'); ?>
			</p>
			<p>
				<label for="psword_match">Password again:</label>
				<input type="password" id="psword_match" name="psword_match" required>
				<?php displayError('psword_match'); ?>
			</p>
			<input type="submit" value="Register">
			<input type="reset" value="Clear">
		</fieldset>
	</form>
</section>