
<div class="<?php the_sub_field('css_classes'); ?>" style="margin-top: 25px;">
    <div class="card-deck">




        <?php
            while( have_rows('accordion_content') ){ 
                the_row(); 
        ?>
     
                
                <div class="card" style="background-color: transparent; border: initial;">
              
                            <?php the_sub_field('accordion_item'); ?>
                            <br>
                            <?php the_sub_field('accordion_item_content'); ?>

                </div> <!-- END .card -->



        <?php
            } // END while( have_rows('copy') )
        ?>


            
                
             
                    







<style>
</style>







    </div> <!-- card-deck -->
</div> <!-- standard_template_product_cards_wrap -->


