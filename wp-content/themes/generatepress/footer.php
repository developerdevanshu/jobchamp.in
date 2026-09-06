<?php
/**
 * The template for displaying the footer.
 * Matches Jobcore.in inspirational 4-column wave dark footer with updated social links.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

	</div><!-- #content -->
</div><!-- #page -->

<!-- Jobchamp Wave Footer -->
<footer id="colophon" class="site-footer jobchamp-footer-wrapper">
	<!-- Top Wave SVG Shape Divider -->
	<div class="jobchamp-footer-wave">
		<svg viewBox="0 0 1440 120" preserveAspectRatio="none" fill="currentColor">
			<path d="M0,32L60,42.7C120,53,240,75,360,74.7C480,75,600,53,720,48C840,43,960,53,1080,58.7C1200,64,1320,64,1380,64L1440,64L1440,120L1380,120C1320,120,1200,120,1080,120C960,120,840,120,720,120C600,120,480,120,360,120C240,120,120,120,60,120L0,120Z"></path>
		</svg>
	</div>

	<!-- Main 4-Column Footer Content -->
	<div class="jobchamp-footer-main">
		<div class="jobchamp-footer-container">
			<!-- Col 1: About Jobchamp -->
			<div class="jobchamp-footer-col jobchamp-footer-about">
				<h3 class="jobchamp-footer-brand">
					<span>Job</span><span>champ</span>
				</h3>
				<p class="jobchamp-footer-desc">
					Jobchamp shares verified entry-level job updates, fresher opportunities, and career guides for students, freshers, and graduates across core domains. We focus on genuine opportunities to help you start your career with confidence.
				</p>
			</div>

			<!-- Col 2: Categories -->
			<div class="jobchamp-footer-col jobchamp-footer-nav">
				<h4 class="jobchamp-footer-heading">Categories</h4>
				<ul class="jobchamp-footer-links">
					<li><a href="<?php echo esc_url( home_url( '/category/freshers/' ) ); ?>">Freshers</a></li>
					<li><a href="<?php echo esc_url( home_url( '/category/experienced/' ) ); ?>">Experienced</a></li>
					<li><a href="<?php echo esc_url( home_url( '/category/remote/' ) ); ?>">Remote Jobs</a></li>
					<li><a href="<?php echo esc_url( home_url( '/category/internships/' ) ); ?>">Internships</a></li>
				</ul>
			</div>

			<!-- Col 3: Quick Links -->
			<div class="jobchamp-footer-col jobchamp-footer-nav">
				<h4 class="jobchamp-footer-heading">Quick Links</h4>
				<ul class="jobchamp-footer-links">
					<li><a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us</a></li>
					<li><a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Contact Us</a></li>
					<li><a href="<?php echo esc_url( home_url( '/disclaimer/' ) ); ?>">Disclaimer</a></li>
					<li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a></li>
				</ul>
			</div>

			<!-- Col 4: Follow Us On Social Media Card (WhatsApp, Instagram, Facebook, LinkedIn) -->
			<div class="jobchamp-footer-col jobchamp-footer-social-box">
				<h4 class="jobchamp-footer-heading">Follow Us On</h4>
				<div class="jobchamp-footer-social-card">
					<div class="jobchamp-social-card-header">
						<span class="jobchamp-rss-icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 11a9 9 0 0 1 9 9"></path><path d="M4 4a16 16 0 0 1 16 16"></path><circle cx="5" cy="19" r="1"></circle></svg>
						</span>
						<div class="jobchamp-social-card-text">
							<strong>Follow Us On Social Media</strong>
							<p>Get Latest Update On Social Media</p>
						</div>
					</div>
					<div class="jobchamp-social-card-icons">
						<!-- 1. WhatsApp -->
						<a href="https://chat.whatsapp.com/Bj4uDzzeoivLLdVnxUtNum?s=cl&p=a&mlu=4&ilr=4" target="_blank" rel="noopener noreferrer" class="social-icon-box box-whatsapp" title="WhatsApp">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M9.04 7.55C8.84 7.55 8.52 7.62 8.25 7.91C7.99 8.2 7.23 8.91 7.23 10.36C7.23 11.8 8.29 13.19 8.43 13.39C8.58 13.58 10.5 16.55 13.46 17.83C14.16 18.14 14.71 18.32 15.14 18.46C15.85 18.68 16.49 18.65 17 18.57C17.57 18.49 18.76 17.85 19.01 17.14C19.26 16.44 19.26 15.84 19.18 15.71C19.11 15.58 18.91 15.5 18.61 15.36C18.32 15.21 16.89 14.5 16.63 14.41C16.36 14.31 16.17 14.26 15.97 14.55C15.78 14.84 15.21 15.5 15.04 15.71C14.87 15.91 14.7 15.93 14.41 15.79C14.12 15.64 13.18 15.33 12.07 14.34C11.2 13.57 10.62 12.61 10.45 12.32C10.28 12.03 10.43 11.87 10.58 11.73C10.71 11.6 10.88 11.38 11.02 11.21C11.17 11.04 11.22 10.92 11.32 10.72C11.41 10.53 11.37 10.36 11.29 10.21C11.22 10.07 10.64 8.63 10.39 8.04C10.15 7.47 9.91 7.55 9.74 7.54C9.57 7.54 9.37 7.55 9.04 7.55Z"/></svg>
						</a>
						<!-- 2. Instagram -->
						<a href="https://www.instagram.com/jobchamp112/" target="_blank" rel="noopener noreferrer" class="social-icon-box box-instagram" title="Instagram">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
						</a>
						<!-- 3. Facebook -->
						<a href="https://www.facebook.com/people/JobChamp/61591456237291/" target="_blank" rel="noopener noreferrer" class="social-icon-box box-facebook" title="Facebook">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
						</a>
						<!-- 4. LinkedIn -->
						<a href="https://www.linkedin.com/in/job-champ-8687b341b/" target="_blank" rel="noopener noreferrer" class="social-icon-box box-linkedin" title="LinkedIn">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 10.9v8.37H9.2V10.9H6.46M7.83 6.46c-.92 0-1.66.74-1.66 1.66s.74 1.67 1.66 1.67 1.66-.75 1.66-1.67-.74-1.66-1.66-1.66Z"/></svg>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Sub-footer / Copyright -->
	<div class="jobchamp-footer-bottom">
		<div class="jobchamp-footer-bottom-inner">
			<p class="jobchamp-copyright">
				&copy; <?php echo date( 'Y' ); ?> <strong>Jobchamp</strong> &bull; All rights reserved
			</p>
		</div>
	</div>
</footer>

<!-- Share Modal & Header Scripts -->
<div class="jobchamp-share-modal-overlay" id="jobchamp-share-modal">
	<div class="jobchamp-share-modal-content">
		<div class="jobchamp-share-modal-header">
			<h3>Share this Job Post</h3>
			<button class="jobchamp-share-modal-close" onclick="jobchampCloseShareModal()">&times;</button>
		</div>
		<div class="jobchamp-share-modal-icons">
			<a href="#" id="share-modal-wa" target="_blank" class="share-grid-btn share-wa">
				<span class="share-icon-circle bg-whatsapp">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M9.04 7.55C8.84 7.55 8.52 7.62 8.25 7.91C7.99 8.2 7.23 8.91 7.23 10.36C7.23 11.8 8.29 13.19 8.43 13.39C8.58 13.58 10.5 16.55 13.46 17.83C14.16 18.14 14.71 18.32 15.14 18.46C15.85 18.68 16.49 18.65 17 18.57C17.57 18.49 18.76 17.85 19.01 17.14C19.26 16.44 19.26 15.84 19.18 15.71C19.11 15.58 18.91 15.5 18.61 15.36C18.32 15.21 16.89 14.5 16.63 14.41C16.36 14.31 16.17 14.26 15.97 14.55C15.78 14.84 15.21 15.5 15.04 15.71C14.87 15.91 14.7 15.93 14.41 15.79C14.12 15.64 13.18 15.33 12.07 14.34C11.2 13.57 10.62 12.61 10.45 12.32C10.28 12.03 10.43 11.87 10.58 11.73C10.71 11.6 10.88 11.38 11.02 11.21C11.17 11.04 11.22 10.92 11.32 10.72C11.41 10.53 11.37 10.36 11.29 10.21C11.22 10.07 10.64 8.63 10.39 8.04C10.15 7.47 9.91 7.55 9.74 7.54C9.57 7.54 9.37 7.55 9.04 7.55Z"/></svg>
				</span>
				<span>WhatsApp</span>
			</a>
			<a href="#" id="share-modal-fb" target="_blank" class="share-grid-btn share-fb">
				<span class="share-icon-circle bg-facebook">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
				</span>
				<span>Facebook</span>
			</a>
			<a href="#" id="share-modal-li" target="_blank" class="share-grid-btn share-li">
				<span class="share-icon-circle bg-linkedin">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 10.9v8.37H9.2V10.9H6.46M7.83 6.46c-.92 0-1.66.74-1.66 1.66s.74 1.67 1.66 1.67 1.66-.75 1.66-1.67-.74-1.66-1.66-1.66Z"/></svg>
				</span>
				<span>LinkedIn</span>
			</a>
			<a href="#" id="share-modal-tw" target="_blank" class="share-grid-btn share-tw">
				<span class="share-icon-circle bg-twitter">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
				</span>
				<span>X (Twitter)</span>
			</a>
		</div>
		<div class="jobchamp-share-copy-box">
			<input type="text" id="jobchamp-share-input" readonly />
			<button type="button" onclick="jobchampCopyShareLink()">Copy Link</button>
		</div>
	</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
	// Mobile menu toggle
	var mobileToggle = document.getElementById('jobchamp-mobile-toggle');
	var siteNav = document.getElementById('site-navigation');
	if (mobileToggle && siteNav) {
		mobileToggle.addEventListener('click', function() {
			siteNav.classList.toggle('active');
			mobileToggle.classList.toggle('active');
		});
	}

	// Search dropdown toggle
	var searchBtn = document.getElementById('jobchamp-search-btn');
	var searchBox = document.getElementById('jobchamp-search-box');
	if (searchBtn && searchBox) {
		searchBtn.addEventListener('click', function(e) {
			e.stopPropagation();
			searchBox.classList.toggle('active');
		});

		document.addEventListener('click', function(e) {
			if (!searchBox.contains(e.target) && e.target !== searchBtn) {
				searchBox.classList.remove('active');
			}
		});
	}
});

function jobchampUniversalShare(title, url) {
	if (navigator.share) {
		navigator.share({
			title: title,
			url: url
		}).catch(function(err){});
	} else {
		jobchampOpenShareModal(title, url);
	}
}

function jobchampOpenShareModal(title, url) {
	var modal = document.getElementById('jobchamp-share-modal');
	var input = document.getElementById('jobchamp-share-input');
	var encUrl = encodeURIComponent(url);
	var encTitle = encodeURIComponent(title);

	if (modal && input) {
		input.value = url;
		document.getElementById('share-modal-wa').href = 'https://api.whatsapp.com/send?text=' + encTitle + '%20' + encUrl;
		document.getElementById('share-modal-fb').href = 'https://www.facebook.com/sharer/sharer.php?u=' + encUrl;
		document.getElementById('share-modal-li').href = 'https://www.linkedin.com/sharing/share-offsite/?url=' + encUrl;
		document.getElementById('share-modal-tw').href = 'https://twitter.com/intent/tweet?text=' + encTitle + '&url=' + encUrl;
		modal.classList.add('active');
	}
}

function jobchampCloseShareModal() {
	var modal = document.getElementById('jobchamp-share-modal');
	if (modal) modal.classList.remove('active');
}

function jobchampCopyShareLink() {
	var input = document.getElementById('jobchamp-share-input');
	if (input) {
		input.select();
		input.setSelectionRange(0, 99999);
		navigator.clipboard.writeText(input.value);
		alert('Link copied to clipboard!');
		jobchampCloseShareModal();
	}
}
</script>

<?php wp_footer(); ?>
</body>
</html>
