<form method="get" class="search-form inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <input type="search" class="search-field inline-field" placeholder="جستجو..." autocomplete="off" value="<?php echo esc_attr( get_search_query() ) ?>" name="s" required="required">
  <button type="submit" class="search-submit"><i class="mdi mdi-magnify"></i></button>
</form>