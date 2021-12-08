<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<div id="main-banner">
	<div class="container">
		<div id="mb-text">
			<h1>Fast-Food<br>Restaurant</h1>
			<p>Located in the heart of downtown<br> Point Pleasant Beach, New Jersey.</p>
		</div>
		<div class="badge">
			<img id="quotes" src="<?php bloginfo('template_url'); ?>/assets/images/quotes.png" alt="quotes">
			<span>The Quest<br>For The Best</span>
			<img src="<?php bloginfo('template_url'); ?>/assets/images/badge.png" alt="badge">
			<img id="stars" src="<?php bloginfo('template_url'); ?>/assets/images/stars.png" alt="stars">
		</div>
	</div>
</div>

<div id="about">
	<div id="about-image">
		<img src="<?php bloginfo('template_url'); ?>/assets/images/about-burger.png" alt="burger">
	</div>
	<div id="about-text">
		<h2 class="section-heading">About Bam-Bam<br>Burger Co.</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
	</div>
	<img id="about-patty" src="<?php bloginfo('template_url'); ?>/assets/images/patty.png" alt="patty">
</div>

<div id="video">
	<h2 class="section-heading">Video Of The Week</h2>

	<img id="arugula" src="<?php bloginfo('template_url'); ?>/assets/images/arugula.png" alt="arugula">
</div>

<div id="order-section">
	<div class="container">
		<div id="os-text">
			<h2>Enjoy The Taste<br>Of Our Burger</h2>
			<p>Located in the heart of downtown<br> Point Pleasant Beach, New Jersey.</p>
			<a class="order-now" href="https://www.toasttab.com/bam-bam-burger-co/v3/">Order Now</a>
		</div>
		<div class="badge">
			<span>30% OFF<span>On 1st Order</span></span>
			<img src="<?php bloginfo('template_url'); ?>/assets/images/badge.png" alt="badge">
		</div>
	</div>
</div>

<div id="gallery">
	<h2 class="section-heading">Our Gallery</h2>

	<img id="gallery-left" src="<?php bloginfo('template_url'); ?>/assets/images/gallery-left.png" alt="veggies">
	<img id="gallery-right" src="<?php bloginfo('template_url'); ?>/assets/images/gallery-right.png" alt="veggies">
</div>

<div id="contact">

</div>

<?php
get_footer();
