<?php


// check function exists.
if( function_exists('acf_register_block_type') && ! function_exists('register_course_details_block') ) :

function register_course_details_block() {
  // register a testimonial block.
  acf_register_block_type(
    array(
      'name'              => 'course-details',
      'title'             => 'Course Details',
      'description'       => __('Manage details for this course'),
      'render_callback'   => 'd6_course_details_block_render_callback',
      'category'          => 'common',
      'icon'              => 'images-alt2',
      'keywords'          => array('meta', 'course'),
      'post_types'        => array('d6_course'),
      'mode'              => 'preview',
      'align'             => '',
      'supports'          => array(
        'multiple' => false,
      ),
    )
  );
}

// Register the block.
add_action('acf/init', 'register_course_details_block');

endif;



function d6_course_details_block_render_callback( $block, $content = '', $is_preview = false, $post_id = 0 ) {

    //Only Show in backend
    if ( ! $is_preview ) return;

    echo '<span class="course-details"><strong>Click to view/edit Course Details</strong></span>';

}

// Automatically add the block to every page
function dev6_register_course_template() {
    $post_type_object = get_post_type_object( 'd6_course' );
    $post_type_object->template = array(
        array( 'acf/course-details' ),
    );
}
add_action( 'init', 'dev6_register_course_template' );

?>