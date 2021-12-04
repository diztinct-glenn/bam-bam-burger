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
		<div id="badge">
			<img id="quotes" src="<?php bloginfo('template_url'); ?>/assets/images/quotes.png" alt="quotes">
			<span>The Quest<br>For The Best</span>
			<img src="<?php bloginfo('template_url'); ?>/assets/images/badge.png" alt="badge">
			<img id="stars" src="<?php bloginfo('template_url'); ?>/assets/images/stars.png" alt="stars">
		</div>
	</div>
</div>

<?php
if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();

		get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
	}

	// Previous/next page navigation.
	twenty_twenty_one_the_posts_navigation();

} else {

	// If no content, include the "No posts found" template.
	get_template_part( 'template-parts/content/content-none' );

}

get_footer();
