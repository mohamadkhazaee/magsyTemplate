<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php get_template_part( 'inc/partials/single-top' ); ?>

  <div class="container small">
    <?php magsy_ads( array( 'location' => 'before_post_content', 'container' => false ) ); ?>
    <?php if ( magsy_show_hero() ) :
      get_template_part( 'inc/partials/entry-subheading' );
    endif; ?>
    <div class="entry-wrapper">
      <div class="entry-content u-text-format u-clearfix">
        <?php the_content(); ?>
      </div>
      <?php
        wp_link_pages( 'before=<div class="page-links">&after=</div>&link_before=<span>&link_after=</span>' );
        get_template_part( 'inc/partials/entry-tags' );
        magsy_ads( array( 'location' => 'after_post_content', 'container' => false ) );

        get_template_part( 'inc/partials/author-box' );
      ?>
    </div>
  </div>
</article>