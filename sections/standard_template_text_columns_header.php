
<div class="text_columns_header_wrap" style="margin-top: 25px; margin-bottom: 10px;">
    <div class="card-deck">



                <div class="text_columns_header_image_card card small_only" style="background-color: transparent; border: initial;">
                    <div class="padding_mobile pr-5 text-center">
                        <img class="" src="<?php the_sub_field('featured_image'); ?>" style="width:100%; border-radius: .25rem;">
                    </div>
                </div> <!-- END .card -->
     
                <div class="card" style="background-color: transparent; border: initial;">
                    <div class="padding_mobile text_columns_header_text_card pl-5">
                        <div class="smalltext w-100" style="padding-top: 30px; padding-bottom: 15px; text-transform: uppercase;">
                            <?php the_sub_field('subheader'); ?>
                        </div>
                        <?php the_sub_field('text_content'); ?>
                    </div>
                </div> <!-- END .card -->

                <div class="card wide_only" style="background-color: transparent; border: initial;">
                    <div class="padding_mobile py-5 pr-5 text-center">
                        <img class="" src="<?php the_sub_field('featured_image'); ?>" style="width:100%; border-radius: .25rem;">
                    </div>
                </div> <!-- END .card -->



                
             
                       
    
  
 


 
<style>
    .text_columns_header_wrap {
        background-color: #002b67;
        color: #fff !important; 
        border-radius: .25rem;
        padding-bottom: 10px;
    }
    .text_columns_header_wrap h1 {
        color: #fff !important;
    }
    .text_columns_header_wrap a {
        color: #25aff3 !important;
    }
    .text_columns_header_wrap hr {
        display: block;
        height: 1px;
        width: 60px !important;
        border-top: 1px solid #fff;
        margin: 1em 0; 
        padding: 0;
    }
    .text_columns_header_text_card {
        display: flex;
        height: 100%;
        flex-wrap: wrap;
        align-content: flex-start;
        padding-top: 15px;
    }
    .text_columns_header_text_card h1 { 
        font-weight: 900;
        font-size: 2rem;
        padding-bottom: 20px;

    }
    .smalltext {
        font-size: .7rem;
    }

    @media screen and (max-width: 576px) {
        .text_columns_header_wrap {
            padding-top: 40px;
            padding-bottom: 40px;
        }
        .text_columns_header_image_card {
            position: initial !important;
            opacity: initial !important;
        }
        .text_columns_header_textcard {
            padding: 0 30px !important;
        }
        .text_columns_header_wrap {
            background-image: none !important;
        } 
    }
    @media screen and (max-width: 992px) { 
        
        .text_columns_header_wrap {
            background-image: url('<?php the_sub_field('featured_image'); ?>');
            background-size: cover;
            opacity: 0.1;
        }
    }
</style> 







    </div> <!-- card-deck -->
</div> <!-- standard_template_product_cards_wrap -->


