<?php


// check function exists.
if( function_exists('acf_register_block_type') && ! function_exists('register_team_members_block') ) :

function register_team_members_block() {

  acf_register_block_type(
    array(
      'name'              => 'team-members',
      'title'             => 'Team Members',
      'render_template'   => 'template-parts/blocks/team-members.php',
      'category'          => 'formatting',
      'icon'              => 'groups',
      'keywords'          => array('team', 'team member', 'employee'),
      'mode'              => 'preview',
      'align'             => 'center',
      'supports'          => array(
        'multiple' => true,
      ),
      'enqueue_assets' 	=> function() {
        //wp_enqueue_style( 'block-slider', get_template_directory_uri() . '/template-parts/blocks/slider/slider.min.css', array(), '1.0.0' );
        //wp_enqueue_script( 'block-slider', mix('/dist/js/slider.min.js'), array(), wp_get_theme()->get('Version'), true );
      },
    )
  );
}

// Register the block.
add_action('acf/init', 'register_team_members_block');

endif;

?>