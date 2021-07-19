<?php
/**
 * The template for displaying all single blog posts
 *
 * @since 1.0.0
*/

?>

<section class="single-post">

  <?php if ( d6_can_show_post_thumbnail() ) : ?>
  <header class="bg-fractal-bottom-center pt-24 pb-16 overflow-hidden entry-header">
    <?php get_template_part( 'template-parts/header/post', 'header' ); ?>
  </header>
  <?php endif; ?>

  <div class="container-post mx-auto pt-8 md:pt-16">

  <?php //get_sidebar(); ?>

    <?php while ( have_posts() ) : the_post();

      do_action( 'd6_post_before' );

      get_template_part( 'template-parts/content/content', 'single' );

      if ( is_singular( 'attachment' ) ) {
        // Parent post navigation.
        the_post_navigation(
          array(
            'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'dev6' ), '%title' ),
          )
        );

      } elseif ( is_singular( 'post' ) ) {
        // Previous/next post navigation.
        the_post_navigation(
          array(
            'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'dev6' ) . '</span> ' .
              '<span class="screen-reader-text">' . __( 'Next post:', 'dev6' ) . '</span> <br/>' .
              '<span class="post-title">%title</span>',
            'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'dev6' ) . '</span> ' .
              '<span class="screen-reader-text">' . __( 'Previous post:', 'dev6' ) . '</span> <br/>' .
              '<span class="post-title">%title</span>',
          )
        );
      }

      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) {
        comments_template();
      }

      do_action( 'd6_post_after' );

    endwhile; ?>

  </div>
</section>