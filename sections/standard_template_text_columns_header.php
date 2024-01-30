
<?php
    $text_columns_header_image_class = 'text_columns_header_wrap_' . rand(500, 1000000);
?>

<div class="text_columns_header_wrap <?php echo $text_columns_header_image_class; ?>" style="margin-bottom: 10px;">
    <div class="card-deck">



                <div class="text_columns_header_image_card card small_only" style="background-color: transparent; border: initial;">
                    <div class="padding_mobile pr-5 text-center">
                        <img class="shadow" src="<?php 
                                            if ( get_sub_field('featured_image_remote_url') ) { 
                                                the_sub_field('featured_image_remote_url'); 
                                            } else { 
                                                the_sub_field('featured_image'); 
                                            } ?>" style="width:100%; border-radius: .25rem;">
                    </div>
                </div> <!-- END .card -->
     
                <div class="card" style="background-color: transparent; border: initial;">
                    <div class="padding_mobile text_columns_header_text_card pt-5 pl-5">


                        <?php if ( get_sub_field('notice_type') != 'none' ) { ?>
                            <div class="notice_wrapper smalltext">
                                <?php if ( get_sub_field('notice_type') == 'information' ) { ?>
                                    <span class="material-symbols-outlined">info</span>
                                <?php } elseif ( get_sub_field('notice_type') == 'page' ) { ?>
                                    <span class="material-symbols-outlined">description</span>
                                <?php } ?>
                                <?php echo '&nbsp;' . get_sub_field('notice_copy'); ?>
                            </div>
                        <?php } ?>


                        <?php the_sub_field('text_content'); ?>


                    </div>
                </div> <!-- END .card -->

                <div class="card wide_only" style="background-color: transparent; border: initial;">
                    <div class="padding_mobile py-5 pr-5 text-center">
                        <img class="shadow" src="<?php 
                                            if ( get_sub_field('featured_image_remote_url') ) { 
                                                the_sub_field('featured_image_remote_url');  
                                            } else {  
                                                the_sub_field('featured_image'); 
                                            } ?>" style="width:100%; border-radius: .25rem; margin-left: 10px;">
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
        margin-bottom: 30px;
        padding-top: 15px;
        padding-right: 5px;
    }
    .text_columns_header_text_card h1 { 
        font-weight: 900;
        font-size: 2rem;
        padding-bottom: 20px;
    }
    .notice_wrapper {
        width: 100%;
        margin-bottom: 15px;
        color: #569DFF !important;
    }
    .notice_wrapper span {
        vertical-align: top;
        font-size: 1rem;
    }
    .smalltext { 
        font-size: .7rem;
    }

    @media screen and (max-width: 576px) {
        .text_columns_header_wrap {
            padding-top: 30px;
            padding-bottom: 40px;
        }
        .text_columns_header_image_card {
            position: initial !important;
            opacity: initial !important; 
        }
   
        
        .text_columns_header_wrap {
            background-image: none !important;
        } 
    }
    @media screen and (max-width: 992px) { 
        .text_columns_header_text_card h1 {
            padding-top: 30px;
        }
        .notice_wrapper {
            margin-top: 25px;
            margin-bottom: -15px;
        }
        <?php echo '.' . $text_columns_header_image_class; ?> {
            background-image: url('<?php 
                    if ( get_sub_field('alt_image_remote_url') ) { 
                        the_sub_field('alt_image_remote_url'); 
                    } else { 
                        the_sub_field('alt_image'); 
                    } ?>
                ');
            background-size: cover;
        }
    }
</style>  







    </div> <!-- card-deck -->
</div> <!-- standard_template_product_cards_wrap -->


