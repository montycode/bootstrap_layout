<!-- Server Information Widget -->
<div class="card mb-4">
	<h5 class="card-header">Server Information</h5>
	<div class="card-body">
	<?php
		$status = true;
		if ($config['status']['status_check']) {
			@$sock = fsockopen ($config['status']['status_ip'], $config['status']['status_port'], $errno, $errstr, 1);
			if(!$sock) {
				echo '<div class="alert alert-danger" role="alert">Server Offline.</div>';
				$status = false;
			}
			else {
				$info = chr(6).chr(0).chr(255).chr(255).'info';
				fwrite($sock, $info);
				$data='';
				while (!feof($sock))$data .= fgets($sock, 1024);
				fclose($sock);
				echo '<div class="alert alert-success" role="alert">Server Online!</div>';
			}
		}
		if ($status) {
			?>
			<li><a href="onlinelist.php">Players online: 
				<?php echo user_count_online(); ?></a></li>
			<?php
		}
		?>
		<li>Registered accounts: <?php echo user_count_accounts();?></li>
	</div>
</div>
