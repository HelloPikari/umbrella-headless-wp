<?php

if ( ! function_exists( 'pikari_get_single_template' ) ) :
  /**
   * Get the correct single template based on the current page
   *
   * @return void
   */
  function pikari_get_single_template() {

    if ( is_singular( array( 'pikari_course', 'pikari_clients' ) ) ) {

      get_template_part( 'template-parts/loop/' . get_post_type() . '-single');

    } else {

      get_template_part( 'template-parts/loop/single' );

    }
  }
endif;

?>