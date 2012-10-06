<header id="header">
  <div id="banner" class="container" role="banner">
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo home_url(); ?>">
            <img alt="<?php bloginfo('name'); ?>" height="60" src="/assets/img/logo.png" width="209">
          </a>
          <nav id="nav-main" class="nav-collapse" role="navigation">
            <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav pull-right'));
              endif;
            ?>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>