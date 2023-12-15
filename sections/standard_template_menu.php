
<div class="menu_wrap" style="background-color: #72aab3; border: 1px solid #b7ccd0;">


            <div class="mobile_menu_icon narrow_only">
                <svg viewBox="0 0 125 50" width="40" height="40">
                    <rect></rect>
                    <rect y="25"></rect>
                    <rect y="50"></rect>
                </svg>
            </div>


        <?php
            while( have_rows('menu_items') ){ 
                the_row(); 
        ?>
     
            
            

            <a class="menu_item" href="<?php the_sub_field('link'); ?>">
                <div class="p-1 px-2">
                    <div class="p-2">
                        <?php the_sub_field('label'); ?>
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
    .menu_wrap a {
        transition: all 0.5s ease;
    }
    .menu_wrap, .menu_wrap a, .menu_wrap a:hover { 
        color: #fff;
    }
    .menu_menu {
        display: inline-block;
    }
    .mobile_menu_icon {
        padding-left: 19px;
        fill: #fff;
        text-align: center;
        cursor: pointer;
    }
    .mobile_menu_icon rect {
        height: 10px;
        width: 70px;
    }

    @media screen and (max-width: 576px) {

    }
    @media screen and (max-width: 992px) {
        .menu_wrap {
            flex-direction: column;
        }
        .menu_wrap *:not(.mobile_menu_icon) {
            height: 0;
            display: none;
        }
        .menu_wrap a {
            text-align: center;
            border: 1px solid #fff;
            border-width: 1px 0 0 0;
        }
        .menu_wrap a div div {
            padding-top: 0;
            padding-bottom: 0;
        }
        .menu_wrap:hover a:not(.mobile_menu_icon) {
            height: initial;
            display: initial;
        } 
    }
    @media screen and (min-width: 1200px) {

    }
</style>