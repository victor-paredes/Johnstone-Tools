
<div class="standard_template_product_cards_wrap">
    <div class="card-deck">

    










        <?php
            while( have_rows('product_cards') ){ 
                the_row(); 
        ?>
                
                








                <div class="card" style="background-color: transparent;">


                    <div align="center" style="min-height:260px;">
                        <?php if ( get_sub_field( 'featured' ) == true) { ?>
                            <h4 class="featured_product_label" style="background-color: #1F3962; color: #fff; margin-bottom: -25px;">
                                Featured Product
                            </h4>
                        <?php } ?>

                        <a href="<?php the_sub_field('product_link'); ?>" target="_blank" style="display:flex; height:100%; align-items:center; justify-content:center; position:relative; z-index: -1;">
                            <img src="<?php the_sub_field('image_url'); ?>" style="width: 80%;" /> 
                        </a>
                    </div>


                    <div class="card-body d-flex flex-column">
                        <h5 class="text-darkblue" style="text-align: center;">
                            <?php the_sub_field('product_title'); ?>
                        </h5>
                        
                        <?php if ( get_sub_field('product_subtitle') ) { ?>
                            <h6>
                                <?php the_sub_field('product_subtitle'); ?>
                            </h6>
                        <?php } ?>

                        <?php the_sub_field('product_description'); ?>
                        
                        <a class="btn btn-primary mt-auto" href="<?php the_sub_field('product_link'); ?>" role="button" target="_blank">
                            Learn More 
                        </a>
                    </div>


                </div> <!-- END .card -->


















        <?php
            } // END while( have_rows('product_cards') )
        ?>


            
                
            
                    



     

     

                














    </div> <!-- card-deck -->
</div> <!-- standard_template_product_cards_wrap -->


<style>
    @media ( max-width: 575px ) {
        .featured_product_label {
            margin-bottom: 10px !important;
        }
    }
</style>