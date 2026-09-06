<?php
/**
 * The template for displaying the blog/home posts index.
 * Matches Jobcore.in Homepage posts list.
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
				?>
				<div class="jobchamp-posts-listing">
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'content' );
				endwhile;
				?>
				</div>

				<?php
				// Numbered Pagination
				the_posts_pagination(
					array(
						'mid_size'  => 2,
						'prev_text' => __( 'Previous', 'generatepress' ),
						'next_text' => __( 'Next', 'generatepress' ),
					)
				);

			else :
				get_template_part( 'no-results' );
			endif;

			do_action( 'generate_after_main_content' );
			?>
		</main>
	</div>

	<?php
	get_sidebar();
	get_footer();
