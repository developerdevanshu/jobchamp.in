<?php
/**
 * The Template for displaying all single posts.
 * Matches Jobcore.in Single Post layout.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

	<div id="primary" class="content-area jobchamp-content-area">
		<main id="main" class="site-main jobchamp-site-main">
			<?php
			do_action( 'generate_before_main_content' );

			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					get_template_part( 'content', 'single' );
				endwhile;
			endif;

			do_action( 'generate_after_main_content' );
			?>
		</main>
	</div>

	<?php
	get_sidebar();
	get_footer();
