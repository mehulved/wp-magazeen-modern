<?php
/**
 * @package WordPress
 * @subpackage Magazeen_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<script src="<?php bloginfo( 'template_directory' ); ?>/js/pngfix.js"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery-latest.js"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/js/effects.core.js"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/js/functions.js"></script>
	
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
</head>
<body>

	<div id="header">
		
		<div class="clearfix">
		
			<div id="logo">
		
                <h1 class="header-image">
                    <a href="<?php bloginfo('url'); ?>">
                        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="header image" />
                    </a>
                </h1>
				
			</div><!-- End logo -->
			
            <div id="adspace-header">
                <?php echo stripslashes(get_option('mag_adsense')); ?>             
            </div>
		
		</div><!-- End Container -->
		
	</div><!-- End header -->
	
	<div id="navigation">
	
		<div class="container clearfix">
	
            <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'pages')); ?>
			
			<a href="<?php bloginfo( 'rss2_url' ); ?>" class="rss" title="Subscribe to <?php bloginfo( 'name' ); ?> RSS">Subscribe</a>
			
		</div><!-- End container -->
		
	</div><!-- End navigation -->
	
	<div id="latest-dock">
	
		<div class="dock-back container clearfix">
		
			<div class="latest">
				Check out the Latest Articles:
			</div>
		
			<ul id="dock">
				<?php
					$dock = new WP_Query();
					$dock->query( 'showposts=9' );
					while( $dock->have_posts() ) : $dock->the_post();
				?>
				<li>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/timthumb.php?src=<?php echo get_thumb_image( $post->ID ); ?>&amp;w=69&amp;h=54&amp;zc=1" alt="<?php the_title(); ?>" />
					</a>
					<span><?php the_title(); ?></span>
				</li>
				<?php
					endwhile;
				?>
			</ul>
					
		</div><!-- End container -->
	
	</div><!-- End latest-dock -->
