<?php
/**
 * The template for displaying the header.
 * Matches Jobcore.in inspirational navigation & header layout.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
/**
 * wp_body_open hook.
 */
do_action( 'wp_body_open' );
?>

<!-- Jobchamp Main Header (Jobcore Style) -->
<header id="masthead" class="site-header jobchamp-header">
	<div class="jobchamp-header-container">
		<!-- Site Logo / Branding -->
		<div class="jobchamp-branding">
			<?php
			if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
				the_custom_logo();
			} else {
				?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="jobchamp-logo-text" rel="home">
					<span>Job</span><span>champ</span>
				</a>
				<?php
			}
			?>
		</div>

		<!-- Mobile Menu Toggle -->
		<button class="jobchamp-mobile-menu-toggle" id="jobchamp-mobile-toggle" aria-label="Toggle Navigation">
			<span></span>
			<span></span>
			<span></span>
		</button>

		<!-- Main Navigation Menu -->
		<nav id="site-navigation" class="jobchamp-navigation">
			<?php
			if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_class'     => 'jobchamp-nav-menu',
						'container'      => false,
						'depth'          => 2,
					)
				);
			} else {
				?>
				<ul class="jobchamp-nav-menu">
					<li class="menu-item current-menu-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
					<li class="menu-item"><a href="<?php echo esc_url( home_url( '/category/freshers/' ) ); ?>">Freshers</a></li>
					<li class="menu-item"><a href="<?php echo esc_url( home_url( '/category/experienced/' ) ); ?>">Experienced</a></li>
					<li class="menu-item"><a href="<?php echo esc_url( home_url( '/category/remote/' ) ); ?>">Remote</a></li>
					<li class="menu-item"><a href="<?php echo esc_url( home_url( '/category/internships/' ) ); ?>">Internships</a></li>
					<li class="menu-item"><a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Contact Us</a></li>
				</ul>
				<?php
			}
			?>
		</nav>

		<!-- Header Search Button -->
		<div class="jobchamp-header-search">
			<button class="jobchamp-search-toggle" id="jobchamp-search-btn" aria-label="Search">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
			</button>
			<!-- Expandable Search Form -->
			<div class="jobchamp-search-dropdown" id="jobchamp-search-box">
				<form role="search" method="get" class="jobchamp-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<input type="search" class="jobchamp-search-field" placeholder="Search jobs, roles, companies..." value="<?php echo get_search_query(); ?>" name="s" />
					<button type="submit" class="jobchamp-search-submit">Search</button>
				</form>
			</div>
		</div>
	</div>
</header>

<!-- Main Content Layout Container -->
<div id="page" class="site grid-container container hfeed jobchamp-page-wrapper">
	<div id="content" class="site-content jobchamp-site-content">
