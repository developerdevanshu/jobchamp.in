<?php
/**
 * The template for displaying posts within the loop (Home, Category, Archives, Search).
 * Matches Jobcore.in inspirational layout with auto-fitting responsive thumbnails.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Get post category
$categories = get_the_category();
$category_name = ! empty( $categories ) ? esc_html( $categories[0]->name ) : 'JOBS';
$category_link = ! empty( $categories ) ? esc_url( get_category_link( $categories[0]->term_id ) ) : '#';

// If on a specific category archive, show that category
if ( is_category() ) {
	$current_cat = get_queried_object();
	if ( $current_cat && isset( $current_cat->name ) ) {
		$category_name = esc_html( $current_cat->name );
		$category_link = esc_url( get_category_link( $current_cat->term_id ) );
	}
}

$author_name = get_the_author();
$author_id = get_the_author_meta( 'ID' );
$author_url = get_author_posts_url( $author_id );
$post_date = get_the_date( 'F j, Y' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'jobchamp-post-card' ); ?>>
	<div class="jobchamp-post-card-inner">
		<!-- Left: Post Thumbnail (Fixed Box with Auto-fit Container) -->
		<div class="jobchamp-post-thumb">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large', array( 'class' => 'jobchamp-thumb-img', 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?>
				<?php else : ?>
					<div class="jobchamp-thumb-placeholder">
						<span class="jobchamp-placeholder-category"><?php echo esc_html( $category_name ); ?></span>
						<span class="jobchamp-placeholder-title"><?php the_title(); ?></span>
						<span class="jobchamp-placeholder-btn">Apply Now</span>
					</div>
				<?php endif; ?>
			</a>
		</div>

		<!-- Right: Post Details -->
		<div class="jobchamp-post-details">
			<!-- Category with Lightning Icon -->
			<div class="jobchamp-category-tag">
				<a href="<?php echo $category_link; ?>" class="jobchamp-cat-link">
					<svg class="jobchamp-lightning-icon" width="13" height="13" viewBox="0 0 24 24" fill="#0056D2" xmlns="http://www.w3.org/2000/svg"><path d="M7 2v11h3v9l7-12h-4l4-8z"/></svg>
					<span><?php echo strtoupper( $category_name ); ?></span>
				</a>
			</div>

			<!-- Title -->
			<h2 class="jobchamp-post-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark">
					<?php the_title(); ?>
				</a>
			</h2>

			<!-- Excerpt -->
			<div class="jobchamp-post-excerpt">
				<?php the_excerpt(); ?>
			</div>

			<!-- Post Meta: Author & Date -->
			<div class="jobchamp-post-meta">
				<span class="jobchamp-meta-author">
					<a href="<?php echo esc_url( $author_url ); ?>"><?php echo esc_html( $author_name ); ?></a>
					<svg class="jobchamp-verified-badge" width="15" height="15" viewBox="0 0 24 24" fill="#0084ff" xmlns="http://www.w3.org/2000/svg" title="Verified"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
				</span>
				<span class="jobchamp-meta-divider">|</span>
				<span class="jobchamp-meta-date">
					Published On: <?php echo esc_html( $post_date ); ?>
				</span>
			</div>
		</div>
	</div>
</article>
