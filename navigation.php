<?php
echo '
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>



  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="index.php">
      <img src="Images/Logo/PiperLogov4.png" width="30" height="30" alt="Piper Web Design Logo" id=navLogo>
    </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="portfolio.php">Portfolio</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="services.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="services.php">All Services</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="bespoke-web-design.php">Bespoke Web Design</a>
          <a class="dropdown-item" href="wordpress.php">WordPress Websites</a>
          <a class="dropdown-item" href="mobile.php">Mobile Websites</a>
          <a class="dropdown-item" href="seo.php">SEO Optimisation</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>
  </div>
</nav>
<div class="color-accent container-fluid">
</div>
'

?>
