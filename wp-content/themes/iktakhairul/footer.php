<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>


<!-- The WordPress Footer Menu goes here -->
<nav id="footer-nav" class="navbar navbar-expand-lg" aria-labelledby="main-nav-label">
	<h2 id="main-nav-label" class="sr-only">
		<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
	</h2>
	<div class="container">
		<?php
		wp_nav_menu(
				array(
						'theme_location'  => 'footer_menu',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'footer_menuNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'footer_menu',
						'depth'           => 1,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
				)
//				array(
//						'theme_location'  => 'primary',
//						'container_class' => 'collapse navbar-collapse',
//						'container_id'    => 'navbarNavDropdown',
//						'menu_class'      => 'navbar-nav',
//						'fallback_cb'     => '',
//						'menu_id'         => 'main-menu',
//						'depth'           => 2,
//						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
//				)
		);
		?>
	</div><!-- .container -->
</nav><!-- .footer site-navigation -->

<!--<footer class="container-fluid bg-grey py-5">-->
<!--	<div class="container">-->
<!--		<div class="row">-->
<!--			<div class="col-md-6">-->
<!--				<div class="row">-->
<!--					<div class="col-md-6 ">-->
<!--						<div class="logo-part">-->
<!--							<img src="--><?php //echo get_template_directory_uri(); ?><!--/img/logo-white.png" class="w-50 logo-footer" >-->
<!--							<p class="footer-ap">32/1, Road: 3, Shyamoli, Dhaka 1207,Bangladesh</p>-->
<!--							<p class="footer-ap" id="about-reformed-tech">Thinking about updating your Web Application & Software to expand your business and attract ideal customers. Contact ReformedTech & take Control of our business.</p>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="col-md-6 px-4">-->
<!--						<h6> About Reformed Tech</h6>-->
<!--						<p class="footer-ap">ReformedTech Supports your Web Application & Software to help improve your Client Satisfaction in a strategically programmed way.</p>-->
<!--						<a href="About" class="btn-footer"> More Info </a><br>-->
<!--						<a href="Contact" class="btn-footer"> Contact Us</a>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-md-6">-->
<!--				<div class="row">-->
<!--					<div class="col-md-6 px-4">-->
<!--						<h6> Help us</h6>-->
<!--						<div class="row ">-->
<!--							<div class="col-md-6">-->
<!--								<ul>-->
<!--									<li> <a class="footer-ap" href="/"> Home</a> </li>-->
<!--									<li> <a class="footer-ap" href="About"> About</a> </li>-->
<!--									<li> <a class="footer-ap" href="#"> Service</a> </li>-->
<!--									<li> <a class="footer-ap" href="#"> Team</a> </li>-->
<!--									<li> <a class="footer-ap" href="#"> Help</a> </li>-->
<!--									<li> <a class="footer-ap" href="Contact"> Contact</a> </li>-->
<!--								</ul>-->
<!--							</div>-->
<!--							<div class="col-md-6 px-4">-->
<!--								<ul>-->
<!--									<li> <a class="footer-ap" href="#"> Cab Faciliy</a> </li>-->
<!--									<li> <a class="footer-ap" href="#"> Fax</a> </li>-->
<!--									<li> <a class="footer-ap" href="#"> Terms</a> </li>-->
<!--									<li> <a class="footer-ap" href="#"> Policy</a> </li>-->
<!--									<li> <a class="footer-ap" href="#"> Refunds</a> </li>-->
<!--									<li> <a class="footer-ap" href="#"> Paypal</a> </li>-->
<!--								</ul>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="col-md-6 ">-->
<!--						<h6> Newsletter</h6>-->
<!--						<div class="social">-->
<!--							<a class="footer-ap" href="https://www.facebook.com/reformedtech"><i class="fa fa-facebook" aria-hidden="true"></i></a>-->
<!--							<a class="footer-ap" href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>-->
<!--						</div>-->
<!--						<form class="form-footer my-3">-->
<!--							<input type="text"  placeholder="search here...." name="search">-->
<!--							<input type="button" value="Go" >-->
<!--						</form>-->
<!--						<p class="footer-ap">ReformedTech Technical Specialists work with your vision, draw the roadmap and implement your expectation above and beyond.</p>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</footer>-->

<?php wp_footer(); ?>
<div class="footer-header-holder">
	<div class="container">
		<button class="footer-navbar-toggler navbar-toggler md-view" type="button" data-toggle="collapse" data-target="#footer_menuNavDropdown" aria-controls="footer_menuNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
			<div class="bar"></div>
			<div class="bar"></div>
			<div class="bar"></div>
		</button>
	</div>
</div>

</body>

</html>

