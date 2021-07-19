<?php


// check function exists.
if( function_exists('acf_register_block_type') && ! function_exists('register_client_logos_block') ) :

function register_client_logos_block() {
  // register a testimonial block.
  acf_register_block_type(
    array(
      'name'              => 'clientlogos',
      'title'             => __('Client Logos'),
      'description'       => __('Display a list of Client Logos.'),
      'render_template'   => 'template-parts/blocks/client-logos.php',
      'category'          => 'formatting',
      'icon'              => 'images-alt2',
      'align'             => 'full',
      // 'enqueue_assets' 	=> function() {
      //   wp_enqueue_style( 'slick', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1' );
      //   wp_enqueue_style( 'slick-theme', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.8.1' );
      //   wp_enqueue_script( 'slick', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true );

      //   wp_enqueue_style( 'block-slider', get_template_directory_uri() . '/template-parts/blocks/slider/slider.min.css', array(), '1.0.0' );
      //   wp_enqueue_script( 'block-slider', get_template_directory_uri() . '/template-parts/blocks/slider/slider.min.js', array(), '1.0.0', true );
      //},
    )
  );
}

// Register the block.
add_action('acf/init', 'register_client_logos_block');

endif;

?>