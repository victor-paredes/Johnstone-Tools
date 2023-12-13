
<div class="<?php the_sub_field('css_classes'); ?>" style="margin-top: 25px;">




        <?php
            while( have_rows('accordion_content') ){ 
                the_row(); 
        ?>
     
                
                <div class="" style="background-color: transparent; border: initial;">
              
                            <b><?php the_sub_field('accordion_item'); ?></b>
                            <br>
                            <?php the_sub_field('accordion_item_content'); ?>

                </div> <!-- END .card -->



        <?php
            } // END while( have_rows('accordion_content') )
        ?>


            
                
             
                    













</div> <!-- standard_template_product_cards_wrap -->




<style>
</style>


