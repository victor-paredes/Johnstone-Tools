<?php
/*
Template Name: Johnstone Template
Template Post Type: landing-page
*/

// echo the_content();

wp_enqueue_style('bootstrap', get_template_directory_uri() . '/styles/johnstone.css');



/* Start the Loop */
while ( have_posts() ) :
    the_post();

    // ACF - Flexible Content fields.
    $sections = get_field( 'standard_template_blocks' );

    if ( $sections ) :
        foreach ( $sections as $section ) :
            echo 'test';
            get_template_part( 'sections/standard_template_product_cards' );
        endforeach;
    endif;

endwhile; // End of the loop.



