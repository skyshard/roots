<?php /*<div id="footer-content" class="container" role="contentinfo">
  <div class="row">
    <div class="span3">
      <div class="footer-header">
        <i class="icon-bar-chart icon-white"></i> <h3>Statistics</h3>
      </div>
      <em>Lorem Ipsum is simply dummy text of the printing and typesetting industry</em>
      <dl class="dl-horizontal">
        <dt>18</dt><dd>Blog Posts</dd>
        <dt>21</dt><dd>Tags</dd>
        <dt>06</dt><dd>Authors</dd>
      </dl>
    </div>
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <div class="span3">
      <div class="footer-header">
        <i class="icon-twitter icon-white"></i> <h3>Tweets</h3>                
      </div>
      <div class='tweet'></div>
    </div>
  </div>
</div>
*/
?>
<div id="footer-navbar" class="navbar navbar-static-top">
  <div class="navbar-inner">
    <div class="container">
      <p class="navbar-text pull-left"><small>Copyright &copy; <?php echo date('Y'); ?> AirPR. All Rights Reserved.</small></p>
      <div class="span1 pull-right">
        <ul class="nav pull-right">
          <li><a href="#"><i class="icon-chevron-up icon-white icon-large"></i></a></li>
        </ul>
      </div>
      <ul class="nav pull-right">
        <li class="divider-vertical"></li>
        <li><a href="http://www.facebook.com/airpr" target="_blank"><i class="icon-facebook icon-white icon-large"></i></a></li>
        <li class="divider-vertical"></li>
        <li><a href="http://www.twitter.com/airpr" target="_blank"><i class="icon-twitter icon-white icon-large"></i></a></li>
        <li class="divider-vertical"></li>
      </ul>
    </div>
  </div>
</div>


<?php if (GOOGLE_ANALYTICS_ID) : ?>
<script>
  var _gaq=[['_setAccount','<?php echo GOOGLE_ANALYTICS_ID; ?>'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>

<?php wp_footer(); ?>