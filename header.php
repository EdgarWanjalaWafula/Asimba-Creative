<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Asimba_Creative
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php 
	get_template_part( 'template-parts/content', 'search-panel' ); 
	get_template_part( 'template-parts/content', 'menu-panel' ); 

?>
<!-- <div id="locked"></div> -->
<div id="page" class="site">
	<?php 
		
		$class = "";  
		
		if(is_front_page()):
			$class = "";  
		else: 
			$class = "inner-page";  
		endif; ?>
	
	<header id="masthead" class="site-header position-fixed <?php echo $class; ?>">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-md-3">
					<div class="site-branding">

						<?php
							if(is_front_page()):
								the_custom_logo();
							else: ?>
								<a href="<?php echo home_url(); ?>" class="logo-inner">
									<img src="<?php echo wp_get_attachment_image_url('152', 'full'); ?>" alt="Asimba Creative">
								</a>
							<?php endif; 
						?>
					</div><!-- .site-branding -->
				</div>
				<div class="col-md-8 offset-1">
					<nav id="site-navigation" class="main-navigation menu-primary-container d-flex justify-content-end">
						<?php
							wp_nav_menu( array(
								'theme_location' 	=> 'menu-1',
								'menu_id'        	=> 'primary-menu',
								'menu_class'    	=> 'd-flex align-items-center list-unstyled m-0 p-0 text-uppercase',
							) );
						?>
						<i class="fas fa-search text-white"></i>
					</nav><!-- #site-navigation -->
					<div class="toggle-button">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
