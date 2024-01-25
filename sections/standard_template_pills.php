




<?php
    while( have_rows('text_column_content') ){ 
        the_row(); 
?>

        
    <?php echo get_sub_field('pill_label'); ?>



<?php
    } // END while( have_rows('copy') )
?>




