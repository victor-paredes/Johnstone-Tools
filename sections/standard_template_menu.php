
<div class="menu_wrap" style="background-color: #72aab3;">





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
    }
</style>