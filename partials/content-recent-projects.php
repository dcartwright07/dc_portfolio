<section class="section section-height-3 bg-color-grey m-0 border-0">
	<div class="container container-lg">
		<h4 class="mb-3 text-4 text-uppercase">Recent <strong class="font-weight-extra-bold">Projects</strong></h4>
		<div class="row">

			<?php

				$num_posts = 4;
				$args = array(
					'post_type' => 'portfolio',
					'post_per_page' => $num_posts
				);
				$query =  new WP_Query( $args );

				if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();

			?>

			<div class="col-12 col-sm-6 col-lg-3 mb-4">
				<?php get_template_part('partials/content', 'portfolio-item'); ?>
			</div>

			<?php endwhile; endif; ?>

		</div>
	</div>
</section>