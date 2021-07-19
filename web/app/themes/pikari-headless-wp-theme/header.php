<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">

  <?php wp_head(); ?>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,800&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

  <?php do_action('pikari_body_start'); ?>

  <main id="content" <?php pikari_get_main_class(); ?> role="main">

  <?php do_action( 'pikari_site_start' ); ?>