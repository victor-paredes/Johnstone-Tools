<?php
/*
Template Name: Johnstone SANDBOX
Template Post Type: landing-page
*/

// echo the_content();

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
                    }

                }
            ?>


            
        </div> <!-- end COPY_THIS_CONTAINER_TO_BLOOMREACH -->
        
    <?php } else {
        echo 'no rows';
    } ?>


</div> <!-- end -->



<script>
    let BRcode = document.getElementById("COPY_THIS_CONTAINER_TO_BLOOMREACH");
    console.log(BRcode);
    //let BRcode_string = JSON.parse(JSON.stringify(BRcode));
    //navigator.clipboard.writeText(BRcode);
    //navigator.clipboard.writeText(BRcode);

    

        var range = document.createRange();
        range.selectNode( document.getElementById("COPY_THIS_CONTAINER_TO_BLOOMREACH") ); //changed here
        window.getSelection().removeAllRanges(); 
        window.getSelection().addRange(range); 
        document.execCommand("copy");
        window.getSelection().removeAllRanges();
        alert("data copied");
        console.log(containerid);

</script>



<?php
    
get_template_part( 'parts/js_footer' );





