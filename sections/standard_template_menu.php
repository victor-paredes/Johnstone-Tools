
<div class="menu_wrap" style="background-color: #72aab3; border: 1px solid #b7ccd0;">





        <?php
            while( have_rows('menu_items') ){ 
                the_row(); 
        ?>
     
                
            <a href="<?php the_sub_field('link'); ?>">
                <div class="w-100">
                    <div class="w-100">
                        <?php the_sub_field('label'); ?> <br>
                    </div>
                </div>
            </a>
               


        <?php
            } // END while( have_rows('copy') )
        ?>


            
                
             
                    





 






</div> 



<style>
    .menu_wrap {
        display: flex;
        border-radius: .25rem;
        justify-content: space-evenly;
    }
</style>