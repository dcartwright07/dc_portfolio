<?php get_header(); ?>

<div role="main" class="main">

	<!-- Project Bar
	============================= -->
	<?php get_template_part('partials/content', 'project-top-bar'); ?>

	<!-- Project Details
	============================= -->
	<div class="container py-4">

		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

		<div class="row">
			<div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">

				<div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark nav-lg d-block overflow-hidden" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'autoHeight': true}" style="height: 510px;">

					<?php
						$images = get_field( 'images' );
						if( $images ) :
					?>
						<div>
							<?php foreach( $images as $image ) : ?>
								<div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
									<img src="<?php echo $image['url']; ?>" class="img-fluid border-radius-0" alt="<?php echo $image['alt']; ?>" />
								</div>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>

				</div>

			</div>
		</div>
		<div class="row pt-4 mt-2 mb-5">
			<div class="col-md-7 mb-4 mb-md-0">

				<h2 class="text-color-dark font-weight-normal text-5 mb-2">Project <strong class="font-weight-extra-bold">Description</strong></h2>

				<?php the_content(); ?>

				<!-- <hr class="solid my-5">

				<strong class="text-uppercase text-1 mr-3 text-dark float-left position-relative top-2">Connect</strong>
				<ul class="social-icons">
					<li class="social-icons-facebook">
						<a href="https://www.facebook.com/nicholas.cartwright1" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
					</li>
					<li class="social-icons-twitter">
						<a href="https://twitter.com/nickcartwri12" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
					</li>
					<li class="social-icons-linkedin">
						<a href="https://www.linkedin.com/in/dominic-cartwright/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
					</li>
					<li class="social-icons-github">
						<a href="https://github.com/dcartwright07" target="_blank" title="Linkedin"><i class="fab fa-github"></i></a>
					</li>
				</ul> -->

			</div>
			<div class="col-md-5">
				<h2 class="text-color-dark font-weight-normal text-5 mb-2">Project <strong class="font-weight-extra-bold">Details</strong></h2>
				<ul class="list list-icons list-primary list-borders text-2">
					<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Client:</strong> <?php the_field( 'client' ); ?></li>
					<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Client:</strong> <?php the_field( 'date' ); ?></li>

					<?php
						$languages = get_field( 'languages' );
						if( $languages ) :
					?>
					<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Languages:</strong>
						<?php foreach( $languages as $language ) : ?>
							<span class="badge badge-dark badge-sm badge-pill px-2 py-1 ml-1"><?php echo $language; ?></span>
						<?php endforeach; ?>
					</li>
					<?php endif; ?>

					<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Platform:</strong> <?php the_field( 'platforms' ); ?></li>
					<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Project URL:</strong>
						<a href="<?php the_field('project_url'); ?>" target="_blank" class="text-dark"><?php the_field( 'project_url' ); ?></a>
					</li>
				</ul>
			</div>
		</div>

		<?php endwhile; endif; ?>

	</div>

</div>

<!-- Recent Projects
============================= -->
<?php get_template_part('partials/content', 'recent-projects'); ?>

<?php get_footer(); ?>