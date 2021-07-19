<?php
if ( ! function_exists( 'pikari_posts_load_more' ) ) :
/*
* A simple button to load more posts
*/
function pikari_posts_load_more() {
  global $wp_query; // you can remove this line if everything works for you

  // don't display the button if there are not enough posts
  if (  $wp_query->max_num_pages > 1 )
    echo '<div class="my-8 block text-center">';
    echo '<button class="load-more-posts btn btn-small btn-blue">Load more posts</button>';
    echo '</div>';
  }
endif;

?>