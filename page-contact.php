<?php get_header(); ?>

<div role="main" class="main">

	<section class="page-header page-header-modern bg-color-grey page-header-md">
		<div class="container">
			<div class="row">

				<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
					<h1 class="text-dark">Contact Me</h1>
				</div>

				<div class="col-md-4 order-1 order-md-2 align-self-center">
					<ul class="breadcrumb d-block text-md-right text-dark">
						<li><a href="/">Home</a></li>
						<li class="active">Contact Me</li>
					</ul>
				</div>

			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-12">

					<?php

						if( have_posts() ) : while( have_posts() ) : the_post();
							the_content();
						endwhile; endif;

					?>

				</div>
			</div>
		</div>
	</section>

</div>

<?php get_footer(); ?>