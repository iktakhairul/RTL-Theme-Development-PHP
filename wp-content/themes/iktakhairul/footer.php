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
<style type="text/css">

</style>
<footer class="container-fluid bg-grey py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6 ">
						<div class="logo-part">
							<img src="https://1.bp.blogspot.com/-ZugNTvFIsJs/YCt9rxi0rBI/AAAAAAAArqY/rQp9X8tmdzsEk6xCT2Rqvw6rWsQ5tDiAwCLcBGAsYHQ/s823/output-onlinepngtools.png" class="w-50 logo-footer" >
							<p class="footer-ap">32/1, Road: 3, Shyamoli, Dhaka 1207,Bangladesh</p>
							<p class="footer-ap" id="about-reformed-tech">Thinking about updating your Web Application & Software to expand your business and attract ideal customers. Contact ReformedTech & take Control of our business.</p>
						</div>
					</div>
					<div class="col-md-6 px-4">
						<h6> About Reformed Tech</h6>
						<p class="footer-ap">ReformedTech Supports your Web Application & Software to help improve your Client Satisfaction in a strategically programmed way.</p>
						<a href="About" class="btn-footer"> More Info </a><br>
						<a href="Contact" class="btn-footer"> Contact Us</a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6 px-4">
						<h6> Help us</h6>
						<div class="row ">
							<div class="col-md-6">
								<ul>
									<li> <a class="footer-ap" href="/"> Home</a> </li>
									<li> <a class="footer-ap" href="About"> About</a> </li>
									<li> <a class="footer-ap" href="#"> Service</a> </li>
									<li> <a class="footer-ap" href="#"> Team</a> </li>
									<li> <a class="footer-ap" href="#"> Help</a> </li>
									<li> <a class="footer-ap" href="Contact"> Contact</a> </li>
								</ul>
							</div>
							<div class="col-md-6 px-4">
								<ul>
									<li> <a class="footer-ap" href="#"> Cab Faciliy</a> </li>
									<li> <a class="footer-ap" href="#"> Fax</a> </li>
									<li> <a class="footer-ap" href="#"> Terms</a> </li>
									<li> <a class="footer-ap" href="#"> Policy</a> </li>
									<li> <a class="footer-ap" href="#"> Refunds</a> </li>
									<li> <a class="footer-ap" href="#"> Paypal</a> </li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 ">
						<h6> Newsletter</h6>
						<div class="social">
							<a class="footer-ap" href="https://www.facebook.com/reformedtech"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a class="footer-ap" href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						</div>
						<form class="form-footer my-3">
							<input type="text"  placeholder="search here...." name="search">
							<input type="button" value="Go" >
						</form>
						<p class="footer-ap">ReformedTech Technical Specialists work with your vision, draw the roadmap and implement your expectation above and beyond.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>

