<?php
/*
Template Name: A2L
Template Post Type: landing-page
*/

// echo the_content(); ?>

<?php wp_head(); ?>

<?php 
// get_template_part( 'parts/js_header' ); ?>


<div class="">




        <div id="COPY_THIS_CONTAINER_TO_BLOOMREACH">


            test

            
        </div> <!-- end COPY_THIS_CONTAINER_TO_BLOOMREACH -->


        



</div> <!-- end -->

<div id="js_tools_wrap">
    <center>
        <button id="copyButton">
            Copy BR Code
        </button>
    </center>
</div>

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

// get_template_part( 'parts/js_footer' );

wp_footer();

