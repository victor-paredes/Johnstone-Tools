
<div class="standard_template_product_cards_wrap">

    

<?php


        // ACF - Flexible Content fields.
        $sections = get_field( 'standard_template_blocks' );

        if ( $sections ) :
            foreach ( $sections as $section ) :
                echo 'test';
                
            endforeach;
        endif;


?>




    
  
</div>