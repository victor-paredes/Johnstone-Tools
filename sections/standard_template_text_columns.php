
<div class="standard_template_product_cards_wrap">
    <div class="card-deck">

    










        <?php
            while( have_rows('product_cards') ){ 
                the_row(); 
        ?>
                
                
                <div class="card" style="background-color: transparent;">

                    <?php if ( get_sub_field( 'text_columns' ) == true) { ?>
                        <h4 class="featured_product_label" style="font-family:sans-serif;background-color: #1F3962; color: #fff; margin-bottom: -25px;">
                            Featured Product
                        </h4>
                    <?php } ?>
                


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


