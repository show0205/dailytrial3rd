<?php get_header( )?>

	<!-- content -->
	<div id="content" class="m_one">
		<div class="inner">

			<!-- primary -->
			<main id="primary">

				<!-- breadcrumb -->
				<div class="breadcrumb">
          <?php bcn_display(); ?>
				</div><!-- /breadcrumb -->


        <?php if( have_posts() ) :
        while( have_posts() ) :
          the_post();
           ?>
				<!-- entry -->
				<article class="entry m_page">
          
          <!-- entry-header -->
          <div class="entry-header">
            
          <?php $category = get_the_category();
          if ( $category[0] ): ?>
						<div class="entry-label"><a href="<?php echo esc_url( get_category_link( $category[0]->term_id )); ?>"><?php echo $category[0]->cat_name; ?></a></div><!-- /entry-item-tag -->
            <h1 class="entry-title"><?php the_title(); ?></h1><!-- /entry-title -->
          <?php endif; ?>
						<!-- entry-meta -->
						<div class="entry-meta">
              <time class="entry-published" datetime="<?php the_time( 'c' ); ?>">公開日 <?php the_time( 'Y/m/d' ); ?></time>
              <?php if( get_the_modified_time( 'Y-m-d' ) !== get_the_time( 'Y-m-d' ) ) : ?>
                <time class="entry-updated" datetime="<?php the_modified_time( 'c' ); ?>">最終更新日 <?php the_modified_time( 'Y/n/j' ); ?></time>
                <?php endif ?>
						</div><!-- /entry-meta -->

						<!-- entry-img -->
						<div class="entry-img">
							<img src="img/entry1.png" alt="">
						</div><!-- /entry-img -->

					</div><!-- /entry-header -->

					<!-- entry-body -->
					<div class="entry-body">
            
          <!-- entry-item-img -->
						<div class="entry-item-img">
              <?php if(has_post_thumbnail()) {
                the_post_thumbnail( 'large' );
              } else {
                echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
              };
              ?>
            </div><!-- /entry-item-img -->
            
            <?php the_content(); ?>
            
            <?php wp_link_pages(
              array(
                'before' => '<nav class="entry-links">',
                'after' => '</nav>',
                'link_before' => '',
                'link_after' => '',
                'next_or_number' => 'number',
                'separator' => '',
              )
            ); ?>
					</div><!-- /entry-body -->

        </article> <!-- /entry -->
        <?php
        endwhile;
      endif;
      ?>
			</main><!-- /primary -->

		</div><!-- /inner -->
	</div><!-- /content -->

<?php get_footer(); ?>