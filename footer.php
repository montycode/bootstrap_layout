 <!-- Footer -->
 <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">
	  &copy; <?php echo $config['site_title'];?>.
		<?php 
			echo 'Server date and clock is: '. getClock(false, true) .' Page generated in '. elapsedTime() .' seconds. Q: '.$aacQueries;
		?>
		<br>	Bootstrap Design by: <a href="https://otland.net/members/erickso.167165/">Erickso</a>. Engine: <a href="credits.php">Znote AAC</a>
	  </p>

	  <?php // If you are logged in as an admin, display SQL queries below footer.
			if (user_logged_in() && is_admin($user_data)) {
				global $accQueriesData;
				data_dump($accQueriesData, false, "Logged in as Admin: SQL queries executed:");
			}
		?>
    </div>
    <!-- /.container -->
  </footer>