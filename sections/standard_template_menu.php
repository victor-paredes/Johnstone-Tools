
<div class="menu_wrap" style="background-color: #72aab3; border: 1px solid #b7ccd0;">


        


        <?php
            while( have_rows('menu_items') ){ 
                the_row(); 
        ?>
     
            

            <a class="menu_item" href="<?php the_sub_field('link'); ?>">
                <div class="p-1 px-2">
                    <div class="p-2">
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
        justify-content: space-around;
    }
    .menu_wrap, .menu_wrap a, .menu_wrap a:hover { 
        color: #fff;
    }
    .menu_menu {
        display: inline-block;
    }

    @media screen and (max-width: 576px) {

    }
    @media screen and (max-width: 992px) {
        .menu_wrap {
            flex-direction: column;
        }
        .menu_wrap a:not(:first-child) {
            height: 0;
            display: none;
        }
    }
    @media screen and (min-width: 1200px) {

    }
</style>