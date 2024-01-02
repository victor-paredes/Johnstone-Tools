
<div class="menu_wrap" style="background-color: #72aab3; border: 1px solid #b7ccd0;">



            <div class="mobile_menu_icon narrow_only">
                <div class="menu_label">
                    <?php the_sub_field('menu_label'); ?>
                </div>

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
     
            
            

            <a class="menu_item menu_item_remote_link" href="<?php the_sub_field('link'); ?>" style="background-color: <?php echo get_sub_field('highlight') ?>;">
                        <?php the_sub_field('label'); ?>
            </a>
            <a class="menu_item menu_item_local_link" href="<?php the_sub_field('link'); ?>" style="background-color: <?php echo get_sub_field('highlight') ?>;">
                        <?php the_sub_field('label'); ?>
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
    .menu_label {
        display: inline-block;
        vertical-align: middle;
        padding-right: 10px;
        font-size: .7rem;
        font-weight: 900;
    }
    .mobile_menu_icon rect {
        height: 10px;
        width: 70px;
    }
    .menu_item { 
        padding: 5px 10px;
        margin: 5px 0;
        border-radius: .25rem;
        border: 1px solid;
        border-color: transparent;
    }
    .menu_item:hover { 
        text-decoration: none;
        border-color: red;
    }
    .menu_item_remote_link {
        display: none;
    }

    @media screen and (max-width: 576px) {
 
    }
    @media screen and (max-width: 992px) {
        .menu_wrap {
            flex-direction: column;
        }
        .menu_wrap .menu_item {
            display: none;
        }
        .menu_wrap:hover .menu_item_remote_link {
            display: initial !important;
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
        .menu_item_local_link {
            display: none !important;
        }
        .menu_item_remote_link {
            display: none;
        }
    }
    @media screen and (min-width: 1200px) {

    }
</style>