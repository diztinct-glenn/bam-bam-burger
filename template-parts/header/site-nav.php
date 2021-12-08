<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>
	<nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'twentytwentyone' ); ?>">
		<div class="menu-button-container">
			<button id="primary-mobile-menu" class="button" aria-controls="primary-menu-list" aria-expanded="false">
				<span class="dropdown-icon open">
					<svg viewBox="0 0 40 40" width="40" height="40">
				    <rect width="24" height="6" rx="3"></rect>
				    <rect y="13" width="39" height="6" rx="3"></rect>
				    <rect y="27" width="30" height="6" rx="3"></rect>
					</svg>
				</span>
				<span class="dropdown-icon close">
					<svg viewBox="0 0 40 40" width="40" height="40">
				    <rect width="40" height="6" rx="3" transform="translate(4 32) rotate(-45)"></rect>
				    <rect width="40" height="6" rx="3" transform="translate(8 4) rotate(45)"></rect>
					</svg>
				</span>
			</button><!-- #primary-mobile-menu -->
		</div><!-- .menu-button-container -->
		<div class="primary-menu-container">
			<ul id="primary-menu-list" class="menu-wrapper">
				<li class="menu-item">
					<a href="#about">About Us</a>
				</li>
				<li class="menu-item">
					<a href="#video">Videos</a>
				</li>
				<li class="menu-item">
					<a href="#gallery">Photos</a>
				</li>
				<li class="menu-item">
					<a href="#contact">Contact</a>
				</li>
			</ul>
</div>
	</nav><!-- #site-navigation -->
<?php endif; ?>
