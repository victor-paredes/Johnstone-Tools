<?php
/*
Template Name: Johnstone Template
Template Post Type: landing-page
*/

?>

<br />
<?php // echo the_content(); ?>

<?php 

/* Start the Loop */
while ( have_posts() ) :
    the_post();

    // ACF - Flexible Content fields.
    $sections = get_field( 'standard_template_blocks' );

    if ( $sections ) :
        foreach ( $sections as $section ) :
            test
            //get_template_part( 'flexible-content/sections/' . $template, '', $section );
        endforeach;
    endif;

endwhile; // End of the loop.



