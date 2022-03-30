<!-- House Widget -->
<div class="card mb-4">
	<h5 class="card-header">Search Town List</h5>
	<div class="card-body">
		<form action="houses.php" method="<?php if ($config['ServerEngine'] !== 'TFS_10') echo "post"; else echo "get" ;?>">
			<p>Select town:</p>
			<select class="form-control" name="<?php if ($config['ServerEngine'] !== 'TFS_10') echo "selected"; else echo "id" ;?>">
				<?php foreach ($config['towns'] as $id => $name) echo '<option value="'. $id .'">'. $name .'</option>';	?>
			</select>
			<?php
				/* Form file */
				if ($config['ServerEngine'] !== 'TFS_10') Token::create();
			?> 
			<br>
			<button class="btn btn-primary" type="submit">Search</button>
		</form>
	</div>
</div>