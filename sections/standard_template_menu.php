
<div class="menu_wrap" style="background-color: #72aab3; border: 1px solid #b7ccd0;">





        <?php
            while( have_rows('menu_items') ){ 
                the_row(); 
        ?>
     
                
            <div>
                <?php the_sub_field('label'); ?> <br>
            </div>
               


        <?php
            } // END while( have_rows('copy') )
        ?>


            
                
             
                    





 






</div> 



<style>
    .menu_wrap {
        display: flex;
        border-radius: .25rem;
    }
</style>