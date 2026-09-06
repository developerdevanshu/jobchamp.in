<?php
/**
 * The template for displaying the Front Page / Home Page.
 * Matches Jobcore.in Homepage layout (all job posts with left image & right title).
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

			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : ( ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1 );

			$home_query = new WP_Query(
				array(
					'post_type'           => 'post',
					'post_status'         => 'publish',
					'paged'               => $paged,
					'posts_per_page'      => 10,
					'ignore_sticky_posts' => 1,
				)
			);

			if ( $home_query->have_posts() ) :
				?>
				<div class="jobchamp-posts-listing">
				<?php
				while ( $home_query->have_posts() ) :
					$home_query->the_post();
					get_template_part( 'content' );
				endwhile;
				?>
				</div>

				<?php
				// Numbered Pagination
				$big = 999999999;
				$pagination_links = paginate_links(
					array(
						'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format'    => '?paged=%#%',
						'current'   => max( 1, $paged ),
						'total'     => $home_query->max_num_pages,
						'prev_text' => __( 'Previous', 'generatepress' ),
						'next_text' => __( 'Next', 'generatepress' ),
					)
				);

				if ( $pagination_links ) :
					?>
					<div class="nav-links jobchamp-pagination">
						<?php echo $pagination_links; ?>
					</div>
					<?php
				endif;

				wp_reset_postdata();

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
