<?php
if ( ! function_exists( 'pikari_posts_pagination' ) ) :
	/**
	 * Documentation for function.
	 */
	function pikari_posts_pagination() {

		the_posts_pagination(
			array(
				'mid_size'  => 2,
				'prev_text' => sprintf(
					'%s <span class="nav-prev-text">%s</span>',
					pikari_get_icon_svg( 'chevron_left', 22 ),
					__( 'Newer posts', 'd6' )
				),
				'next_text' => sprintf(
					'<span class="nav-next-text">%s</span> %s',
					__( 'Older posts', 'd6' ),
					pikari_get_icon_svg( 'chevron_right', 22 )
				),
			)
		);

	}
endif;


// if ( $wp_query->max_num_pages > 1 ) {

//   echo '<div class="archive-pagination">';

//   if ( 'standard' === get_theme_mod( 'pagination_type', 'standard' ) ) {
//     the_posts_pagination(
//       array(
//         'mid_size'  => 2,
//         'prev_text' => esc_html__( 'Previous', 'dev6' ),
//         'next_text' => esc_html__( 'Next', 'dev6' ),
//       )
//     );
//   }

//   echo '</div>'; // .archive-pagination

// }
?>