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

        if ( get_row_layout() == 'standard_template_product_cards' ) {
            echo 'product cards layout';
        } else {
            echo 'not';
        }

        echo '<br>';
        //get_template_part( 'sections/standard_template_product_cards' );
    

    }

    
} else {
    echo 'false';
}



    

 

get_template_part( 'parts/js_footer' );

//test



