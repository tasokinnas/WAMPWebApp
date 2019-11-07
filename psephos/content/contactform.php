<section id="contact">
	<h3>Contact Us!</h3>
	<form id="contactform" method="POST" action="include/contact-handler.php">
		<fieldset>
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
				<label for="comments">Enter your message here (limit 500 characters):</label></br>
				<textarea rows="10" cols="100" id="comments" name="comments" maxlength="500" <?php preset('comments'); ?> required></textarea>
				<?php displayError('comments'); ?>
			</p>
			<p>
			<input type="submit" value="Submit">
			<input type="reset" value="Clear">
			</p>
		</fieldset>
	</form>	
</section>