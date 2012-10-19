<?php get_template_part('templates/head'); ?>
<body id="splash" <?php body_class(); ?>>

  <!--[if lt IE 7]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->
  <div id="wrap">  
    <?php
      // Use Bootstrap's navbar if enabled in config.php
      if (current_theme_supports('bootstrap-top-navbar')) {
        get_template_part('templates/header-top-navbar');
      } else {
        get_template_part('templates/header');
      }
    ?>
  
    <div id="masthead">
    </div>
    
    <div id="content" role="document">
      <div class="container enclosure">
        <div class="row">
          <?php get_template_part('templates/page', 'header'); ?>
        </div>
        <div class="row">
          <div id="main" class="<?php roots_main_class(); ?>" role="main">
            <?php include roots_template_path(); ?>
          </div>
          <?php if (roots_display_sidebar()) : ?>
          <aside id="sidebar" class="sidebar <?php roots_sidebar_class(); ?>" role="complementary">
            <?php get_template_part('templates/sidebar'); ?>
          </aside>
          <?php endif; ?>
        </div>
      </div>
    </div><!-- /#content -->
    <div id="push"></div>
  </div><!-- /#wrap -->

  <footer id="footer">
    <?php get_template_part('templates/footer'); ?>
  </footer>
  
</body>
</html>
