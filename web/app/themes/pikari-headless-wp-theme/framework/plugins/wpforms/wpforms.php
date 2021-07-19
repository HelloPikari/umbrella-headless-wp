<?php
 /* -------------------------------------------------------------------------- *\
    Modify the order in which wpforms outputs it's markup
\* -------------------------------------------------------------------------- */

if (! function_exists( 'd6_change_wpform_order' ) && class_exists( 'WPForms' ) && function_exists( 'wpForms' ) ) :
function d6_change_wpform_order() {
  $wpforms = wpForms();

  remove_action( 'wpforms_display_field_before', array( $wpforms->frontend, 'field_label' ), 15);
  add_action( 'wpforms_display_field_after', array( $wpforms->frontend, 'field_label' ), 2, 2);
}

add_action( 'after_setup_theme', 'd6_change_wpform_order');

endif;


?>