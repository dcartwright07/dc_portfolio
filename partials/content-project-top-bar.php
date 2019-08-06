<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md ">
	<div class="container-fluid">
		<div class="row align-items-center">

			<div class="col">

				<?php

					$prev_post = get_previous_post();
					if (!empty( $prev_post )) :

				?>

					<a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" class="portfolio-prev text-decoration-none d-block appear-animation" data-appear-animation="fadeInRightShorter">
						<div class="d-flex align-items-center line-height-1">
							<i class="fas fa-arrow-left text-dark text-4 mr-3"></i>
							<div class="d-none d-sm-block line-height-1">
								<span class="text-dark opacity-4 text-1">PREVIOUS PROJECT</span>
								<h4 class="font-weight-bold text-3 mb-0"><?php echo esc_attr( $prev_post->post_title ); ?></h4>
							</div>
						</div>
					</a>

				<?php endif; ?>

			</div>
			<div class="col">
				<div class="row">
					<div class="col-md-12 align-self-center p-static order-2 text-center">
						<div class="overflow-hidden pb-2">
							<h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">
								<?php the_title(); ?>
							</h1>
						</div>
					</div>
					<!-- <div class="col-md-12 align-self-center order-1">
						<ul class="breadcrumb d-block text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
							<li><a href="#">Home</a></li>
							<li><a href="#">Portfolio</a></li>
							<li class="active">Wide Slider</li>
						</ul>
					</div> -->
				</div>
			</div>

			<div class="col">

				<?php

					$next_post = get_next_post();
					if (!empty( $next_post )) :

				?>

					<a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" class="portfolio-next text-decoration-none d-block float-right appear-animation" data-appear-animation="fadeInLeftShorter">
						<div class="d-flex align-items-center text-right line-height-1">
							<div class="d-none d-sm-block line-height-1">
								<span class="text-dark opacity-4 text-1">NEXT PROJECT</span>
								<h4 class="font-weight-bold text-3 mb-0"><?php echo esc_attr( $next_post->post_title ); ?></h4>
							</div>
							<i class="fas fa-arrow-right text-dark text-4 ml-3"></i>
						</div>
					</a>

				<?php endif; ?>

			</div>
		</div>
	</div>
</section>