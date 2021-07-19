<?php
  $post_meta            = array( 'category', 'date', 'reading_time');
?>
<div class="container-narrow mx-auto text-white my-16 text-center">
  <div class="flex flex-col ">
  <?php the_title( '<h1 class="entry-title text-3xl md:text-5xl text-white sep-center">', '</h1>' ); ?>
  <?php d6_get_post_meta( 'author', false ); ?>
  <?php d6_get_post_meta( $post_meta, false ); ?>
  </div>
</div>