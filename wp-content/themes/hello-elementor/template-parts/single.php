<?php
/**
 * The template for displaying singular post-types: posts, pages and user-defined custom post types.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

while ( have_posts() ) :
	the_post();
	?>

<main id="content" <?php post_class( 'site-main' ); ?>>

	<?php if ( apply_filters( 'hello_elementor_page_title', true ) ) : ?>
		<header class="page-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header>
	<?php endif; ?>

	<div class="page-content">
		<?php the_content(); ?>
		<div class="post-tags">
			<?php the_tags( '<span class="tag-links">' . esc_html__( 'Tagged ', 'hello-elementor' ), null, '</span>' ); ?>
		</div>
		<?php wp_link_pages(); ?>
	</div>

	<?php comments_template(); ?>

</main>

	<?php

	// Assuming you want to add your custom section after the "Additional Information" tab

// add_action( 'woocommerce_after_single_product_summary', 'custom_phone_info_section', 15 );

// function custom_phone_info_section() {
//     // Check if we are on a single product page
//     if ( is_product() ) {
//         // Check if the custom template file exists in the theme directory
//         if ( file_exists( get_stylesheet_directory() . '/custom-phone-info.php' ) ) {
//             // Include the custom template file
//             include( get_stylesheet_directory() . '/custom-phone-info.php' );
//         }
//     }
// }

 
endwhile;
