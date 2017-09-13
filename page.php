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
	<div class="section-header has-text-centered">
		<div class="wrapper">
			<h1><?php echo the_title(); ?></h1>
		</div>
	</div>
</section>

<section>
	<div class="section-body">
		<div class="wrapper wrapper-content">
			<div class="columns is-fullwidth-on-mobile">
				<div class="column is-two-thirds has-large-padding is-fullwidth-on-mobile">
					<!-- Start the Loop. -->
					 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						 <?php the_content(); ?>
					 <?php endwhile; endif; ?>
				</div>
				<div class="column is-one-third has-large-padding is-fullwidth-on-mobile">
					<?php dynamic_sidebar( 'primary' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php if ( $testimonial = get_post_meta( get_the_ID(), 'quote', true ) ): ?>
	<section class="is-quote-section">
		<div class="section-body has-text-centered">
			<div class="wrapper">
				<div class="is-icon is-large"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
				<h2>"<?php esc_html_e( $testimonial, 'brainpower' ); ?>"</h2>
				<p>- <?php esc_html_e( get_post_meta( get_the_ID(), 'quote_author', true ) ); ?></p>
			</div>
		</div>
	</section>
<?php endif; ?>

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
