<?php
/*
Template Name: Johnstone Template
Template Post Type: landing-page
*/

// echo the_content();

get_template_part( 'parts/js_header' );




if ( have_rows('standard_template_blocks') == true ) {
    echo 'true';
} else {
    echo 'false';
}

get_template_part( 'sections/standard_template_product_cards' );

    

 

get_template_part( 'parts/js_footer' );

//test



