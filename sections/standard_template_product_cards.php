
<div class="standard_template_product_cards_wrap">

    

<?php
/* Start the Loop */
    while ( have_posts() ) :
        the_post();

        // ACF - Flexible Content fields.
        $sections = get_field( 'standard_template_blocks' );

        if ( $sections ) :
            foreach ( $sections as $section ) :
                echo 'test';
                
            endforeach;
        endif;

    endwhile; // End of the loop.
?>




    
  
</div>