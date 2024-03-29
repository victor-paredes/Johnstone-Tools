
<div class="menu_wrap bg-gradient">



            <div class="mobile_menu_icon narrow_only">
                <div class="menu_label">
                    <?php echo get_sub_field('menu_label'); ?>
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
     
            
            

        
            <a class="menu_item menu_item_local_link <?php if (get_sub_field('highlight') != 'transparent') { echo 'menu_item_selected'; } ?>" href="<?php echo get_sub_field('link'); ?>" style="background-color: <?php echo get_sub_field('highlight') ?>; color: <?php echo get_sub_field('label_color') ?>;">
                        <?php echo get_sub_field('label'); ?>
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
        z-index: 999;
    }
    .menu_wrap a {
        transition: all 0.5s ease;
        color: var(--dark_blue);
    }
    .menu_menu {
        display: inline-block;
    }
    .mobile_menu_icon {
        padding-left: 19px;
        fill: var(--dark_blue);
        text-align: center;
        cursor: pointer;
        padding-top: 3px;
        padding-bottom: 4px;
    }
    .menu_label {
        display: inline-block;
        vertical-align: middle;
        padding-right: 10px;
        font-size: .7rem;
        font-weight: 900;
        color: var(--dark_blue);
    }
    .mobile_menu_icon rect {
        height: 10px;
        width: 70px;
    }
    .menu_item { 
        padding: 5px 10px;
        margin: 5px 0;
        border-radius: .25rem;
        border: 5px solid;
        border-color: transparent;
    }
    .menu_item:hover { 
        text-decoration: none;
        border-radius: initial;
        border-bottom-width: 5px;
        text-decoration: none;
        border-bottom-color: var(--js_red);
    }
    .menu_item_selected {
        border-radius: .25rem !important;
    }
    .menu_item_selected:hover {
        border-bottom-color: transparent;
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
            margin: 0;
        }
        .menu_wrap:hover .menu_item_local_link {
            display: initial !important;
        }
        .menu_wrap a {
            text-align: center;
        }
        /* .menu_wrap a div div {
            padding-top: 0;
            padding-bottom: 0;
        }  */
        .menu_item {
            border-width: 0;
            border-top-width: 1px !important;
            border-color: #fff;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .menu_item_local_link {
            display: none !important;
        }
        .menu_item_remote_link {
            display: none;
        } 
        .menu_item:hover { 
            border-width: 0 !important;
            border-top-width: 1px !important;
            border-color: #fff !important;
            background-color: #fff !important;
        }
        .menu_item_selected, .menu_item_selected:hover  {
            background-color: var(--js_red) !important;
        }
    }
    @media screen and (min-width: 1200px) {

    }
</style>   