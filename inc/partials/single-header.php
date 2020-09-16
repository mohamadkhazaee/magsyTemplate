<?php
  if ( ! is_page() ) {
    magsy_entry_header( array( 'tag' => 'h1', 'link' => false, 'author' => true, 'date' => true ) );
  } else {
    magsy_entry_header( array( 'tag' => 'h1', 'link' => false ) );
  }

  get_template_part( 'inc/partials/entry-subheading' );
?>