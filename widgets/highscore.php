<!-- Highscores Widget -->
<div class="card mb-4">
	<h5 class="card-header">Search Highscores</h5>
	<div class="card-body">
		<div class="inner">
			<form action="highscores.php" method="get">
	
				<p>Select skill type to view:</p>
				<select class="form-control" name="type">
					<option value="7">Experience</option>
					<option value="5">Shielding</option>
					<option value="3">Axe</option>
					<option value="2">Sword</option>
					<option value="1">Club</option>
					<option value="4">Distance</option>
					<option value="9">Fist</option>
					<option value="6">Fish</option>
					<option value="8">Magic</option>
				</select>
				<br>
				<button class="btn btn-primary" type="submit">Fetch scoreboard</button>
			</form>
		</div>
	</div>
</div>