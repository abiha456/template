<!-- /*
Template Name: Search Page
*/ -->

<?php get_header(); ?>
   	
<?php get_template_part('headers/part','headsingle'); ?>

<div class="row">
	<div class="text srch">
		<img src="search.png" alt="img">
		<h1>Search Here: </h1>
	</div>
	<div class="btn btn-left">
		<?php get_search_form() ?>
	</div>
</div>

<?php

	$search_query = get_search_query();

	$arg = array(
		's'  =>  $search_query
	);

	$query = new WP_Query($arg);

	if( $query->have_posts() ):?>

		<section>
			<div class="container">
				<?php while( $query->have_posts() ): $query->the_post(); ?>

					<div class="srch-rslt">
						<h3><?php echo the_title(); ?></h3>
						<a href="<?php echo the_permalink() ?>">View More</a>
					</div>

				<?php endwhile; ?>
			</div>
		</section>

	<?php
		else:
	?>
		<div class="no-rslt"><h3>No Post Found!</h3></div>
	<?php endif; ?>


<?php get_footer(); ?>
