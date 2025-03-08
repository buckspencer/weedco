<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WeedCo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'weedco' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-container">
			<nav id="site-navigation" class="main-navigation">
				<input type="checkbox" id="nav-toggle" class="nav-toggle">
				<label for="nav-toggle" class="nav-toggle-label">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
					<span class="screen-reader-text">Menu</span>
				</label>
				<div class="nav-wrapper">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary-menu',
							'menu_id'        => 'primary-menu',
							'container_class' => 'primary-menu-container',
						)
					);
					?>
				</div>
			</nav>

			<div class="site-branding">
				<a href="<?php echo esc_url(home_url('/')); ?>" class="logo-link">
					<img src="<?php echo get_theme_file_uri('assets/images/Weed-Co.-Logo-1.png'); ?>" alt="WeedCo Logo" class="site-logo">
				</a>
			</div>

			<div class="header-actions">
				<a href="tel:520-549-1390" class="phone-number">520-549-1390</a>
				<a href="<?php echo esc_url(home_url('/request-a-quote')); ?>" class="request-quote-button">
					Request a Quote
					<?php include get_theme_file_path('assets/images/shield.svg'); ?>
				</a>
			</div>
		</div>
	</header>
