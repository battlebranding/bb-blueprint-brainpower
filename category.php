<?php
/**
 * Template Name: Blog
 */

$category_slug 	= get_query_var( 'category_name' );
$category 		= get_category_by_slug( $category_slug );

$args = array(
 	'post_type' 	=> 'post',
	'post_status'	=> 'publish',
	'category_name'	=> $category_slug
);

$posts = new WP_Query( $args );

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

<section>
	<div class="section-body">
		<div class="wrapper">
			<div class="columns">
				<div class="column is-two-thirds has-large-padding">
					<h4>Blog: <?php echo esc_attr( $category->name ); ?></h4>
					<?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); ?>
						<article class="has-small-padding">
							<a href="<?php the_permalink(); ?>"><div class="thumbnail" style="background-color: #333; width: 100%; height: 200px; background-image: url('<?php the_post_thumbnail_url(); ?>'); margin-bottom: 20px;"></div></a>
							<h3><?php the_title(); ?></h3>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="button">Read More</a>
						</article>
					<?php endwhile; else : ?>
						<p><?php _e( 'Sorry, no posts available.' ); ?></p>
					<?php endif; ?>
				</div>
				<div class="column is-one-third has-large-padding">
					<?php dynamic_sidebar( 'blog' ); ?>
				</div>
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
