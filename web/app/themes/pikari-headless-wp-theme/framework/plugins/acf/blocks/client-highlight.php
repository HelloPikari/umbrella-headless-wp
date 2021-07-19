<?php


// check function exists.
if( function_exists('acf_register_block_type') && ! function_exists('client_highlight') ) :

function client_highlight() {
  // register a testimonial block.
  acf_register_block_type(
    array(
      'name'              => 'clienthighlight',
      'title'             => __('Client Highlight'),
      'description'       => __('Display a client highlight'),
      'render_template'   => 'template-parts/blocks/client-highlight.php',
      'category'          => 'formatting',
      'icon'              => 'admin-users',
      'keywords'          => array('portfolio', 'clients', 'section'),
      'align'             => 'full',
      'supports'          => array(
        'align' => array('full'),
        'multiple' => true,
      ),
    )
  );
}

// Register the block.
add_action('acf/init', 'client_highlight');

endif;

?>