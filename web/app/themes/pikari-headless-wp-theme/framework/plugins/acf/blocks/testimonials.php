<?php


// check function exists.
if( function_exists('acf_register_block_type') && ! function_exists('register_testimonials_block') ) :

function register_testimonials_block() {
  // register a testimonial block.
  acf_register_block_type(
    array(
      'name'              => 'testimonials',
      'title'             => 'Testimonials',
      'description'       => __('Display one or more testimonials'),
      'render_template'   => 'template-parts/blocks/testimonials.php',
      'category'          => 'formatting',
      'icon'              => 'groups',
      'keywords'          => array('testimonial', 'section'),
      'mode'              => 'preview',
      'align'             => 'center',
      'supports'          => array(
        'multiple' => true,
      ),
      'enqueue_assets' 	=> function() {
        //wp_enqueue_style( 'block-slider', get_template_directory_uri() . '/template-parts/blocks/slider/slider.min.css', array(), '1.0.0' );
        wp_enqueue_script( 'block-testimonials', mix('/dist/js/slider.min.js'), array(), wp_get_theme()->get('Version'), true );
      },
    )
  );
}

// Register the block.
add_action('acf/init', 'register_testimonials_block');

endif;

?>