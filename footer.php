<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _s
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( '_s_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', '_s' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', '_s' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', '_s' ), '_s', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- Grab Google CDN's jQuery, fall back to local if offline -->
  <!-- 2.0 for modern browsers, 1.10 for .oldie -->
  <script>
  var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
  if(!oldieCheck) {
    document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"><\/script>');
  } else {
    document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><\/script>');
  }
  </script>
  <script>
  if(!window.jQuery) {
    if(!oldieCheck) {
      document.write('<script src="js/libs/jquery-2.0.2.min.js"><\/script>');
    } else {
      document.write('<script src="js/libs/jquery-1.10.1.min.js"><\/script>');
    }
  }
  </script>

  <script src="<?php bloginfo( 'template_directory' ); ?>/js/libs/gumby.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/libs/ui/gumby.retina.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/libs/ui/gumby.fixed.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/libs/ui/gumby.skiplink.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/libs/ui/gumby.toggleswitch.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/libs/ui/gumby.checkbox.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/libs/ui/gumby.radiobtn.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/libs/ui/gumby.tabs.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/libs/ui/gumby.navbar.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/libs/ui/gumby.fittext.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/libs/ui/jquery.validation.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/libs/gumby.init.js"></script>

  <script src="<?php bloginfo( 'template_directory' ); ?>/js/libs/gumby.min.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/plugins.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/main.js"></script>

  <!-- Change UA-XXXXX-X to be your site's ID -->
  <!--<script>
  window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
  Modernizr.load({
    load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
  });
  </script>-->

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
     chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
  <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

  </body>
</html>
