
<nav class="navbar navbar-expand-lg fixed-top" aria-label="Main navigation">
  <div class="container">
    <a class="navbar-brand" href="<?php echo $base_url ?>/index.php">
        <img src="<?php echo $base_url ?>/assets/images/logos/sparklesoft.png" class="img-fluid logo" alt="Logo" data-aos="zoom-in" data-aos-duration="1000" loading="lazy" decoding="async">
    </a>
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0" data-aos="fade-left" data-aos-duration="2000">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo $base_url ?>/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $base_url ?>/about-us">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="<?php echo $base_url ?>/services" aria-expanded="false">Services</a>
          <ul class="dropdown-menu">
            <li class="dropdown2">
                <a class="dropdown-item dropdown-toggle icon-last" href="<?php echo $base_url ?>/website-design" aria-expanded="false">Website Design</a>
                <ul class="dropdown-menu2">
                    <li><a class="dropdown-item" href="<?php echo $base_url ?>/wordpress-website">WordPress Website</a></li>
                    <li><a class="dropdown-item" href="<?php echo $base_url ?>/ecommerce-website">Ecommerce Website</a></li>
                    <li><a class="dropdown-item" href="<?php echo $base_url ?>/custom-cms-website">Custom CMS Websites</a></li>
                </ul>
            </li>
            <li><a class="dropdown-item" href="<?php echo $base_url ?>/web-development">App Development</a></li>
            <li><a class="dropdown-item" href="<?php echo $base_url ?>/social-media-marketing">Social Media Marketing</a></li>
            <li><a class="dropdown-item" href="<?php echo $base_url ?>/mobile-applications">Mobile Applications</a></li>
            <li><a class="dropdown-item" href="<?php echo $base_url ?>/staff-augmentation">Staff Augmentation</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $base_url ?>/contact-us">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $base_url ?>/request-a-quote">Request A Quote</a>
        </li>
      </ul>
    </div>
  </div>
</nav>