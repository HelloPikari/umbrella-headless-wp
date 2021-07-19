<?php
if ( ! function_exists( 'pikari_get_latest_post' ) ) :
/*
* Query for the latest post
*/
function pikari_get_latest_post() {

  return pikari_query_for_posts([
    'posts_per_page' => 1
  ]);

}
endif;

?>