<?php
/*
Template Name: Johnstone Template
Template Post Type: landing-page
*/

// echo the_content(); ?>

<?php wp_head(); ?>

<?php 
get_template_part( 'parts/js_header' ); ?>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

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
                    } elseif ( $current_layout == 'pills' ) {
                        get_template_part( 'sections/standard_template_pills' );
                    } 
                    

                }
            ?>
 
            <style>
                <?php the_field('additional_css'); ?>
                #COPY_THIS_CONTAINER_TO_BLOOMREACH {
                    --dark_blue: #002b67;
                    --js_red: #ef3f42;
                }
                .bg-gradient {
                    background: rgba(228,235,241,1);
                    background: -moz-linear-gradient(top, rgba(228,235,241,1) 0%, rgba(199,215,227,1) 100%);
                    background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(228,235,241,1)), color-stop(100%, rgba(199,215,227,1)));
                    background: -webkit-linear-gradient(top, rgba(228,235,241,1) 0%, rgba(199,215,227,1) 100%);
                    background: -o-linear-gradient(top, rgba(228,235,241,1) 0%, rgba(199,215,227,1) 100%);
                    background: -ms-linear-gradient(top, rgba(228,235,241,1) 0%, rgba(199,215,227,1) 100%);
                    background: linear-gradient(to bottom, rgba(228,235,241,1) 0%, rgba(199,215,227,1) 100%);
                    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e4ebf1', endColorstr='#c7d7e3', GradientType=0 );
                }
                
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
                    height: 1.37rem;
                    margin: 7.2px 0 0 -15px;
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
                .js-rounded img {
                    border-radius: .25rem;
                    border: 1px solid #ddd;
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
                Tools &nbsp;
            </div>
            <div id="copyButton" class="tools_button">
                Copy Code
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









</script>



<?php

the_content();

get_template_part( 'parts/js_footer' );

wp_footer();

