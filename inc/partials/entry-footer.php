<div class="entry-footer">
    <time  datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
      <?php
        if ( magsy_get_option( 'magsy_enable_human_readable_date', false ) == true ) {
          echo sprintf( _x( '%s ago', '%s = human-readable time difference', 'magsy' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) );
        } else {
          echo printf( get_the_date() );
        }
      ?>
    </time>
</div>