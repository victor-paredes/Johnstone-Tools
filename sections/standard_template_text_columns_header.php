
<div class="text_columns_header_wrap" style="margin-top: 25px;">
    <div class="card-deck">




     
                
                <div class="card" style="background-color: transparent; border: initial;">
                    <div class="text_columns_header_textcard p-5">
                        <span class="smalltext pb-2" style="text-transform: uppercase;">
                            <?php the_sub_field('subheader'); ?>
                        </span>
                        <?php the_sub_field('text_content'); ?>
                    </div>
                </div> <!-- END .card -->

                <div class="card" style="background-color: transparent; border: initial;">
                    <div class="p-5">
                        <img src="<?php the_sub_field('featured_image'); ?>">
                    </div>

                </div> <!-- END .card -->



                
             
                    

 





<style>
    .text_columns_header_wrap {
        background-color: #113464;
        color: #fff; 
    }
    .text_columns_header_textcard {
        display: flex;
        height: 100%;
        flex-wrap: wrap;
        align-content: center;
    }
    .text_columns_header_textcard h1 { 
        font-weight: 900;
        font-size: 2rem;
        padding-bottom: 20px;

    }
    .smalltext {
        font-size: .7rem;
    }
</style>







    </div> <!-- card-deck -->
</div> <!-- standard_template_product_cards_wrap -->


