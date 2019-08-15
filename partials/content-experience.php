<section id="experience" class="section section-no-border m-0 bg-color-grey">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">Experience</h2>
				<section class="timeline custom-timeline" id="timeline">
					<div class="timeline-body">

						<?php

							$num_posts = 10;

							$args = array(
								'post_type' => 'experience',
								'post_per_page' => $num_posts
							);
							$query =  new WP_Query( $args );

							if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();

						?>
						<article class="timeline-box right custom-box-shadow-2">
							<div class="row">
								<div class="experience-info col-lg-3 col-sm-5 bg-color-primary">
									<span class="from text-uppercase">
										From
										<span class="font-weight-semibold"><?php the_field( 'start_date' ); ?></span>
									</span>
									<span class="to text-uppercase">
										To
										<span class="font-weight-semibold"><?php the_field( 'end_date' ); ?></span>
									</span><br /><br />
									<!-- <p>(3 Years 9 Months)</p> -->
									<span class="company font-weight-semibold">
										<?php the_field( 'company' ); ?>
										<span class="company-location font-weight-normal text-uppercase"><?php the_field( 'location' ); ?></span>
									</span>
								</div>
								<div class="experience-description col-lg-9 col-sm-7 bg-color-light">
									<h4 class="text-color-dark font-weight-semibold"><?php the_title(); ?></h4>
									<p class="custom-text-color-2"><?php the_content(); ?></p>
								</div>
							</div>
						</article>

						<?php endwhile; endif; ?>

						<div class="timeline-bar"></div>
					</div>
				</section>
			</div>
		</div>
	</div>
</section>