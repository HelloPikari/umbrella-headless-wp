<?php


// check function exists.
if( function_exists('acf_register_block_type') && ! function_exists('register_tech_highlights_slider_block') ) :

function register_tech_highlights_slider_block() {

  acf_register_block_type(
    array(
      'name'              => 'tech-highlights-slider',
      'title'             => 'Technology Highlights Slider',
      'render_template'   => 'template-parts/blocks/tech-highlights-slider.php',
      'category'          => 'formatting',
      'icon'              => 'groups',
      'keywords'          => array('technology', 'course', 'slider'),
      'mode'              => 'preview',
      'align'             => 'center',
      'supports'          => array(
        'multiple' => true,
      ),
      'enqueue_assets' 	=> function() {
        //wp_enqueue_style( 'block-slider', get_template_directory_uri() . '/template-parts/blocks/slider/slider.min.css', array(), '1.0.0' );
        wp_enqueue_script( 'block-tech-highlights-slider', mix('/dist/js/tech-slider.min.js'), array(), wp_get_theme()->get('Version'), true );
      },
    )
  );
}

// Register the block.
add_action('acf/init', 'register_tech_highlights_slider_block');

endif;

?>