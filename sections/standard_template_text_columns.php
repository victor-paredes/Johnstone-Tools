
<div class="standard_template_product_cards_wrap">
    <div class="card-deck">

    










        <?php
            while( have_rows('copy') ){ 
                the_row(); 
        ?>
                
                
                <div class="card" style="background-color: transparent;">

              
                            <?php the_sub_field('column_copy'); ?>
              
                


                </div> <!-- END .card -->



        <?php
            } // END while( have_rows('product_cards') )
        ?>


            
                
            
                    



     <A>




     </A>






     
     <B>



     </B>

                






<style>
    @media ( max-width: 575px ) {
        .featured_product_label {
            margin-bottom: 0 !important;
        }
    }
</style>







    </div> <!-- card-deck -->
</div> <!-- standard_template_product_cards_wrap -->


