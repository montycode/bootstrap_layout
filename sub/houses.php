<form action="houses.php" method="post">
	<h2>Select town:</h2>
	<br>
	<select class="form-control" name="selected">
	<?php
	foreach ($config['towns'] as $id => $name) echo '<option class="form-control" value="'. $id .'">'. $name .'</option>';
	?>
	</select> 
	<?php
		/* Form file */
		Token::create();
	?>
	<br>
	<button class="btn btn-primary" type="submit"><i class="fas fa-search"></i> Search</button>
</form>