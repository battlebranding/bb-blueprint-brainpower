<?php
/**
 * Template Name: Services
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

<section id="services-header" class="has-large-padding">
	<div class="section-header has-text-centered">
		<div class="wrapper">
			<h1>Services</h1>
		</div>
	</div>
</section>

 <section>
	 <div class="section-body">
		 <div class="wrapper wrapper-content">
			 <div class="columns is-fullwidth-on-mobile">
				 <div class="column is-fullwidth-on-mobile has-large-padding">
					 <div class="is-icon is-medium has-text-centered"><i class="fa fa-pencil" aria-hidden="true"></i></div>
					 <h3 class="has-text-centered">Career Teachers</h3>
					 <p>After teaching for a number of years, all teachers need to be refreshed and receive professional development that reignites their fire for teaching. Our professional development offerings are engaging and provide the latest research-based strategies in a variety of topics. Some examples include:</p>
					 <ul>
						 <li>Small/large group instruction</li>
						 <li>Guided Reading</li>
						 <li>Professional Learning Communities</li>
						 <li>Examining student data</li>
						 <li>Word study and phonics instruction</li>
					 </ul>
				 </div>
				 <div class="column is-fullwidth-on-mobile has-large-padding">
					 <div class="is-icon is-medium has-text-centered"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
					 <h3 class="has-text-centered">Beginning Teachers</h3>
					 <p>New teachers have so many great ideas but often need help organizing all that they want to do. Our professional development sessions provide systems and strategies to help teachers with classroom management, lesson planning, and time management. A primary focus in the Beginning Teacher's session is creating a literacy rich environment in every classroom.</p>
					 <ul>
						 <li>Classroom management</li>
						 <li>Lesson planning</li>
						 <li>Time management</li>
						 <li>Creating a literacy rich environment</li>
						 <li>Creating systems</li>
					 </ul>
				 </div>
				 <div class="column is-fullwidth-on-mobile has-large-padding">
					 <div class="is-icon is-medium has-text-centered"><i class="fa fa-futbol-o" aria-hidden="true"></i></div>
					 <h3 class="has-text-centered">K-12 Students</h3>
					 <p>Our tutoring services are standards-based and provide explicit teaching to support the instruction students receive in school. Our tutors are licensed and trained to provide instruction to students who have been identified as exceptional children and academically gifted. We have one-on-one and small group tutoring sessions available.</p>
					 <p class="has-text-centered"><a class="button" href="<?php echo home_url('/tutoring'); ?>">Learn More</a></p>
				 </div>
			 </div>
		 </div>
	 </div>
 </section>

<section class="is-quote-section">
	<div class="section-body has-text-centered">
		<div class="wrapper">
			<div class="is-icon is-large"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
			<h2>"Thank you for your help and support this school year as I transitioned into my
new role as Curriculum Facilitator."</h2>
			<p>- Shaunta Walker, Curriculum Faciliitator, Bluford Elementary</p>
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
						<li><a href="https://www.facebook.com/brainpowerhelp/"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a></li>
						<li><a href="https://www.instagram.com/brainpowerhelp/"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>
						<li><a href="https://www.twitter.com/brainpowerhelp/"><i class="fa fa-twitter-square" aria-hidden="true"></i> Twitter</a></li>
					</ul>
				</div>
			</div>
			<p>&copy; <?php echo get_bloginfo(); ?> <?php echo date('Y'); ?>.</p>
		</div>
	</div>
</footer>

 <?php get_footer(); ?>
