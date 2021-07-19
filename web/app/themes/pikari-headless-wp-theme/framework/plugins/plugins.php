<?php
/* -------------------------------------------------------------------------- *\
    Require the plugin files below
\* -------------------------------------------------------------------------- */
$pikari_plugins = array(
  'acf/acf-field-reg',
  'acf/acf-pro',

  // 'acf/blocks/client-highlight',
  // 'acf/blocks/client-logos',
  // 'acf/blocks/course-details',
  // 'acf/blocks/cta',
  // 'acf/blocks/page-properties',
  // 'acf/blocks/team-member-slider',
  // 'acf/blocks/team-members',
  // 'acf/blocks/tech-highlights-slider',
  // 'acf/blocks/testimonials',

  // 'wpforms/wpforms'

);

wp_file_loader( $pikari_plugins, 'plugins' );


// Unset the global variable.
unset( $pikari_plugins );

?>