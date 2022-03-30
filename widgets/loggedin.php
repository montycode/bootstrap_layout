<!-- Loggedin Widget -->
<div class="card my-4">
	<h5 class="card-header">Welcome, <?php if ($config['ServerEngine'] !== 'OTHIRE') echo $user_data['name']; else echo $user_data['id'];?>.</h5>
	<div class="card-body">
		<div class="row">
			<div class="col-lg-6">
			<ul class="list-unstyled mb-0">
				<li>
				<a href='myaccount.php'>My Account</a>
				</li>
				<li>
				<a href='createcharacter.php'>Create Character</a>
				</li>
				<li>
				<a href='changepassword.php'>Change Password</a>
				</li>
			</ul>
			</div>
			<div class="col-lg-6">
			<ul class="list-unstyled mb-0">
				<li>
				<a href='settings.php'>Settings</a>
				</li>
				<li>
				<a href='logout.php'>Logout</a>
				</li>
			</ul>
			</div>
		</div>
	</div>
</div>