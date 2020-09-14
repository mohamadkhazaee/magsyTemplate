<?php
$type = 'tag';
$terms = get_the_tags();

if ( ! $terms ) {
  $terms = get_the_category();
  $type = 'category';
}

if ( $terms && magsy_get_option( 'magsy_disable_related_posts', false ) == false ) {
  $args = array(
    'orderby' => 'rand',
    'post__not_in' => array( get_the_ID() ),
    'posts_per_page' => 4,
  );

  $term_ids = array();

  foreach ( $terms as $term ) {
    $term_ids[] = $term->term_id;
  }

  switch ( $type ) {
    case 'tag' :
      $args['tag__in'] = $term_ids;
      break;
    case 'category' :
      $args['category__in'] = $term_ids;
      break;
  }

  $related_posts = new WP_Query( $args );

  if ( $related_posts->have_posts() ) : ?>
    <div class="bottom-area">
      <div class="container medium">
        <div class="related-posts">
          <p class="u-border-title">مطالب مرتبط </p>
          <div class="row">
            <?php while ( $related_posts->have_posts() ) : $related_posts->the_post(); ?>
              <div class="col-lg-6">
                <div class="post">
                  <?php if ( has_post_thumbnail() ) :
                    magsy_entry_media( array( 'layout' => 'rect_300' ) );
                  endif; ?>
                  <div class="entry-wrapper">
                    <?php magsy_entry_header( array( 'tag' => 'span' ) ); ?>
                    <div class="entry-excerpt u-text-format">
                      <?php the_excerpt(); ?>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif;

  wp_reset_postdata();
}