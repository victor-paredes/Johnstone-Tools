<?php
/*
Template Name: Johnstone Template
Template Post Type: landing-page
*/

// echo the_content(); ?>

<?php wp_head(); ?>

<?php 
get_template_part( 'parts/js_header' ); ?>


<div class="container">

    <?php
    if ( have_rows('standard_template_blocks') == true ) { ?>

        <div id="COPY_THIS_CONTAINER_TO_BLOOMREACH">

            <?php
                while( have_rows('standard_template_blocks') ) {
                    the_row();
                    $current_layout = get_row_layout();

                    if ( $current_layout == 'ad' ) {
                        get_template_part( 'sections/standard_template_ad' );
                    } elseif ( $current_layout == 'about_section' ) {
                        get_template_part( 'sections/standard_template_about_section' );
                    } elseif ( $current_layout == 'product_cards' ) {
                        get_template_part( 'sections/standard_template_product_cards' );
                    } elseif ( $current_layout == 'text_columns' ) {
                        get_template_part( 'sections/standard_template_text_columns' );
                    } elseif ( $current_layout == 'text_columns_header' ) {
                        get_template_part( 'sections/standard_template_text_columns_header' );
                    } elseif ( $current_layout == 'counter' ) {
                        get_template_part( 'sections/standard_template_counter' );
                    } elseif ( $current_layout == 'accordion' ) {
                        get_template_part( 'sections/standard_template_accordion' );
                    } elseif ( $current_layout == 'table' ) {
                        get_template_part( 'sections/standard_template_table' );
                    } elseif ( $current_layout == 'menu' ) {
                        get_template_part( 'sections/standard_template_menu' );
                    } elseif ( $current_layout == 'image_figure' ) {
                        get_template_part( 'sections/standard_template_image_figure' );
                    } elseif ( $current_layout == 'code' ) {
                        get_template_part( 'sections/standard_template_code' );
                    } 

                }
            ?>

            <style>
                <?php the_field('additional_css'); ?>
                
                .small_only {
                    display: none;
                }
                .narrow_only {
                    display: none;
                }
                .wide_only {
                    display: initial;
                }
                .columnsCollectionContainer {
                    padding: 0;
                }
                .columnsCollectionContainer .col-md {
                    /* padding: 0 !important; */
                }
                h1, h2 {
                    line-height: 2.12rem;
                }
                h1 {
                    font-size: 1.9rem;
                }
                h2 {
                    padding-top: 30px;
                    padding-bottom: 18px !important;
                    font-weight: 900 !important;
                    font-size: 1.9rem !important;
                }
                .text_columns_wrap h2:before {
                    display: block;
                    position: absolute;
                    height: 25px;
                    margin: 5px 0 0 -15px;
                    content: ".";
                    background-color: transparent;
                    color: transparent;
                    box-shadow: -10px 0 0 0 #ef3f42;
                }
                p {
                    line-height: 1.4rem;
                }
                .text_columns_header_text_card ol {
                    list-style: none;
                    counter-reset: item;
                }
                .text_columns_header_text_card li {
                    counter-increment: item;
                    padding-bottom: 10px;
                }
                .text_columns_header_text_card li:before {
                    display: inline-block;
                    margin-left:calc(-1.8rem - 10px);
                    content: counter(item);
                    font-weight: 900;
                    width: 1.8rem;
                    text-align: center;
                    border: 1px solid #fff; 
                    border-radius: 999px;
                    margin-right: 10px;
                }

 
                @media screen and (max-width: 576px) {
                    .small_only {
                        display: initial;
                    } 
                    .columnsCollectionContainer .col-md {
                        padding: 0 !important;
                    }
                }
                @media screen and (max-width: 992px) {
                    .narrow_only {
                        display: initial;
                    }
                    .wide_only {
                        display: none;
                    }
                    .padding_mobile {
                        padding: 0 30px !important;
                    }  
                } 

            </style>



            
        </div> <!-- end COPY_THIS_CONTAINER_TO_BLOOMREACH -->


        
        
    <?php } else {
        echo 'Nothing here...';
    } ?>


</div> <!-- end -->




<?php if (is_user_logged_in() == 1) { ?>
    <div id="js_tools_wrap">
            <div style="color: #fff; display: inline-block;">
                Tools >>  
            </div>
            <div id="copyButton" class="tools_button">
                Copy Code
            </div>
            <div id="link_toggle" class="tools_button">
                Menu Links: Local
            </div>
    </div>
<?php } ?> 


 





<script>

    // copy content to clipboard
    document.addEventListener('DOMContentLoaded', function() { 
        const copyButton = document.getElementById('copyButton');
        const container = document.getElementById('COPY_THIS_CONTAINER_TO_BLOOMREACH');

        copyButton.addEventListener('click', function() {
            if (container) {
            const htmlContent = container.outerHTML;

            const tempTextArea = document.createElement('textarea');
            tempTextArea.value = htmlContent;

            document.body.appendChild(tempTextArea);
            tempTextArea.select();

            try {
                const success = document.execCommand('copy');
                if (success) {
                console.log('Content and surrounding HTML copied to clipboard');
                alert("😎 Code copied to clipboard!");
                } else {
                console.error('Copying failed');
                }
            } catch (err) {
                console.error('Error copying to clipboard:', err);
            }

            document.body.removeChild(tempTextArea);
            } else {
            console.error('Container element not found');
            }
        });
    });





    // Function to add CSS property to elements with a specific class
    $menu_links_state = 'local';
    $link_toggle_button = document.getElementById('link_toggle');
    function addDisplayPropertyToMenuItems() {
        // Select all elements with the class '.menu_item_remote_link'
        var menuItems_local = document.querySelectorAll('.menu_item_local_link');
        var menuItems_remote = document.querySelectorAll('.menu_item_remote_link');
        console.log('ping');


        if ($menu_links_state == 'local') {
            menuItems_local.forEach(function(menuItem) {
                menuItem.style.display = 'none';
            });
            menuItems_remote.forEach(function(menuItem) {
                menuItem.style.display = 'initial';
            });
            $link_toggle_button.innerHTML = 'Menu Links: Remote'
            $menu_links_state = 'remote';
        } else {
            menuItems_local.forEach(function(menuItem) {
                menuItem.style.display = 'initial';
            });
            menuItems_remote.forEach(function(menuItem) {
                menuItem.style.display = 'none';
            });
            $link_toggle_button.innerHTML = 'Menu Links: Local'
            $menu_links_state = 'local';
        }


    }

    // Add event listener to links that should trigger the function
    $link_toggle_button.addEventListener('click', function() {
            addDisplayPropertyToMenuItems();
        });







</script>



<?php

the_content();

get_template_part( 'parts/js_footer' );

wp_footer();

