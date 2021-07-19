<?php


// check function exists.
if( function_exists('acf_register_block_type') && ! function_exists('register_cta_block') ) :

function register_cta_block() {
  // register a testimonial block.
  acf_register_block_type(
    array(
      'name'              => 'cta',
      'title'             => __('Call to Action'),
      'description'       => __('Display a call to action section.'),
      'render_template'   => 'template-parts/blocks/cta.php',
      'category'          => 'formatting',
      'icon'              => 'warning',
      'keywords'          => array('call to action', 'cta', 'section'),
      'align'             => 'full',
      'supports'          => array(
        'align' => true,
        'multiple' => true,
      ),
    )
  );
}

// Register the block.
add_action('acf/init', 'register_cta_block');

endif;

?>