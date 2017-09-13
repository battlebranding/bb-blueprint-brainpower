<?php get_header(); ?>

<header class="is-large">
	<div class="section-header is-light">
		<div class="wrapper nav-bar-wrapper has-text-centered">
			<h1 class="is-logo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bpas-logo-stacked-white.png" />
			</h1>
			<?php wp_nav_menu( array(
				'theme_location' 	=> 'primary',
				'container'			=> 'nav',
				// 'container_class'	=> 'is-floating-right',
				'menu_class'		=> 'is-main-nav is-horizontal',
			) ); ?>
		</div>
	</div>
	<div class="section-body has-space-on-top has-text-centered">
		<div class="wrapper">
			<h2>Unleash Your Child's Genius.</h2>
			<div class="is-icon is-small"><a href="#tutoring"><i class="fa fa-chevron-down" aria-hidden="true"></i></a></div>
		</div>
	</div>
</header>

<section id="tutoring" class="is-alphabet-party">
	<div class="section-body">
		<div class="wrapper">
			<div class="columns is-fullwidth-on-mobile">
				<div class="column is-fullwidth-on-mobile has-large-padding" style="background-color: #fff;">
					<h2 class="is-purple">Hands On K-12 Tutoring</h2>
					<p>Brain Power Academic Services is an interactive educational company providing customized teaching tools to ensure academic success for all students. We provide K-12 standards-based tutoring that produces results!<p>
					<a class="button">Learn More</a>
				</div>
				<div class="column has-medium-padding is-poster" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/boys-hands-solving-problem.jpg');">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="is-quote-section">
	<div class="section-body has-text-centered">
		<div class="wrapper">
			<div class="is-icon is-large"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
			<h2>"Anaiyah has greatly improved her reading and decoding skills. Concepts that were a challenge to her are now easier."</h2>
			<p>- Vanessa Butler, Parent</p>
		</div>
	</div>
</section>

<section id="services" class="is-grey-section">
	<div class="section-body has-text-centered">
		<div class="wrapper">
			<h2 class="is-white">Teaching All Learning Types</h2>
			<p>At Brain Power, we believe that students must be prepared for success as 21st Century Learners. Our world is becoming increasingly more global. Students need to be prepared to face these new challenges in schools and the workplaces of the future.</p>
			<div class="columns">
				<div class="column">
					<a href="<?php echo home_url('services'); ?>">
						<div class="is-icon is-medium"><i class="fa fa-pencil" aria-hidden="true"></i></div>
						<p>Career Teachers</p>
					</a>
				</div>
				<div class="column">
					<a href="<?php echo home_url('services'); ?>">
						<div class="is-icon is-medium"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
						<p>Beginning Teachers</p>
					</a>
				</div>
				<div class="column">
					<a href="<?php echo home_url('services'); ?>">
						<div class="is-icon is-medium"><i class="fa fa-futbol-o" aria-hidden="true"></i></div>
						<p>K-12 Students</p>
					</a>
				</div>
			</div>
			<p><a href="<?php echo home_url('services'); ?>" class="button has-space-on-top">View All Services</a></p>
		</div>
	</div>
</section>

<section class="is-purple-alphabet-party">
	<div class="section-body">
		<div class="wrapper">
			<div class="columns is-rounded is-fullwidth-on-mobile">
				<div class="column has-medium-padding is-poster" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/male-teacher-planning-day.jpg');"></div>
				<div class="column is-fullwidth-on-mobile has-large-padding is-poster" style="background-color: #eee;">
					<h2>Educator Training</h2>
					<p>Engaging professional development to strengthen teaching and learning in every classroom, every day.</p>
					<a class="button" href="<?php echo home_url('services'); ?>">Learn More</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="is-quote-section">
	<div class="section-body has-text-centered">
		<div class="wrapper">
			<div class="is-icon is-large"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
			<h2>"She was so great to work with that teachers continued reaching out to her well after her commitment with the school."</h2>
			<p>- Dr. Anitra Wells, Superintendent, Weldon City Schools</p>
		</div>
	</div>
</section>

<section>
	<div class="section-body">
		<div class="wrapper">
			<h2>From The Blog</h2>
			<div class="columns is-fullwidth-on-mobile posts" style="margin: -10px;">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="column has-small-padding">
						<div class="thumbnail" style="background-color: #333; width: 100%; height: 200px; background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
						<h3><?php the_title(); ?></h3>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>">Read More</a>
					</div>
				<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts available.' ); ?></p>
				<?php endif; ?>
			</div>
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
