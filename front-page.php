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

					$post_id = get_the_ID();

				?>

					<div class="col-md-6 col-lg-3 isotope-item websites">
						<div class="portfolio-item">
							<a href="portfolio-single-wide-slider.html">
								<span class="thumb-info thumb-info-lighten border-radius-0">
									<span class="thumb-info-wrapper border-radius-0">

										<?php the_post_thumbnail( 'medium' ); ?>
										<!-- <img src="img/projects/project.jpg" class="img-fluid border-radius-0" alt=""> -->

										<span class="thumb-info-title">
											<span class="thumb-info-inner"><?php the_title(); ?></span>
											<span class="thumb-info-type"><?php echo get_post_meta($post_id, 'project_type', true); ?></span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
										</span>
									</span>
								</span>
							</a>
						</div>
					</div>

				<?php endwhile; endif; ?>

			</div>
		</div>

	</div>

</div>

<?php get_footer(); ?>