<section id="recommendations" class="section section-no-border bg-color-grey m-0">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">Recommendations</h2>
			</div>
			<div class="col-lg-12 p-0">

				<div class="owl-carousel owl-theme stage-margin stage-margin-lg mb-0" data-plugin-options="{'items': 1, 'margin': 100, 'loop': true, 'nav': false, 'dots': true, 'stagePadding': 100}">

					<?php

						$num_posts = 3;

						$args = array(
							'post_type' => 'recommendations',
							'post_per_page' => $num_posts
						);
						$query =  new WP_Query( $args );

						if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();

					?>

						<div class="col">
							<div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-0">
								<blockquote class="pb-2">
									<p class="custom-text-color-3"><?php the_content(); ?></p>
								</blockquote>
								<div class="testimonial-author text-center">
									<p><strong class="text-uppercase"><?php the_field( 'author' ); ?></strong><span class="custom-text-color-3"><?php the_field( 'job-title' ); ?></span></p>
								</div>
							</div>
						</div>

					<?php endwhile; endif; ?>

				</div>

			</div>
		</div>
	</div>
</section>