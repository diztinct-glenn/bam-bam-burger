<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="site-name">
				<div class="site-logo"><?php the_custom_logo(); ?></div>
			</div><!-- .site-name -->

			<div class="footer-col">
				<h3 class="footer-heading">Important Links</h3>
				<ul>
					<li><a href="#about">About Us</a></li>
					<li><a href="#video">Videos</a></li>
					<li><a href="#gallery">Photos</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h3 class="footer-heading">Other</h3>
				<ul>
					<li><a href="">Privacy Policy</a></li>
					<li><a href="">Terms & Condition</a></li>
					<li><a href="">Return and Refund Policy</a></li>
				</ul>
			</div>
			<div class="footer-col fc-contact">
				<h3 class="footer-heading">Contact Us</h3>
				<ul>
					<li><a href="https://goo.gl/maps/KrdbtwDo1crRLeqt7" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/images/marker.png" alt="marker"> 522 Bay Ave, Point Pleasant Beach, NJ 08742</a></li>
					<li><a href="mailto:"><img src="<?php bloginfo('template_url'); ?>/assets/images/envelope.png" alt="envelope"> abcmail@gmail.com</a></li>
				</ul>
			</div>

			<div class="powered-by">
				&copy; <script>document.write(/\d{4}/.exec(Date())[0])</script> Bam Bam Burger
			</div><!-- .powered-by -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
