<?php $tags = get_the_tags();

if ( $tags && magsy_get_option( 'magsy_disable_post_tags', false ) == false ) : ?>
  <div class="entry-tags">
    <?php foreach ( $tags as $tag ) : ?>
      <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" rel="tag">
        <?php echo esc_html( $tag->name ); ?>
      </a>
    <?php endforeach; ?>
  </div>
<?php endif;