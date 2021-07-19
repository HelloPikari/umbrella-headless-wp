<?php
/**
 * All core theme actions registrations.
 *
 */

 /* -------------------------------------------------------------------------- *\
    Setup Theme
\* -------------------------------------------------------------------------- */


/* -------------------------------------------------------------------------- *\
    After Setup Theme
\* -------------------------------------------------------------------------- */
add_action( 'after_setup_theme', 'd6_theme_support');



/* -------------------------------------------------------------------------- *\
    After Switch Theme
\* -------------------------------------------------------------------------- */
add_action( 'after_switch_theme', 'd6_default_image_sizes' );


/* -------------------------------------------------------------------------- *\
    Init
\* -------------------------------------------------------------------------- */
add_action( 'init', 'register_d6_team_member_cpt', 2);
add_action( 'init', 'register_d6_client_cpt', 2);
add_action( 'init', 'register_d6_course_cpt', 2);
add_action( 'init', 'register_d6_testimonial_cpt', 2);
add_action( 'init', 'register_d6_testimonial_taxonomies', 0);

//add_action( 'init', 'register_course_cpt', 2);


/* -------------------------------------------------------------------------- *\
    Widgets Init
\* -------------------------------------------------------------------------- */
//Register Widget Areas
add_action( 'widgets_init', 'register_d6_widget_areas' );

//Remove some defaults widgets
add_action( 'widgets_init', 'unregister_default_widgets' );

/* -------------------------------------------------------------------------- *\
    Modify Main Query
\* -------------------------------------------------------------------------- */
add_action( 'pre_get_posts', 'alter_query_with_conditional_tags' );


/* -------------------------------------------------------------------------- *\
    WP Head
\* -------------------------------------------------------------------------- */
remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
remove_action('wp_head', 'wp_generator'); // remove wordpress version
remove_action('wp_head', 'feed_links', 2); // remove rss feed links (make sure you add them in yourself if youre using feedblitz or an rss service)
remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links
remove_action('wp_head', 'index_rel_link'); // remove link to index page
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)
remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action('wp_head', 'rel_canonical');
//REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

add_action( 'wp_head', 'd6_add_favicon' ); //Add Favicon




/* -------------------------------------------------------------------------- */
/* -------------------------- THEME SPECIFIC -------------------------------- */
/* -------------------------------------------------------------------------- */

/**
 * Body
 *
 */
add_action( 'd6_admin_init', 'add_admin_menu_separator' );


/**
 * Body
 *
 * Available hooks: d6_body_start, d6_body_end
 */
add_action( 'd6_body_start', 'd6_skip_to_content' );
add_action( 'd6_body_start', 'd6_navbar_primary' );


 /**
 * Main Site Container
 *
 * Available hooks: d6_site_start, d6_site_end
 */
//add_action( 'd6_site_start', 'd6_get_page_header', 15 );
//add_action( 'd6_site_start', 'd6_open_page_layout_container', 16 );

//add_action( 'd6_site_end', 'd6_close_page_layout_container', 16 );


/**
 * Main Site Footer
 */
add_action( 'd6_site_footer', 'd6_newsletter_subscribe', 10 );
add_action( 'd6_site_footer', 'd6_footer_widgets', 11 );



/**
 * Pages
*/
//add_action( 'd6_page_before', $function_to_add );
//add_action( 'd6_page_start', $function_to_add );
//add_action( 'd6_page_end', $function_to_add );
//add_action( 'd6_page_after', $function_to_add );

/**
 * Archives
 */
//add_action( 'd6_archive_loop_end', 'd6_posts_load_more', 10);


/**
 * Posts
 */
add_action( 'save_post', 'd6_update_post_reading_time', 10, 3 );
//add_action( 'd6_site_end', 'd6_after_post_copy', 17 );
//add_action( 'd6_site_end', 'd6_after_post_list', 18 );



// add_filter( 'wpforms_frontend_form_data', function($form) {
//     $test = $form;

//     // Only run on my form with ID = 7785
// 	if( 4393 != $form['id'] )
//         return $fields;

//     foreach ($data['fields'] as $key => $field) {
//         if ($field['type'] == 'text') {
//             $data['fields'][$key]['label'] = "Fuck ya";
//         }
//     }
//     return $data;
// }, 10, 3 );