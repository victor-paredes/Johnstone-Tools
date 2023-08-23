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

        $current_layout = get_row_layout();

        //echo get_row_layout();

        if ( $current_layout == 'header_image' ) {

            echo 'header';
            //get_template_part( 'sections/standard_template_product_cards' );

        } elseif ( $current_layout == 'about_section' ) {

            echo 'about_section';
            //get_template_part( 'sections/standard_template_product_cards' );

        } elseif ( $current_layout == 'standard_template_product_cards' ) {

            //echo 'standard_template_product_cards .';
            get_template_part( 'sections/standard_template_product_cards' );

        }

        echo '<br>';

    }

    
} else {
    echo 'false';
}



    

 

get_template_part( 'parts/js_footer' );

//test



