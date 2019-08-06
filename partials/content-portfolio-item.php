<?php $post_id = get_the_ID(); ?>
<div class="portfolio-item">
	<a href="<?php the_permalink(); ?>">
		<span class="thumb-info thumb-info-lighten border-radius-0">
			<span class="thumb-info-wrapper border-radius-0">

				<?php the_post_thumbnail( 'medium' ); ?>

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