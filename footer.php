<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Asimba_Creative
 */

?>

	</div><!-- #content -->
	<?php 
		if(!is_page('our-solutions')): 
			get_template_part( 'template-parts/home/content', 'newsletter' );
		endif; 
	?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col">
					<h5>OUR BASE</h5>
					<span class="location text-uppercase">nrb</span>
					&nbsp; 
					<ul class="list-unstyled pt-3 m-0 ">
						<li>Westend Towers,</li>
						<li>Muthangari Drive, Westlands</li>
						<li>Nairobi, KENYA.</li>
					</ul>
				</div>
				<div class="col">
					<h5>BECOME A CLIENT</h5>
					<p>WE WORK WITH ALL CLIENTS BOTH LOCAL & INTERNATIONAL.</p>
					<a class="text-dark" href="mailto:hello@ asimbacreative.co.ke">hello@ asimbacreative.co.ke</a>
					<strong class="d-block">+254 705 015 905</strong>
				</div>
				<div class="col">
					<h5>FOLLOW US</h5>
					<ul class="social-icons d-flex w-100 m-0 p-0 list-unstyled">
						<li class=""><a href="" class=""><i class="fab fa-linkedin-in"></i></a></li>
						<li class=""><a href="" class=""><i class="fab fa-instagram"></i></a></li>
						<li class=""><a href="" class=""><i class="fab fa-twitter"></i></a></li>
						<li class=""><a href="" class=""><i class="fab fa-facebook-f"></i></a></li>
						<li class=""><a href="" class=""><i class="fab fa-youtube"></i></a></li>
					</ul>
					<a href="#" class="btn rounded-0 text-white text-uppercase">get in touch</a>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->

	<div class="copyright py-4 small">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<p class="m-0">©2018–<?php echo get_the_date('Y'); ?> by Asimba Creative Ltd. All rights reserved.</p>
				</div>

				<div class="col-md-4 text-dark">
					<a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a>
				</div>
			</div>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
