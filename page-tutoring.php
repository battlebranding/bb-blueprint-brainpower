<?php
/**
 * Template Name: Tutoring
 */
?>

<?php get_header(); ?>

<header class="sub-page">
	<div class="section-header is-light">
		<div class="wrapper nav-bar-wrapper">
			<h1 class="is-logo is-floating-left">
				<a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bpas-logo-horizontal.png" height="60px" /></a></h1>
			<?php wp_nav_menu( array(
				'theme_location' 	=> 'primary',
				'container'			=> 'nav',
				'container_class'	=> 'is-floating-right',
				'menu_class'		=> 'is-main-nav is-horizontal',
			) ); ?>
		</div>
	</div>
</header>

<section class="is-purple-alphabet-party">
	<div class="section-body">
		<div class="wrapper">
			<div class="columns is-rounded is-fullwidth-on-mobile">
				<div class="column has-medium-padding is-fullwidth-on-mobile" style="background-color: #fff;">
					<h2>Tutoring</h2>
					<p>BPAS has a proven record of success with students. Our goal is to help students achieve at least one year’s growth after completing our tutoring sessions. We provide tutoring in all content areas and include a writing, speaking, and listening component in all sessions.</p>
					<p>All BPAS tutors are licensed and complete an extensive training in working with all students including exceptional students, academically gifted students, and students learning to speak English as a second language.</p>
				</div>
				<div class="column has-large-padding has-purple-background is-fullwidth-on-mobile">
					<h2>$35/session</h2>
					<p>We believe that our tutoring rates are competitive for the services we provide. We offer in-home private tutoring sessions to allow for a more comfortable environment or public sessions in public libraries and community centers. With the intense focus on continuity between sessions, we recommend a minimum of 4 sessions/month.</p>
					<a class="button is-outlined" href="<?php echo home_url('tutoring/signup'); ?>">Sign Up</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="measure-success">
	<div class="section-body">
		<div class="wrapper">
			<h2>Measuring Success</h2>
			<p>All students will complete a pre-assessment at the beginning of each tutoring contract. This pre-assessment is used to design the structure for future tutoring sessions. The parent will not be charged a $35 fee for the session that the pre-assessment is completed in. Bi-weekly progress monitoring assessments will be completed to determine if students are moving toward mastery of skills. A post-assessment is completed at the end of the tutoring contract to measure student growth. While there is no fee for the session where the post-assessment is completed, there is a processing fee to receive the results.</p>
		</div>
	</div>
</section>


<section class="has-gray-background">
	<div class="section-body">
		<div class="wrapper">
			<h3>Employment</h3>
			<p>BPAS is always looking for motivated and energized teachers to add to our staff. If you would like more information about joining our team, email useyourbrainpower@gmail.com. All employees are required to complete a criminal background check.</p>
		</div>
	</div>
</section>

<section class="is-quote-section">
	<div class="section-body has-text-centered">
		<div class="wrapper">
			<div class="is-icon is-large"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
			<h2>"Ms. Moore has been a huge help with my son. She has provided my son with many testing skills along with
covering items that would be on the test. She has made my son feel very comfortable and confident about his
end of year testing.  My son has worked very well with Ms. Moore over the years. She has been a blessing to
our family."</h2>
			<p>- Tara Revis, Parent</p>
		</div>
	</div>
</section>

<footer>
	<div class="section-body">
		<div class="wrapper">
			<div class="columns is-fullwidth-on-mobile">
				<div class="column is-half has-no-padding is-fullwidth-on-mobile">
					<h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bpas-logo-horizontal-white.png" /></h2>
					<p><?php echo get_bloginfo( 'description' ); ?></p>
				</div>
				<div class="column is-fullwidth-on-mobile">
					<?php wp_nav_menu( array(
						'theme_location' 	=> 'primary',
						'menu_class'		=> 'list',
					) ); ?>
				</div>
				<div class="column is-fullwidth-on-mobile">
					<ul class="list">
						<li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>
						<li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i> Twitter</a></li>
					</ul>
				</div>
			</div>
			<p>&copy; <?php echo get_bloginfo(); ?> <?php echo date('Y'); ?>.</p>
		</div>
	</div>
</footer>

<?php get_footer(); ?>
