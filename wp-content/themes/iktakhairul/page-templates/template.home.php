<?php
/**
 * Template Name: Template: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="home-banner">
<!--	<img class="home-banner" src="--><?php //echo get_template_directory_uri(); ?><!--/img/car.jpg" alt="Reformed Tech">-->

	<!-- ABOUT -->
	<section class="text-center home-about">
		<h2>A Journey with ReformedTech</h2>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-sm-6 col-ex-12 home-about-item wow lightSpeedIn" data-wow-offset="200" >
					<span class="fa fa-group"></span>
					<h4>Successful Implementation</h4>
					<p class="home-lead">More than 7 years of Experience in building successful Web, Mobile Apps and Software Implementations.</p>
				</div>
				<div class="col-lg-4 col-sm-6 col-ex-12 home-about-item wow lightSpeedIn" data-wow-offset="200">
					<span class="fa fa-info"></span>
					<h4>Technology Specialist</h4>
					<p class="home-lead">ReformedTech Technical Specialists work with your vision, draw the roadmap and implement your expectation above and beyond.</p>
				</div>
				<div class="col-lg-4 col-sm-6 col-ex-12 home-about-item wow lightSpeedIn" data-wow-offset="200">
					<span class="fa fa-file"></span>
					<h4>Awesome Support</h4>
					<p class="home-lead">ReformedTech Supports your Web Application & Software to help improve your Client Satisfaction in a strategically programmed way.</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-7 mx-auto col-md-10 col-12">
					<div class="home-about-image" data-aos="fade-up" data-aos-delay="200">
						<img src="<?php echo get_template_directory_uri(); ?>/img/office.png" class="img-fluid" alt="office">
					</div>
				</div>

			</div>
		</div>
	</section>
	<!--	about section-->
	<div class="container" id="about">
		<div id="appSummaryContainer">
			<div id="appSummary">
				<h1 id="body-about-h1">Why This app is awesome!</h1>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis consequuntur deserunt earum eius enim hic iure magnam maiores optio porro provident repellendus, sit temporibus! Aperiam deleniti doloribus est magni qui.</p>
			</div>
			<div class="card-deck">
				<div class="card">
					<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/email0.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title"><i class="fa fa-envelope" aria-hidden="true"></i> Email title</h5>
						<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><small class="text-muted">Last updated 9 days ago</small></p>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/email1.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title"><i class="fa fa-commenting" aria-hidden="true"></i> Notification</h5>
						<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
						<p class="card-text"><small class="text-muted">Last updated 18 days ago</small></p>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/email2.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title"><i class="fa fa-html5" aria-hidden="true"></i> HTML Template</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
						<p class="card-text"><small class="text-muted">Last updated 16 days ago</small></p>
					</div>
				</div>
			</div>
		</div>
		<hr id="body-about-hr">
	</div>
</div>
<?php
get_footer();
