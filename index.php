<?php get_header(); ?>

<?php get_template_part( '../template-parts/pickup' )?>


	<!-- content -->
	<div id="content">
		<div class="inner">

			<!-- primary -->
			<main id="primary">
				
			<?php if( have_posts() ) : ?>

				<!-- entries -->
				<div class="entries">
					
				<?php while ( have_posts()) : the_post(); ?>

					<!-- entry-item -->
					<a href="<?php the_permalink(); ?>" class="entry-item">
						<!-- entry-item-img -->
						<div class="entry-item-img">
							<?php if( has_post_thumbnail()) {
								the_post_thumbnail( 'large' );
							} else {
								echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
							}
							 ?>
							 <!-- <img src="<?php echo get_template_directory_uri() ?>/img/entry1.png" alt=""> -->
						</div><!-- /entry-item-img -->

						<!-- entry-item-body -->
						<div class="entry-item-body">
							<div class="entry-item-meta">
								<!-- trueを引数として渡すとリンク付き、falseを渡すとリンクなし -->
								<div class="entry-item-tag"><?php my_the_post_category( false ); ?></div><!-- /entry-item-tag -->
								<!-- <div class="entry-item-tag">カテゴリ名</div>/entry-item-tag -->
								<time class="entry-item-published" datetime="<?php the_time('c') ?>"><?php the_time('Y/m/d') ?></time><!-- /entry-item-published -->
							</div><!-- /entry-item-meta -->
							<h2 class="entry-item-title"><?php the_title(); ?></h2><!-- /entry-item-title -->
							<div class="entry-item-excerpt">
								<?php the_excerpt(); ?>
							</div><!-- /entry-item-excerpt -->
						</div><!-- /entry-item-body -->
					</a><!-- /entry-item -->
					
					<?php endwhile; ?>

				</div><!-- /entries -->
				
			<?php endif; ?>

				<!-- pagenation -->
				<?php get_template_part( '../template-parts/pagenation') ?>

			</main><!-- /primary -->

			<!-- secondary -->
			<?php get_sidebar(); ?>
			<!-- secondary -->


		</div><!-- /inner -->
	</div><!-- /content -->

<?php get_footer(); ?>