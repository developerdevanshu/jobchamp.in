<?php
/**
 * The template for displaying Category pages.
 * Matches Jobcore.in Category Archive layout with [⚡ CATEGORY]────────● header banner.
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
				$current_cat_title = single_cat_title( '', false );
				?>
				<!-- Jobcore Signature Category Header Banner: [ ⚡ BBA-MBA ]────────────────────────● -->
				<div class="jobchamp-category-header-wrap">
					<div class="jobchamp-category-pill">
						<svg class="jobchamp-lightning-icon" width="16" height="16" viewBox="0 0 24 24" fill="#000000" xmlns="http://www.w3.org/2000/svg"><path d="M7 2v11h3v9l7-12h-4l4-8z"/></svg>
						<span><?php echo esc_html( $current_cat_title ); ?></span>
					</div>
					<div class="jobchamp-category-line-bar">
						<span class="jobchamp-category-line"></span>
						<span class="jobchamp-category-dot"></span>
					</div>
				</div>

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
