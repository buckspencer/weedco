<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WeedCo
 */

?>

	<footer class="footer">
		<div class="footer-container">
			<div class="footer-content">
				<img
					src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/footer-logo.png' ); ?>"
					class="footer-logo"
					alt="WeedCo Logo"
				/>
				<nav class="footer-nav">
					<a href="#weed-control" class="nav-link">Weed Control</a>
					<a href="#pest-control" class="nav-link">Pest Control</a>
					<a href="#termites" class="nav-link">Termites</a>
					<a href="#about" class="nav-link">About Us</a>
					<a href="#contact" class="nav-link">Contact Us</a>
					<a href="#pest-profiles" class="nav-link">Pest Profiles</a>
				</nav>
				<a href="tel:520-549-1390" class="phone-number">520-549-1390</a>
				<a href="#quote" class="quote-button">Request a Quote</a>
			</div>
			<p class="license-text">
				WeedCo is licensed with the Arizona Department of Agriculture and Office
				of Pest Management. License number 9705
			</p>
			<p class="copyright-text">Copyright © <?php echo date('Y'); ?> WeedCo, All Rights Reserved</p>
		</div>
	</footer><!-- .footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
