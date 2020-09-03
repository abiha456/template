<?php 
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package Imonthemes
 * @subpackage safreen
 *
 */

get_header(); ?>
<!-- head select -->   
	
<?php get_template_part('headers/part','headsingle'); ?>

<section>
	<div class="container">
		<div class="row">
			<div class="text">
				<img src="404-error-template-13.png" alt="img">
				<h1>404</h1>
				<h2>oops! Page Not Found</h2>
				<p>The page you are looking for might be removed, had its name changed or is temporarily unavailable.</p>
			</div>
			<div class="btn">
				<a class="home-btn" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'homepage', 'safreen' ); ?></a>
				<?php get_search_form() ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>