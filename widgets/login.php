<!-- Login / Register Widget -->
<div class="card mb-4">
	<h5 class="card-header">Login / Register</h5>
	<div class="card-body">
		<form action="login.php" method="post">
			<label for="username">Username:</label>
			<input id="username" class="form-control" type="text" name="username">
			<label for="password">Password:</label>
			<input id="password" class="form-control" type="password" name="password">
			<?php if ($config['twoFactorAuthenticator'] == true) { ?>
				<label for="token">Token:</label>
				<input id="token" class="form-control" type="password" name="authcode">
			<?php } ?>
			<br>
			<button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
			<?php
				if ($config['use_token'] == true) {
					/* Form file */
					Token::create();
				}
			?>
		</form>
		<hr>
		<a class="btn btn-success btn-lg btn-block" href="register.php" role="button">New account</a>
		<a class="btn btn-danger btn-lg btn-block" href="recovery.php" role="button">Account Recovery</a>
	</div>
</div>
