<?php
/**
 * @package WordPress
 * @subpackage Magazeen_Theme
 */
?>

	<div id="footer">
	
			<div class="about container">
			
				<h4>About this Blog</h4>
				
				<p class="about-text">
					<?php echo get_option( 'mag_about_blog' ); ?>
				</p>
				
				<p class="copyright">
                    &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo( 'name' ); ?>
				</p>
				
			</div><!-- End about -->
		
	</div><!-- End footer -->
	
	<div id="link-back">
	
		<div class="container clearfix">
		
			<div class="donators">
			
				<a href="http://forum.smashingmagazine.com" class="smashing" title="Brought To You By: www.SmashingMagazine.com">Brought to you By: www.SmashingMagazine.com</a>
				<a href="http://www.wefunction.com" class="function" title="In Partner With: www.WeFunction.com">In Partner with: www.WeFunction.com</a>
			
			</div><!-- End donators -->
			
			<a href="<?php bloginfo( 'rss2_url' ); ?>" class="rss" title="Subscribe to <?php bloginfo( 'name' ); ?> RSS">Subscribe</a>
		
		</div>
	
	</div><!-- End link-back -->
	
	<?php wp_footer(); ?>
	
</body>
</html>
