<?php
/**
 * The template for displaying single posts.
 * Matches Jobcore.in single post layout with top/middle/bottom ad boxes & related posts grid.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$categories = get_the_category();
$category_name = ! empty( $categories ) ? esc_html( $categories[0]->name ) : 'JOBS';
$category_link = ! empty( $categories ) ? esc_url( get_category_link( $categories[0]->term_id ) ) : '#';
$author_name = get_the_author();
$author_id = get_the_author_meta( 'ID' );
$author_url = get_author_posts_url( $author_id );
$author_avatar = get_avatar( $author_id, 48, '', $author_name, array( 'class' => 'jobchamp-author-img' ) );
$post_date = get_the_date( 'F j, Y' );
$raw_permalink = get_permalink();
$raw_title = get_the_title();
$post_url_enc = rawurlencode( $raw_permalink );
$post_title_enc = rawurlencode( $raw_title );
$whatsapp_share_url = 'https://api.whatsapp.com/send?text=' . $post_title_enc . '%20' . $post_url_enc;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'jobchamp-single-article' ); ?>>
	<div class="jobchamp-single-inner">
		<!-- 1. Top Advertisement Box (Above Post Title) -->
		<div class="jobchamp-single-top-ad">
			<div class="jobchamp-ad-box-sm">
				<span class="jobchamp-ad-label">---Advertisement---</span>
			</div>
		</div>

		<!-- 2. Category Tag with Lightning Icon -->
		<div class="jobchamp-single-category">
			<a href="<?php echo $category_link; ?>" class="jobchamp-cat-link">
				<svg class="jobchamp-lightning-icon" width="14" height="14" viewBox="0 0 24 24" fill="#0056D2" xmlns="http://www.w3.org/2000/svg"><path d="M7 2v11h3v9l7-12h-4l4-8z"/></svg>
				<span><?php echo esc_html( $category_name ); ?></span>
			</a>
		</div>

		<!-- 3. Single Post Title (H1) -->
		<header class="jobchamp-single-header">
			<h1 class="jobchamp-single-title"><?php the_title(); ?></h1>
		</header>

		<!-- 4. Author Meta Row with Avatar & Social Share -->
		<div class="jobchamp-single-meta-row">
			<div class="jobchamp-author-info">
				<div class="jobchamp-author-avatar">
					<?php echo $author_avatar; ?>
				</div>
				<div class="jobchamp-author-details">
					<div class="jobchamp-author-name">
						<span>By <?php echo esc_html( $author_name ); ?></span>
						<svg class="jobchamp-verified-badge" width="16" height="16" viewBox="0 0 24 24" fill="#0084ff" xmlns="http://www.w3.org/2000/svg" title="Verified"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
					</div>
					<div class="jobchamp-single-date">
						Published On: <?php echo esc_html( $post_date ); ?>
					</div>
				</div>
			</div>

			<div class="jobchamp-single-share">
				<!-- WhatsApp Share -->
				<a href="<?php echo esc_url( $whatsapp_share_url ); ?>" target="_blank" rel="noopener noreferrer" class="jobchamp-share-btn share-whatsapp" title="Share on WhatsApp">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M9.04 7.55C8.84 7.55 8.52 7.62 8.25 7.91C7.99 8.2 7.23 8.91 7.23 10.36C7.23 11.8 8.29 13.19 8.43 13.39C8.58 13.58 10.5 16.55 13.46 17.83C14.16 18.14 14.71 18.32 15.14 18.46C15.85 18.68 16.49 18.65 17 18.57C17.57 18.49 18.76 17.85 19.01 17.14C19.26 16.44 19.26 15.84 19.18 15.71C19.11 15.58 18.91 15.5 18.61 15.36C18.32 15.21 16.89 14.5 16.63 14.41C16.36 14.31 16.17 14.26 15.97 14.55C15.78 14.84 15.21 15.5 15.04 15.71C14.87 15.91 14.7 15.93 14.41 15.79C14.12 15.64 13.18 15.33 12.07 14.34C11.2 13.57 10.62 12.61 10.45 12.32C10.28 12.03 10.43 11.87 10.58 11.73C10.71 11.6 10.88 11.38 11.02 11.21C11.17 11.04 11.22 10.92 11.32 10.72C11.41 10.53 11.37 10.36 11.29 10.21C11.22 10.07 10.64 8.63 10.39 8.04C10.15 7.47 9.91 7.55 9.74 7.54C9.57 7.54 9.37 7.55 9.04 7.55Z"/></svg>
				</a>
				<!-- Universal Share (WhatsApp, Facebook, LinkedIn, Twitter, Copy Link) -->
				<button type="button" class="jobchamp-share-btn share-native" onclick="jobchampUniversalShare('<?php echo esc_js( $raw_title ); ?>', '<?php echo esc_js( $raw_permalink ); ?>')" title="Share this Job Post">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/></svg>
				</button>
			</div>
		</div>

		<!-- 5. Featured Image (Full width below title & metadata) -->
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="jobchamp-single-featured-image">
				<?php the_post_thumbnail( 'full', array( 'class' => 'jobchamp-featured-img', 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?>
			</div>
		<?php endif; ?>

		<!-- 6. Middle Advertisement Box (Directly After Featured Image) -->
		<div class="jobchamp-single-mid-ad">
			<div class="jobchamp-ad-box-sm">
				<span class="jobchamp-ad-label">---Advertisement---</span>
			</div>
		</div>

		<!-- 7. Post Body Content -->
		<div class="jobchamp-single-content entry-content">
			<?php the_content(); ?>

			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'generatepress' ),
					'after'  => '</div>',
				)
			);
			?>
		</div>

		<!-- 8. Post Tags if any -->
		<?php
		$tags = get_the_tags();
		if ( ! empty( $tags ) ) :
			?>
			<div class="jobchamp-post-tags">
				<span class="jobchamp-tags-label">Tags:</span>
				<?php foreach ( $tags as $tag ) : ?>
					<a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" class="jobchamp-tag-badge">#<?php echo esc_html( $tag->name ); ?></a>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<!-- 9. Bottom Advertisement Box (After Post Content) -->
		<div class="jobchamp-single-bottom-ad">
			<div class="jobchamp-ad-box-md">
				<span class="jobchamp-ad-label">---Advertisement---</span>
			</div>
		</div>

		<!-- 10. Related / Recent Posts Grid (Matching Jobcore.in style) -->
		<div class="jobchamp-related-posts-section">
			<div class="jobchamp-related-header">
				<h3 class="jobchamp-related-title">Related Post</h3>
			</div>
			<div class="jobchamp-related-grid">
				<?php
				$current_cat_ids = wp_get_post_categories( get_the_ID() );
				$related_args = array(
					'posts_per_page'      => 4,
					'post__not_in'        => array( get_the_ID() ),
					'category__in'        => ! empty( $current_cat_ids ) ? $current_cat_ids : array(),
					'ignore_sticky_posts' => 1,
					'post_status'         => 'publish',
				);
				$related_query = new WP_Query( $related_args );

				// Fallback to latest posts if category has fewer than 2 posts
				if ( ! $related_query->have_posts() || $related_query->post_count < 2 ) {
					$related_query = new WP_Query(
						array(
							'posts_per_page'      => 4,
							'post__not_in'        => array( get_the_ID() ),
							'ignore_sticky_posts' => 1,
							'post_status'         => 'publish',
						)
					);
				}

				if ( $related_query->have_posts() ) :
					while ( $related_query->have_posts() ) :
						$related_query->the_post();
						$rel_cats = get_the_category();
						$rel_cat_name = ! empty( $rel_cats ) ? esc_html( $rel_cats[0]->name ) : 'JOBS';
						$rel_author = get_the_author();
						$rel_date = get_the_date( 'F j, Y' );
						?>
						<div class="jobchamp-related-card">
							<div class="jobchamp-related-thumb">
								<a href="<?php the_permalink(); ?>">
									<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail( 'medium', array( 'class' => 'jobchamp-related-img', 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?>
									<?php else : ?>
										<div class="jobchamp-related-placeholder">
											<span>Job</span>
										</div>
									<?php endif; ?>
								</a>
							</div>
							<div class="jobchamp-related-info">
								<div class="jobchamp-related-cat">
									<svg class="jobchamp-lightning-icon" width="12" height="12" viewBox="0 0 24 24" fill="#0056D2"><path d="M7 2v11h3v9l7-12h-4l4-8z"/></svg>
									<span><?php echo esc_html( $rel_cat_name ); ?></span>
								</div>
								<h4 class="jobchamp-related-card-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h4>
								<div class="jobchamp-related-meta">
									<span>By <?php echo esc_html( $rel_author ); ?></span>
									<span class="jobchamp-meta-divider">|</span>
									<span class="jobchamp-meta-date"><?php echo esc_html( $rel_date ); ?></span>
								</div>
							</div>
						</div>
						<?php
					endwhile;
					wp_reset_postdata();
				endif;
				?>
			</div>
		</div>
	</div>
</article>
