<?php get_header(); ?>

<div role="main" class="main">

	<div class="container container-lg">
		<div class="row">
			<div class="col-lg-7 pt-5">
				<h2 class="font-weight-bold text-10 line-height-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500"><span class="text-5">Portfolio</span></h2>
				<!-- <h4 class="text-6 line-height-6 font-weight-normal appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800"><span class="opacity-6">Web Development</span></h4> -->
				<a class="btn btn-primary btn-with-arrow mb-2 ml-0 pl-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100" href="/contact">Contact Me <span><i class="fas fa-chevron-right"></i></span></a>
			</div>
		</div>
	</div>

	<hr class="my-5">

	<div class="container container-lg">

		<div class="sort-destination-loader sort-destination-loader-loaded mt-4 pt-2">
			<div class="row portfolio-list sort-destination" data-sort-id="portfolio">

				<?php

					$num_posts = -1;
					if( is_front_page() ) $num_posts = 10;

					$args = array(
						'post_type' => 'portfolio',
						'post_per_page' => $num_posts
					);
					$query =  new WP_Query( $args );

					if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();

				?>

					<div class="col-md-6 col-lg-3 isotope-item websites">
						<?php get_template_part('partials/content', 'portfolio-item'); ?>
					</div>

				<?php endwhile; endif; ?>

			</div>
		</div>

	</div>

</div>

<?php get_footer(); ?>