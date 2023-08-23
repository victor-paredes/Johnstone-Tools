<?php
/*
Template Name: Johnstone Template
Template Post Type: landing-page
*/

// echo the_content();

get_template_part( 'parts/js_header' );




if ( have_rows('standard_template_blocks') == true ) {

    while( have_rows('standard_template_blocks') ) {
        the_row();

        echo get_row_layout();

        // if ( get_row_layout() == 'header' ) {

        //     echo 'header';
        //     //get_template_part( 'sections/standard_template_product_cards' );

        // } elseif ( get_row_layout() == 'about_section' ) {

        //     echo 'about_section';
        //     //get_template_part( 'sections/standard_template_product_cards' );

        // } elseif ( get_row_layout() == 'standard_template_product_cards' ) {

        //     get_template_part( 'sections/standard_template_product_cards' );

        // }

        echo '<br>';
    

    }

    
} else {
    echo 'false';
}



    

 

get_template_part( 'parts/js_footer' );

//test



