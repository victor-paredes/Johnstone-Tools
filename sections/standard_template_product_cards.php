
<div class="standard_template_product_cards_wrap container">
    <div class="card-deck">

    










        <?php
            while( have_rows('product_cards') ){ 
                the_row(); 
        ?>
                
                








                <div class="card">


                    <div align="center" style="min-height:260px">
                        <?php if ( get_sub_field( 'featured' ) == true) { ?>
                            <h4 style="background-color: #1F3962; color: #fff">
                                Featured Product
                            </h4>
                        <?php } ?>

                        <a href="<?php the_sub_field('product_link'); ?>" target="_blank">
                            <img src="<?php the_sub_field('image_url'); ?>" style="width: 80%" /> 
                        </a>
                    </div>


                    <div class="card-body d-flex flex-column">
                        <h5 class="text-darkblue" style="text-align: center;">
                            <?php the_sub_field('product_title'); ?>
                        </h5>
                        
                        <h6>
                            <?php the_sub_field('product_subtitle'); ?>
                        </h6>

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






<?php
echo '

<div class="standard_template_product_cards_wrap container">
    <div class="card-deck"> '; ?>

    










        <?php
            while( have_rows('product_cards') ){ 
                the_row(); 
        ?>
                
                






<?php print '

                <div class="card">


                    <div align="center" style="min-height:260px">'; ?>

                        <?php if ( get_sub_field( 'featured' ) == true) { ?>


                            <?php echo '
                            <h4 style="background-color: #1F3962; color: #fff">
                                Featured Product
                            </h4> ' ?>
                        <?php } ?>

                        <?php echo '
                        <a href="'; ?>

                        <?php the_sub_field('product_link'); ?>

                        <?php echo'
                        " target="_blank">
                            <img src="'; ?>
                            
                            <?php the_sub_field('image_url'); ?>
                            
                            <?php echo '" style="width: 80%"'; ?>
                            
                            <?php echo '/> 
                        </a>
                    </div>


                    <div class="card-body d-flex flex-column">
                        <h5 class="text-darkblue" style="text-align: center;">'; ?>
                            <?php the_sub_field('product_title'); ?>

                            <?php echo '
                        </h5>
                        
                        <h6>'; ?>
                            <?php the_sub_field('product_subtitle'); ?>

                            <?php echo'
                        </h6>'; ?>

                        <?php the_sub_field('product_description'); ?>
                        
                        <?php echo '
                        <a class="btn btn-primary mt-auto" href="'; ?>
                        
                        <?php the_sub_field('product_link'); ?>
                        
                        <?php echo '" role="button" target="_blank">
                            Learn More 
                        </a>
                    </div>


                </div> <!-- END .card --> '; ?>


















        <?php
            } // END while( have_rows('product_cards') )
        ?>


            
                
            
                    



     

     

                














    </div> <!-- card-deck -->
</div> <!-- standard_template_product_cards_wrap -->




';
?>