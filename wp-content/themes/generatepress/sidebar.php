<?php
/**
 * The Sidebar containing the main widget areas.
 * Matches Jobcore.in inspirational sidebar layout with custom social links.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<div <?php generate_do_attr( 'right-sidebar' ); ?>>
	<div class="inside-right-sidebar jobchamp-sidebar">
		<?php do_action( 'generate_before_right_sidebar_content' ); ?>

		<!-- 1. Top Sidebar Advertisement -->
		<div class="jobchamp-sidebar-widget jobchamp-ad-widget">
			<div class="jobchamp-ad-box">
				<span class="jobchamp-ad-label">---Advertisement---</span>
			</div>
		</div>

		<!-- 2. Follow Us Widget (WhatsApp, Instagram, Facebook, LinkedIn) -->
		<div class="jobchamp-sidebar-widget jobchamp-follow-us-widget">
			<div class="jobchamp-pill-header-wrap">
				<div class="jobchamp-pill-header">Follow Us</div>
			</div>
			<div class="jobchamp-social-buttons">
				<!-- 1. WhatsApp -->
				<a href="https://chat.whatsapp.com/Bj4uDzzeoivLLdVnxUtNum?s=cl&p=a&mlu=4&ilr=4" target="_blank" rel="noopener noreferrer" class="jobchamp-social-action-btn btn-whatsapp">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M9.04 7.55C8.84 7.55 8.52 7.62 8.25 7.91C7.99 8.2 7.23 8.91 7.23 10.36C7.23 11.8 8.29 13.19 8.43 13.39C8.58 13.58 10.5 16.55 13.46 17.83C14.16 18.14 14.71 18.32 15.14 18.46C15.85 18.68 16.49 18.65 17 18.57C17.57 18.49 18.76 17.85 19.01 17.14C19.26 16.44 19.26 15.84 19.18 15.71C19.11 15.58 18.91 15.5 18.61 15.36C18.32 15.21 16.89 14.5 16.63 14.41C16.36 14.31 16.17 14.26 15.97 14.55C15.78 14.84 15.21 15.5 15.04 15.71C14.87 15.91 14.7 15.93 14.41 15.79C14.12 15.64 13.18 15.33 12.07 14.34C11.2 13.57 10.62 12.61 10.45 12.32C10.28 12.03 10.43 11.87 10.58 11.73C10.71 11.6 10.88 11.38 11.02 11.21C11.17 11.04 11.22 10.92 11.32 10.72C11.41 10.53 11.37 10.36 11.29 10.21C11.22 10.07 10.64 8.63 10.39 8.04C10.15 7.47 9.91 7.55 9.74 7.54C9.57 7.54 9.37 7.55 9.04 7.55Z"/></svg>
					<span>Join WhatsApp</span>
				</a>

				<!-- 2. Instagram -->
				<a href="https://www.instagram.com/jobchamp112/" target="_blank" rel="noopener noreferrer" class="jobchamp-social-action-btn btn-instagram">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
					<span>Instagram</span>
				</a>

				<!-- 3. Facebook -->
				<a href="https://www.facebook.com/people/JobChamp/61591456237291/" target="_blank" rel="noopener noreferrer" class="jobchamp-social-action-btn btn-facebook">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
					<span>Facebook</span>
				</a>

				<!-- 4. LinkedIn -->
				<a href="https://www.linkedin.com/in/job-champ-8687b341b/" target="_blank" rel="noopener noreferrer" class="jobchamp-social-action-btn btn-linkedin">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 10.9v8.37H9.2V10.9H6.46M7.83 6.46c-.92 0-1.66.74-1.66 1.66s.74 1.67 1.66 1.67 1.66-.75 1.66-1.67-.74-1.66-1.66-1.66Z"/></svg>
					<span>linkedIn</span>
				</a>
			</div>
		</div>

		<!-- 3. Recent Posts Widget -->
		<div class="jobchamp-sidebar-widget jobchamp-recent-posts-widget">
			<div class="jobchamp-pill-header-wrap">
				<div class="jobchamp-pill-header">Recent Posts</div>
			</div>
			<div class="jobchamp-recent-posts-list">
				<?php
				$recent_query = new WP_Query(
					array(
						'posts_per_page'      => 5,
						'post_status'         => 'publish',
						'ignore_sticky_posts' => 1,
					)
				);

				if ( $recent_query->have_posts() ) :
					while ( $recent_query->have_posts() ) :
						$recent_query->the_post();
						?>
						<div class="jobchamp-recent-item">
							<div class="jobchamp-recent-thumb">
								<a href="<?php the_permalink(); ?>">
									<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'jobchamp-recent-img', 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?>
									<?php else : ?>
										<div class="jobchamp-recent-placeholder">
											<span>Job</span>
										</div>
									<?php endif; ?>
								</a>
							</div>
							<div class="jobchamp-recent-info">
								<h4 class="jobchamp-recent-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h4>
								<span class="jobchamp-recent-date"><?php echo get_the_date( 'F j, Y' ); ?></span>
							</div>
						</div>
						<?php
					endwhile;
					wp_reset_postdata();
				endif;
				?>
			</div>
		</div>

		<?php
		// Dynamic widgets if any are registered in WP admin
		if ( is_active_sidebar( 'sidebar-1' ) ) {
			dynamic_sidebar( 'sidebar-1' );
		}
		?>

		<?php do_action( 'generate_after_right_sidebar_content' ); ?>
	</div>
</div>
