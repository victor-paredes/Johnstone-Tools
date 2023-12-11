
<div class="standard_template_product_cards_wrap">
    <div class="card-deck">

    

test



        <?php
            while( have_rows('text_column_content') ){ 
                the_row(); 
        ?>
                1
                
                <div class="card" style="background-color: transparent;">
              
                            <?php echo 'field: ' . get_sub_field('column_copy'); ?>

                </div> <!-- END .card -->



        <?php
            } // END while( have_rows('copy') )
        ?>


            
                
            
                    







<style>
    @media ( max-width: 575px ) {
        .featured_product_label {
            margin-bottom: 0 !important;
        }
    }
</style>







    </div> <!-- card-deck -->
</div> <!-- standard_template_product_cards_wrap -->


