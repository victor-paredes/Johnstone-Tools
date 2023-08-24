<?php
/*
Template Name: Johnstone Template
Template Post Type: landing-page
*/

// echo the_content();

get_template_part( 'parts/js_header' ); ?>


<div class="container">

    <?php
    if ( have_rows('standard_template_blocks') == true ) { ?>

        <div class="COPY_THIS_CONTAINER_TO_BLOOMREACH">

            


            <!-- POJ block -->
            <div class="container-fluid  my-2 columnsCollectionContainer">
                <div class="container my-3">
                    <div class="row">
                        <div class="col-md">    
                            <img class="w-100 img-fluid align-center" src="https://www.johnstonesupply.com/binaries/content/gallery/johnstonesupplypages/coleman/poj_bottom-banner-01-01.png/poj_bottom-banner-01-01.png/johnstonesupplycms%3Axl" alt="Thats the Power of Johnstone™">
                        </div>
                    </div>
                </div>
            </div>




            
        </div> <!-- end COPY_THIS_CONTAINER_TO_BLOOMREACH -->
        
    <?php } else {
        echo 'no rows';
    } ?>


</div> <!-- end -->



<?php
    
get_template_part( 'parts/js_footer' );

//test



