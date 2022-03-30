  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"><?php echo $config['site_title']; ?></a>  <!-- You can place your logo here. -->
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="downloads.php"><i class="fas fa-download"></i> Downloads</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="serverinfo.php"><i class="fas fa-info-circle"></i> Server Information</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-users"></i> Community
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="market.php">Item Market</a>
              <a class="dropdown-item" href="gallery.php">Gallery</a>
              <a class="dropdown-item" href="support.php">Support</a>
              <a class="dropdown-item" href="helpdesk.php">Helpdesk</a>
              <a class="dropdown-item" href="killers.php">Killers</a>
              <a class="dropdown-item" href="spells.php">Spells</a>
              <?php if ($config['items'] == true) { ?>
                <a class="dropdown-item" href="items.php">Items</a>
              <?php } ?>
              <a class="dropdown-item" href="forum.php">Forum</a>

            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="shop.php" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-shopping-cart"></i> Shop
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="buypoints.php">Buy Points</a>
              <a class="dropdown-item" href="shop.php">Shop Offers</a>
              <?php if ($config['shop_auction']['characterAuction']): ?>
                <a class="dropdown-item" href="auctionChar.php">Character Auction</a>
              <?php endif; ?>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="guilds.php" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-shield-alt"></i> Guilds
            </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="guilds.php">Guild List</a>
                <?php if ($config['guildwar_enabled'] === true) { ?>
                    <a class="dropdown-item" href="guildwar.php">Guild Wars</a>
                <?php } ?>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="changelog.php">Changelog</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>