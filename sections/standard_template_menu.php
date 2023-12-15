
<div class="menu_wrap" style="background-color: #72aab3; border: 1px solid #b7ccd0;">





        <?php
            while( have_rows('menu_items') ){ 
                the_row(); 
        ?>
     
                <?php the_sub_field('label'); ?> <br>
               


        <?php
            } // END while( have_rows('copy') )
        ?>


            
                
             
                    












</div> 



<style>
    .menu_wrap {
        border-radius: .25rem;
        border-width: 1px 1px 5px 1px;
    }
</style>