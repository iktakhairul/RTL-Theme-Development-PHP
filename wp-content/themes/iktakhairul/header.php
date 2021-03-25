<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<div class="top-header-holder">
			<div class="container">
				<div class="row column-container">
					<div class="col-md-4">
						<div class="logo-holder">
							<a class="logo-holder-container" href="#">
								<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="Reformed Tech" width="200px">
							</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="reservation-holder">
							<div class="contact-holder">
								<a href="#" class="phone">
									<i class="fa fa-phone"></i>
									215-328-813
								</a>
								<div class="social-media-holder-tablet">
									<div class="row header-app-row-margin">
										<a class="social-app" href="https://www.facebook.com/reformedtech"><i class="fa fa-facebook" aria-hidden="true"></i></a>
										<a class="social-ap" href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
										<a class="social-ap" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										<a class="social-app" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
										<a class="social-ap" href="#"><i class="fa fa-github" aria-hidden="true"></i></a>
										<a class="social-ap" href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
									</div>
								</div>
								<a href="#" class="address"><i class="fa fa-map"></i>
									32/1, Road: 3, Shyamoli, Dhaka 1207,Bangladesh
								</a>
							</div>
							<a href="#" class="reservation-btn">Make a Reservation</a>
						</div>
					</div>
					<div class="col-">
						<div class="social-media-holder">
							<div class="row header-app-row-margin">
								<a class="social-app" href="https://www.facebook.com/reformedtech"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a class="social-ap" href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
								<a class="social-ap" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							</div>
							<div class="row header-app-row-margin">
								<a class="social-app" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a class="social-ap" href="#"><i class="fa fa-github" aria-hidden="true"></i></a>
								<a class="social-ap" href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
							</div>
							<button class="navbar-toggler md-view" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
								<div class="bar"></div>
								<div class="bar"></div>
								<div class="bar"></div>
							</button>
							<p class="menu-title">Menu</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-lg" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>

			<div class="container">
				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			</div><!-- .container -->
		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
