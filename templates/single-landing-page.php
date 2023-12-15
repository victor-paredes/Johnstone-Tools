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
                    } elseif ( $current_layout == 'standard_template_product_cards' ) {
                        get_template_part( 'sections/standard_template_product_cards' );
                    } elseif ( $current_layout == 'additional_resources' ) {
                        get_template_part( 'sections/standard_template_additional_resources' );
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
                    } 

                }
            ?>

            <style>
                
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
                    padding: 0 !important;
                }
                h2 {
                    font-size: 1.9rem !important;
                    padding-bottom: 10px !important;
                    font-weight: 900 !important;
                    font-size: 2rem !important;
                }


                @media screen and (max-width: 576px) {
                    /* .narrow_only {
                        display: initial;
                    }
                    .wide_only {
                        display: none;
                    } */
                    .text_columns_header_textcard {
                        padding: 0 30px !important;
                    }
                    .padding_mobile {
                        padding: 0 30px !important;
                    } 
                }
                @media screen and (max-width: 992px) {
                    .narrow_only {
                        display: initial;
                    }
                    .wide_only {
                        display: none;
                    }
                }
                /* @media screen and (min-width: 1200px) {

                } */

            </style>
            
        </div> <!-- end COPY_THIS_CONTAINER_TO_BLOOMREACH -->


        
        
    <?php } else {
        echo 'Nothing here...';
    } ?>


</div> <!-- end -->




<?php if (is_user_logged_in() == 1) { ?>
    <div id="js_tools_wrap">
        <center>
            <button id="copyButton">
                Copy BR Code
            </button>
        </center>
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

