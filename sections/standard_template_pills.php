




<?php
    while( have_rows('pills_reapeater') ){ 
        the_row(); 
?>

        
    <?php echo get_sub_field('pill_label'); ?>



<?php
    } // END while( have_rows('copy') )
?>




